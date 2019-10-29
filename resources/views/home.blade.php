@extends('layouts.app')

@section('content')
<div class="container">

<h1>Time Line</h1>
<div class="row pt-5">

@foreach ($contents as $content) 
    <div class="col-4 pb-4">
                    <a href="/p/{{$content->id}}">
                        <img src="/storage/{{$content->image}}" class="w-100" >
                    </a>
    </div>
@endforeach
</div>
</div>
@endsection
