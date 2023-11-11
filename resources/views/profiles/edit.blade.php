@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" method="Post" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Edit Profile</h1>
                </div>
                <div class="form-group row mb-3">
                    <label for="title" class="col-md-4 col-form-label">title</label>
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}" required autocomplete="title" autofocus>

                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="row">
                    <label for="description" class="col-md-4 col-form-label">description</label>
                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}" required autocomplete="description" autofocus>

                    @error('description')
                        <span  role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <label for="url" class="col-md-4 col-form-label">url</label>
                        <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url }}" required autocomplete="title" autofocus>


                    @error('url')
                        <span  role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Profile Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">

                    @error('caption')
                        <span  role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row pt-4 w-25">
                    <button class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
