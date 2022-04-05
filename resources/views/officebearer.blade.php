@extends('master')
@section("content")
<div class="container photo-container">
    <div class="row">
        <div class="col-12 createalbum-col">
        <h4 class="albumc text-center">Office Bearers</h4>
            <div class="container photoup-header">
                <form action="" class="create-album">
                    <div class="album-create mb-2">
                        <label for="leader" class="form-label">Leader</label>
                        <input type="text" class="form-control" id="leader">
                    </div>
                    <div class="album-create mb-2">
                        <label for="asstLeader" class="form-label">Assistan Leader</label>
                        <input type="text" class="form-control" id="asstLeader">
                    </div>
                    <div class="album-create mb-2">
                        <label for="secretary" class="form-label">Secretary</label>
                        <input type="text" class="form-control" id="secretary">
                    </div>
                    <div class="album-create mb-2">
                        <label for="AasstSecretary" class="form-label">Assistant Secretaty</label>
                        <input type="text" class="form-control" id="asstSecretaty">
                    </div>
                    <div class="album-create mb-2">
                        <label for="treasurer" class="form-label">Treasurer</label>
                        <input type="text" class="form-control" id="treasurer" >
                    </div>
                    <button type="submit" class="mt-1">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection