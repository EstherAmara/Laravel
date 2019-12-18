@extends('layout')

@section('title', 'Create Companies')

@section('content')
    <h1> Create Companies </h1>

    <form action="companies" method="post" class="pb-5">
        <div class="input-group">
            <div class="form-group">
                <label>
                    Company Name
                    <input type="text" name="name" value="{{old('name')}}" />
                </label>
                <div> {{$errors->first('name')}} </div>
            </div>

            <div class="form-group">
                <label>
                    Company Phone
                    <input type="text" name="phone" value="{{old('phone')}}" />
                </label>
                <div> {{$errors->first('phone')}} </div>
            </div>

            <button type="submit"> Add Company </button>
        </div>

        @csrf
    </form>

    <hr/>

    <div class="row">
        <div class="col-6">
            <h3> Companies </h3>
            <ul>
                @foreach($companies as $company)
                    <li> {{$company->name}} ({{$company->phone}}) </li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection
