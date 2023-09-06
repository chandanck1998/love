@extends('auth.layout')

@section('content')
<form action="{{ route('login') }}" method="post">
    <h4>Login</h4>
    @csrf
    <!-- Email input -->
    <div class="form-outline mb-4 mt-4">
        <label class="form-label" for="form2Example1">Email address</label>
        <input type="email" name="email" id="form2Example1" class="form-control" />
        @if ($errors->has('email'))
        <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="form2Example2">Password</label>
        <input type="password" name="password" id="form2Example2" class="form-control" />
        @if ($errors->has('password'))
        <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
    </div>

    <!-- 2 column grid layout for inline styling -->
    <div class="row mb-4">
        <div class="col d-flex justify-content-center">
            <!-- Checkbox -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="form2Example31" checked />
                <label class="form-check-label" for="form2Example31"> Remember me </label>
            </div>
        </div>

    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-2 w-100">Sign in</button>
    <div class="row mb-4">
        <div class="col">
            <!-- Simple link -->
            <a href="#!">Forgot password?</a>
        </div>
    </div>

    <!-- Register buttons -->
    <div class="text-center">
        <p>Not a member? <a href="{{ route('register') }}">Register</a></p>
        <!-- <p>or sign up with:</p>
        <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-google"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-twitter"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-github"></i>
        </button> -->
    </div>
</form>
@endsection