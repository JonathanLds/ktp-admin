@extends('master')
@section("content")
<div class="container main-cont" style="min-height: 100vh;">
    <div class="row">
        <div class="col-12">
            <div class="container article-cont" style="margin-top: 5rem;">
            <h4 class="ephathac text-center" style="margin-top: 5rem;">Post Article</h4>
                <form action="" method="" class="form article-form">
                    <div class="form-floating article-floating mb-3">
                        <input type="text" class="form-control" id="articleTitle">
                        <label for="articleTitle">Article title</label>
                        </div>
                        <div class="form-floating article-floating mb-3">
                        <input type="text" class="form-control" id="articleAuthor">
                        <label for="articleAuthor">Author</label>
                    </div>
                        <div class="form-floating article-floating">
                        <textarea class="form-control" id="mainArticle" style="height: 30rem"></textarea>
                        <label for="mainArticle">Post article here</label>
                        </div>
                        <button type="submit" class="art-bth mb-5">Post article</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection