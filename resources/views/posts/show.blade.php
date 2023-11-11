@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="p-2">
                        <img src="{{ $post->user->profile->profileImage() }}"  class="rounded-circle w-25">
                    </div>
                    <div>
                        <div class="font-bold">
                            <a href="/profile/{{$post->user->id}}">
                                {{   $post->user->username   }}
                            </a>
                            <a href="#" class="pl-2">Follow</a>
                        </div>
                    </div>
                </div>
                <p><span class="font-bold"><strong><a href="/profile/{{$post->user->id}}">{{   $post->user->username   }}</a></strong></span> {{ $post->caption }}</p>

            </div>
        </div>
    </div>
</div>

@endsection
