@extends('master')
@section("content")
<div class="container custom-login">
<div class="text-center main-title">
        <h1>LOG IN</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col col-lg-7 content-box">
            <div class="col col-md-9 mx-auto form-input">
            <form action="login" method="POST">
                @csrf
                <!-- input box start -->
                <div class="form-group">
                    <label for="emailInput">Email</label>
                    <input type="email" name="email" class="form-control" id="emailInput" placeholder="enter email">
                </div>
                <div class="form-group">
                    <label for="passwordInput">Password</label>
                    <input type="password" name="password" class="form-control" id="passwordInput" placeholder="enter password">
                </div>
                <!-- input box end -->
                    <div class="forgot">
                        <a href="changepassword">Forgot password</a>
                    </div>
                    <!-- submit-button start -->
                    <div class="text-center custom-button">
                        <button type="submit" class="btn btn-primary">Log In</button>
                    </div>
                    <!-- submit-button end -->
                    <div class="text-center signun-link">
                        <p>Need an account? <a href="signup" style="font-weight:500;">Sign up</a></p>
                    </div>             
            </form>
            <!-- form end -->
            </div>
        </div>
    </div>
</div>
@endsection