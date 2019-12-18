@extends('layout')
@section('title', 'Add new Customers')

@section('content')
    <h1> Add new customers </h1>

    {{--the form --}}
    <div class="row">
        <div class="col-12">
            <form action="/customers" method="post">
                @include('customers/form.blade.php')
                @csrf
            </form>
        </div>
    </div>


@endsection