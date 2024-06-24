@extends('layout.layout')

@section('content')
@include('component.message')
    <div class="w-50 center border rounded px-3 py-3 mx-auto my-5">
        <h1>Login</h1>
        <form action="/session/login" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" value="{{Session::get('email')}}" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="mb-3 d-grid">
           <button name="submit" type="submit" class="btn btn-primary">Login</button>
        </div>
        <div class="mb-3 d-grid">
            <a href="/session/register" class="text-muted">Don't have an account?</a>
         </div>
        </form>
    </div>
@endsection
