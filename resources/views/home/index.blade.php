@extends('layout.app-master')

@section('content')

    <h1 class="container">Home</h1>
    
    @auth
        <p>Welcome {{auth()->user()->name ?? auth()->user()->username}}, your account is authenticated</p>
        <p>
            <a href="/logout">Logout</a>
        </p>
    @endauth

    @guest
        <p>To see detailed web content please <a href="/login">login</a></p>
    @endguest
@endsection