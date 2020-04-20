@extends('frontEnd.layoutes.mastar')
@section('title','Register Employe')
@section('content')
    @include('frontEnd.register')
    <div class="employe-register">
        <h2 class="text-center">Register Account Employe</h2>
        <div class="container">
            @foreach($errors->all as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
            <form action="{{route('postEmployeRegister')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class = "form-group">
                    <label>firstName</label>
                    <input type="text" name="firstName" class="form-control">
                </div>
                <div class = "form-group">
                    <label>lastName</label>
                    <input type="text" name="lastName" class="form-control">
                </div>
                <div class = "form-group">
                    <label>userName</label>
                    <input type="text" name="userName" class="form-control">
                </div>
                <div class = "form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class = "form-group">
                    <label>password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class = "form-group">
                    <label>phoneNumber</label>
                    <input type="number" name="phoneNumber" class="form-control">
                </div>
                <div class = "form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class = "form-group">
                    <input type="submit" value="Register" class="btn btn-primary">
                </div>
            </form>
            <a href="#">Login</a>
        </div>

    </div>



@endsection