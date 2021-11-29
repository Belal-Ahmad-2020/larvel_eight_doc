@extends('layout.default')
@section('title', "Create Posts")

@section('content')

<form action="" method="post">
    <p>Post Titke</p>
    <input type="text" name="title" id="">
    <p>Post Body</p>
    <input type="text" name="content" id="">
    <p>Post Image</p>
    <input type="file" name="pic" id="">
    <br>
    <br>
    <button type="submit">Create Post</button>
</form>

@endsection