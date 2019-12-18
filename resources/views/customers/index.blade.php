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