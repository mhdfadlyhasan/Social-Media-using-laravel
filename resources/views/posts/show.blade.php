@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" class="w-100">
        </div>
        <div class="col-4">
            <div>
            <a href="/profile/{{$post->user_id}}"><h2>{{$post->user->username}}</h2></a>
                <p>{{$post->caption}}</p>
            </div>

        </div>
    </div>
</div>
@endsection
