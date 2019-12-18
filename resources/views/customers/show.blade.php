@extends('layout')

@section('title', 'Details for '.$customer->name)

@section('content')
    <div class="row">
        <div class="col-12">
            <h1> Details for {{$customer->name}} </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p><strong>Name:</strong> {{$customer->name}}</p>
            <p><strong>Email:</strong> {{$customer->email}}</p>
            <p><strong>Company's Name:</strong> {{$customer->company->name}}</p>
            <p><strong>Company's Phone:</strong> {{$customer->company->phone}}</p>
            <p><strong>Status:</strong> {{$customer->active}}</p>

        </div>
    </div>
@endsection