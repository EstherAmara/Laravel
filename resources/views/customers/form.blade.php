
{{--		the old function takes the value entered into the field and brings it back if the form doesn't pass validation--}}
<div class="form-group">
    <label for="title"> Title: </label>
    <input type="text" id="title" name="title" value="{{ old('title') ?? $customer->title}}" class="form-control">
    <div> {{$errors->first('title')}} </div>
</div>

<div class="form-group">
    <label for="name"> Name: </label>
    <input type="text" id="name" name="name" value="{{ old('name') ?? $customer->name}}" class="form-control">
    <div> {{$errors->first('name')}} </div>
</div>

<div class="form-group">
    <label for="email"> Email: </label>
    <input type="text" id="email" name="email" value="{{ old('email') ?? $customer->email}}" class="form-control">
    <div> {{$errors->first('email')}} </div>
</div>

<div class="form-group">
    <label for="status"> Status: </label>
    <select name="active" id="status" class="form-control">
        @foreach ($customer->activeOptions() as $key => $value)
            <option value="{{$key}}" {{$customer->active==$value?'selected':''}} > {{$value}}</option>
        @endforeach
{{--        <option value="" disabled> Select customer status </option>--}}
{{--        <option value="1" {{$customer->active=='Active'?'selected':''}}> Active </option>--}}
{{--        <option value="2" {{$customer->active=='Inactive'?'selected':''}}> Inactive </option>--}}
    </select>
</div>

<div class="form-group">
    <label for="company_id"> Company </label>
    <select name="company_id" id="company_id" class="form-control">
        @foreach ($companies as $value)
            <option value = "{{$value->id}}" {{$value->id==$customer->company_id?'selected':''}}> {{$value->name}}</option>
        @endforeach
    </select>
</div>
