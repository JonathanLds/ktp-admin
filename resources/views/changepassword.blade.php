@extends('master')
@section("content")
<div class="text-center main-title">
        <h1>RESET PASSWORD</h1>
    </div>
<div class="container custom-login">
    <div class="row justify-content-center">
        <div class="col col-lg-7 content-box">
            <div class="col col-md-9 mx-auto form-input">
            <form>
                @csrf
                <!-- input box start -->
                <div class="form-group">
                    <label for="emailInput">Email</label>
                    <input type="email" name="email" class="form-control" id="emailInput" placeholder="enter email">
                </div>
                <div class="text-center custom-button">
                        <button type="submit" class="btn btn-primary">Get link</button>
                    </div>   
            </form>
            <!-- form end -->
            </div>
        </div>
    </div>
</div>
@endsection