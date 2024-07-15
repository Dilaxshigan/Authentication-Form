@extends("layouts.default")

@section("title", "Register")

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

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h2>Sign Up</h2>
    <form id="signupForm" method="POST" action="{{ route('register.post') }}">
        @csrf
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <button type="submit">Sign Up</button>
        </div>
    </form>
    <div id="message" class="message"></div>
</div>
@endsection
