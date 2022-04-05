@extends('master')
@section("content")
<div class="container ephatha-container">
    <div class="row">
       <h4 class="ephathac text-center">Upload Ephatha PDF</h4>
        <div class="col-12 epht-col pt-3">
            <div class="card epht-card mb-5">
                <form action="/upload" method="post" class="epht-form">
                <div class="mb-3">
                    <input class="form-control epht-pdf" type="file" id="formFile" multiple/>
                </div>
                    <button type="button" class="epht-button mb-3">Upload</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection