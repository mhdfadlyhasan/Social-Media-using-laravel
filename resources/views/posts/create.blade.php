@extends('layouts.app')

@section('content')
<div class="container">
   <form action="/p" enctype="multipart/form-data" method="post">
   @csrf
   <div class="row">
        <div class="col-8 offset-2">
        <div class="row">
            <h1>
                Add New Post
            </h1>
        </div>
                <div class="form-group row">
                            <label for="caption" class="col-md-4 col-form-label">Post Caption</label></label>

                                <input id="caption" type="text" class="form-control @error('caption') 
                                is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                                @error('caption')
                                    <strong>{{ $errors->first('caption') }}</strong>
                                    </span>
                                @enderror
                </div>

        <div class="row">
            <input type="file" class="form-control-file" id="image" name="image">
            @error('image')
                <strong>{{ $errors->first('image') }}</strong><br>
            @enderror
            <div class="row pt-4">
                <button class="btn btn-primary">Add new Photo</button>
            </div>
        </div>
        </div>
   </div>
   </form>
</div>
@endsection
