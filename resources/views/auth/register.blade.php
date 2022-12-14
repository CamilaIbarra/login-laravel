@extends('layout.auth-master')

@section('content')
    <h1>Register</h1>
    <form action="/register" method="POST">
        @csrf
        @include('layout.partials.messages')
        <div class="form-floating mb-3">
            <input type="text" placeholder="name@example.com" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="form-floating mb-3">
            <input type="text" placeholder="username" name="username" class="form-control" id="exampleInputPassword1">
            <label for="exampleInputPassword1" class="form-label">Username</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" placeholder="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
            <label for="exampleInputPassword1" class="form-label">Password</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" placeholder="Confirm password" name="password" class="form-control" id="exampleInputPassword1">
            <label for="exampleInputPassword1" class="form-label">Confirm password</label>
        </div>
        <div class="form-floating mb-3">
            <a href="/login">Already have an account? Login</a>
        </div>
        <button type="submit" class="btn btn-primary">Create account</button>
    </form>
@endsection