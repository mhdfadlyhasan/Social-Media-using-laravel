@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img class="rounded-circle p-3" src="{{'https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909__340.png' ?? '' }}" style="width: 300px; height: 300px" >
        </div>
        <div class="col-9 pt-5 pl-5">
            <div><h1>{{$user->username}}
            </h1></div>
            
            <div class="d-flex">
                <div><strong>{{$user->profile->title ?? ''}}</strong></div>
            </div>
            <div>{{$user->profile->description ?? ''}}</div>
            <div class=""><a href="{{$user->profile->url ?? 'N/A'}}">My Social Media</a></div>
            <div class="">{{$user->posts->count()}} <strong>Posts</strong></div>
        </div>
    </div>
    <div>
    @can('update',$user->profile)
        <button>
            <div class="justify-content-between"><a href="/p/create">Add an Post</a></div>
        </button>
        <button>
            <div class="justify-content-between"><a href="/profile/{{$user->id}}/edit">Edit Data</a></div>
        </button>
    @endcan
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/p/{{$post->id}}">
                        <img src="/storage/{{$post->image}}" class="w-100" >
                    </a>
                </div>
        @endforeach
    </div>
</div>
@endsection
