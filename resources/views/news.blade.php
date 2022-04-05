@extends('master')
@section("content")
<div class="container news-main">
    <div class="row">
        <div class="col-12">
        <h4 class="newsc text-center">Post News</h4>
            <div class="container news-cont">
                <form class="form news-form">
                        <div class="form-floating article-floating">
                        <textarea class="form-control" id="mainNews" style="height: 5rem"></textarea>
                        <label for="mainNews">Vawikhatah point khat te te a post tur</label>
                        </div>
                        <button type="submit" class="art-bth mb-5">Post news</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection