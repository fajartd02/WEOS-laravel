@extends('layouts.temp')

@section('title')
Edited Forum
@endsection

@section('contentTemp')

@extends('layouts.app')

@section('content')
@endsection

<nav> 
<a href="/post">Back</a>
</nav>
<h1>Edit Forum</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/post/{{$article->id}}" method = "POST" enctype="multipart/form-data">
    @csrf
    @METHOD('PUT')

    <div class="form-group">
        <label for="title">Judul</label>
        <input type="text" name="title" id="title" class="form-control" value = "{{ old('title') ? old('title') : $article->title }}">
    </div>

    <div class="form-group">
        <label for="subject">Subject</label>
        <textarea name="subject" id="subject" class="form-control" rows = "3">{{ old('subject') ? old('subject') : $article->subjects }}</textarea>
    </div>

    <div class="form-group">
        <label for="thumbnail">Upload Gambar</label> <br>
        <input type="file" class ="form-control-file" id="thumbnail" name="thumbnail">
    </div> <br>
    <button type = "submit" class = "btn btn-primary">Submit</button>
    <br>
    <a href = "/post/{{$article->slug}}" class="btn btn-sm btn-info"><< </a>
</form>
@endsection