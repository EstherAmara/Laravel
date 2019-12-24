@extends('layouts.app')
@section('title', 'Edit Details for '.$customer->name)

@section('content')
    <h1> Edit Details for {{$customer->name}} </h1>

    {{--the form --}}
    <div class="row">
        <div class="col-12">
            <form action="/customers/{{$customer->id}}" method="post">
                @method('PATCH')
                @include('customers/form')
                <button type="submit" class="btn btn-success"> Update Details  </button>
            </form>
        </div>
    </div>


@endsection