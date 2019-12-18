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
    <p><a href="customers/create"> Add Customers </a> </p>

	@foreach($customers as $customer)
        <div class="row">
                <div class="col-2">
                    {{$customer->id}}
                </div>
                <div class="col-4">
                    <a href="/customers/{{$customer->id}}">
                        {{$customer->name}}
                    </a>
                </div>
                <div class="col-4">
                        {{$customer->company->name}}
                </div>
                <div class="col-2">
                    {{$customer->active}}
                </div>
        </div>
    @endforeach

@endsection