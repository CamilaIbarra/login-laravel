@extends('layout.auth-master')

@section('content')
    <h1>Login</h1>
    <form action="/login" method="POST">
        @csrf
        @include('layout.partials.messages')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username / Email address</label>
            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <a href="/register">Create account</a>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
@endsection


