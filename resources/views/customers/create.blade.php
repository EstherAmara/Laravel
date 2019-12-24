@extends('layouts.app')
@section('title', 'Add new Customers')

@section('content')
    <h1> Add new customers </h1>

    {{--the form --}}
    <div class="row">
        <div class="col-12">
            <form action="/customers" method="post">
                @include('customers/form')
                <button type="submit" class="btn btn-success"> Add Customer </button>
                @csrf
            </form>
        </div>
    </div>


@endsection