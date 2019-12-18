{{-- gets the layout from layout.blade.php  --}}
@extends('layout')

{{--this is the long way of using the @section command--}}
{{--@section('title')--}}
{{--	Customers Section--}}
{{--@endsection--}}

{{--short version--}}
@section('title', 'Customers Section')

@section('content')
	<h1> My Customers </h1>

	{{--the form --}}
	<form action="customers" method="post" class="pb-5">
		<div class="input-group">
	{{--		the old function takes the value entered into the field and brings it back if the form doesn't pass validation--}}
			<div class="form-group">
				<label> Title:
					<input type="text" name="title" value="{{ old('title') }}">
				</label>
				<div> {{$errors->first('title')}} </div>
			</div>

			<div class="form-group">
				<label> Name:
					<input type="text" name="name" value="{{ old('name') }}">
				</label>
				<div> {{$errors->first('name')}} </div>
			</div>

			<div class="form-group">
				<label> Email:
					<input type="text" name="email" value="{{ old('email') }}">
				</label>
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
			


		</div>

		<button type="submit"> Add Customer </button>

		@csrf
	</form>

	<hr>
	{{--this is a blade method of looping using the foreach function --}}

	<div class="row">
		<div class="col-6">
			<h3>Active Customers</h3>
			<ul>
				@foreach ($activeCustomers as $value)
					<li>
						{{$value->title}} {{ $value->name }} ({{$value->company->name}})
					</li>
				@endforeach
			</ul>
		</div>

		<div class="col-6">
			<h3>Inactive Customers</h3>
			<ul>
				@foreach ($inactiveCustomers as $value)
					<li>
						{{$value->title}} {{ $value->name }} ({{$value->email}})
					</li>
				@endforeach
			</ul>
		</div>
	</div>

@endsection