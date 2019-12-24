@extends('layouts.app')

@section('title', 'Contact us')
@section('content')
    <h1> Contact Us</h1>

    <form action="/contact" method="post">

        <div class="form-group">
            <label for="name"> Name: </label>
            <input type="text" id="name" name="name" value="{{ old('name')}}" class="form-control">
            <div> {{$errors->first('name')}} </div>
        </div>

        <div class="form-group">
            <label for="email"> Email: </label>
            <input type="text" id="email" name="email" value="{{ old('email')}}" class="form-control">
            <div> {{$errors->first('email')}} </div>
        </div>

        <div class="form-group">
            <label for="message"> Message: </label>
            <textarea name="message" id="message" cols="30" rows="10" class="form-control" value="{{old('message')}}"></textarea>
            <div> {{$errors->first('message')}} </div>
        </div>

        @csrf
        <button type="submit" class="btn btn-success"> Send Message  </button>

    </form>

@endsection