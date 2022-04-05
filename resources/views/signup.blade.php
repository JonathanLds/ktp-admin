@extends('master')
@section("content")
<div class="text-center main-title">
        <h1>SIGN UP</h1>
    </div>
<div class="container custom-login">
    <div class="row justify-content-center">
        <div class="col col-lg-7 content-box">
            <div class="col col-md-9 mx-auto form-input">
            <form action="signup" method="POST">
                @csrf
                <!-- input box start -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="enter email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="enter password" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm password</label>
                    <input type="password" name="confirm_password" class="form-control" id="password_confirmation" placeholder="enter password" required>
                </div>
                <!-- input box end -->
                    <!-- submit-button start -->
                    <div class="text-center custom-button">
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </div>
                    <!-- submit-button end -->
                    <div class="text-center signun-link">
                        <p>Already have an account? <a href="login" style="font-weight:500;">Log in</a></p>
                    </div> 
            </form>
            <!-- form end -->
            </div>
        </div>
    </div>
</div>
@endsection