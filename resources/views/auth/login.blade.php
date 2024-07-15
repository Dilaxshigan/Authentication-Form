@extends("layouts.default")
@section("title", "Login")
@section("content")
<div class="container">

    @if(session()->has("success"))
        <div class="alert alert-success">
            {{ session()->get("success") }}
        </div>
    @endif

    @if(session()->has("error"))
        <div class="alert alert-danger">
            {{ session()->get("error") }}
        </div>
    @endif

    <h2>Login</h2>
    <form id="loginForm" method="POST" action="{{route('login.post')}}">
        @csrf
        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <button type="submit">Login</button>
        </div>
    </form>
</div>
@endsection