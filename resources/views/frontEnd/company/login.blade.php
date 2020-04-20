@extends('frontEnd.layoutes.mastar')
@section('title','login company')

@section('content')
    <div class="login">
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
        <form action="{{route('comapnylogin')}}" method="POST">
            {{ csrf_field() }}
            <h2 class="text-center">Login Company</h2>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" required = "required">
            </div>
            <div class="form-group">
                <label>password</label>
                <input type="password" name="password" class="form-control" required = "required">
            </div>
            <div>
                <input type="submit" value="login" class="btn btn-info">
            </div>
        </form>
    </div>



@endsection