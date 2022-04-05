@extends('master')
@section("content")
<div class="container photo-container">
    <div class="row">
        <div class="col-12 createalbum-col">
        <h4 class="albumc text-center">Create album</h4>
            <div class="container photoup-header">
                <form action="" class="create-album">
                    <div class="album-create mb-2">
                        <label for="AlbumName" class="form-label">Album name</label>
                        <input type="text" class="form-control" id="AlbumName" placeholder="album name">
                    </div>
                    <div class="album-create mb-2">
                        <label for="AlbumDate" class="form-label">Date</label>
                        <input type="date" class="form-control" id="AlbumDate" placeholder="">
                    </div>
                    <button type="submit" class="mt-1">Create</button>
                </form>
            </div>
        </div>
       <h4 class="text-center mt-5">Upload Photo</h4>
        <div class="col-12 upload-col pt-3">
            <div class="card photo-card mb-5">
                <form action="/upload" method="post" class="photo-form">
                    <div class="drag-area mt-5">
                        <span class="inner">Drag & drop image here or <span class="select">Browse</span></span>
                        <input name="file" type="file" class="photo-input" multiple />
                    </div>
                    <div class="album-select">
                        <label for="AlbumSelect" class="form-label s-album">Select album</label>
                        <select class="form-select" id="AlbumSelect">
                            <option value="1">One</option>
                            <option value="1">One</option>
                            <option value="1">One</option>
                        </select>
                    </div>
                    <button type="button" class="up-button mb-3">Upload</button>
                </form>
                <div class="container blank-container"></div>
            </div>
        </div>
    </div>
</div>
@endsection