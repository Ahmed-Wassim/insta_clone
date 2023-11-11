@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" method="Post" enctype="multipart/form-data">
    @method('POST')
    @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row mb-3">
                    <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
                        <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                        @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Post Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">

                    @error('caption')
                        <span  role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row pt-4 w-25">
                    <button class="btn btn-primary">Add New post</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
