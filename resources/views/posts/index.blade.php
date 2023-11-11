@extends('layouts.app')

@section('content')

<div class="container">
    @foreach ($posts as $post)
        <div class="row">
            <div class="col-4 offset-4">
                <a href="/profile/{{$post->user->id}}">
                <img src="/storage/{{ $post->image }}" class="w-100"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-4 offset-4">
                <div>

                    <p><span class="font-bold"><strong><a href="/profile/{{$post->user->id}}">{{   $post->user->username   }}</a></strong></span> {{ $post->caption }}</p>
                </div>
            </div>
        </div>
    @endforeach
    <div class="row">
        <div class="col-12">
            {{ $posts->links() }}
        </div>
    </div>
</div>

@endsection
