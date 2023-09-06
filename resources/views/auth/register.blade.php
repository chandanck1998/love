@extends('auth.layout')

@section('content')
<form action="{{ route('register') }}" method="post">
    <h4>Register With Us</h4>
    <b class="text-danger">Free for limited user</b>
    @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    @csrf
    <!-- Email input -->
    <div class="form-outline mb-3 mt-3">
        <label class="form-label" for="form2Example1">For who ?</label>
        <select name="role" class="form-control">
            <option value="">Choose Role</option>
            <option {{ $errors->has('mobile')?'selected':'' }} value="user">My Self</option>
            <option value="parent">Family Member</option>
        </select>
        @if ($errors->has('role'))
            <small class="text-danger">{{ $errors->first('role') }}</small>
        @endif
    </div>
    
    <div class="form-outline mb-3">
        <!-- <label class="form-label" for="form2Example1">Name</label> -->
        <div class="input-group">
            <input type="text" name="first_name" placeholder="First Name" id="form2Example01" class="form-control" />
            <input type="text" name="last_name" placeholder="Last Name" id="form2Example02" class="form-control" />
        </div>
        @if ($errors->has('first_name'))
            <small class="text-danger d-block">{{ $errors->first('first_name') }}</small>
        @endif
        @if ($errors->has('last_name'))
            <small class="text-danger d-block">{{ $errors->first('last_name') }}</small>
        @endif
    </div>

    <div class="form-outline mb-3">
        <!-- <label class="form-label" for="form2Example1">Email address</label> -->
        <input type="email" name="email" placeholder="Email address" id="form2Example1" class="form-control" />
        @if ($errors->has('email'))
            <small class="text-danger">{{ $errors->first('email') }}</small>
        @endif
    </div>

    <div class="form-outline mb-3" style="display:{{ $errors->has('mobile')?'':'none' }}">
        <!-- <label class="form-label" for="form2Example0">Mobile</label> -->
        <input type="text" maxlength="10" name="mobile" placeholder="Mobile" id="form2Example0" class="form-control"
        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />
        @if ($errors->has('mobile'))
            <small class="text-danger">{{ $errors->first('mobile') }}</small>
        @endif
    </div>

    <!-- Password input -->
    <div class="form-outline mb-3">
        <!-- <label class="form-label" for="form2Example2">Password</label> -->
        <input type="password" name="password" placeholder="Password" id="form2Example2" class="form-control" />
        @if ($errors->has('password'))
            <small class="text-danger">{{ $errors->first('password') }}</small>
        @endif
    </div>
    
    <div class="form-outline mb-3">
        <!-- <label class="form-label" for="form2Example2">Confirm Password</label> -->
        <input type="password" name="password_confirmation" placeholder="Confirm Password" id="form2Example3" class="form-control" />
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-2 w-100">Register</button>

    <!-- Register buttons -->
    <div class="text-center">
        <p>Already a member? <a href="{{ route('login') }}">Sign in</a></p>
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
@section('js')
<script>
    $(document).ready(function(){
        $('[name=role]').on('change',function(){
            if(this.value=='user'){
                $('[name=mobile]').parent().show();
            }else{
                $('[name=mobile]').parent().hide();
            }
        });
    });
</script>
@endsection