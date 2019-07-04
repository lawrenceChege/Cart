@extends('layout')

@section('content')
<div>
    <h1>Sign up</h1>
    <form action="">
        <input type="text"
        id="firstname"
        name="firstname"
        placeholder="Enter Your firstname"
        pattern="[a-zA-Z]{5,10}"
        required />

        <div class="invalid">
            The firstname can olny be a series of alphabetical characters
        </div>

        <input type="text"
        id="lastname"
        name="lastname"
        placeholder="Enter Your lastname"
        pattern="[a-zA-Z]{5,10}"
        required />

        <div class="invalid">
            The lastname can olny be a series of alphabetical characters
        </div>

        <input type="text"
        id="username"
        name="username"
        placeholder="Enter Your username"
        pattern="[a-zA-Z0-9]{5,10}"
        required />

        <div class="invalid">
            The username can only be a series of alphanumeric characters
        </div>

        <input type="email"
        name="email"
        id="email"
        placeholder="Enter your email"
        required>
        <div class="invalid">
            The email should be a valid email
        </div>
        <input type="password" 
        name="password" 
        id="password"
        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
        required>
        <div class="invalid">
            Passwords should contain atleast one lowercase letter, one uppercase letter and atleast one number
        </div>
        <div class="push-down-top">
            <button class="btn btn-link">Cancel</button>
            <button class="btn">Login</button>
        </div>

    </form>
</div>
@endsection