
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
    <select name="active" id="active" class="form-control">
        <option value="" disabled> Select customer status </option>
        <option value="1"> Active </option>
        <option value="2"> Inactive </option>
    </select>
</div>

<div class="form-group">
    <label for="company_id"> Company </label>
    <select name="company_id" id="company_id" class="form-control">
        @foreach ($companies as $value)
            <option value = "{{$value->id}}"> {{$value->name}}</option>
        @endforeach
    </select>
</div>
