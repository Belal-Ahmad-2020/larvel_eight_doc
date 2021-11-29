<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    
    
    <br><br><hr>
    <h2>Create  Posts</h2>
    <br><hr>

    @if($errors->any())
        <div>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li> <br>
            @endforeach
        </div>
    @endif
    <br><br><br>    

    <form  method="post"  action="{{ route('post.store') }}" >    
    @csrf
        <p>Title</p>
        <input type="text" name="title" id="" value="{{ old('title') }}"><br>
        @error('title')
            <li>{{ $message }}</li>
        @enderror
        <p>Content</p>
        <textarea name="content" id="" cols="30" rows="10" value="{{ old('content') }}">
        </textarea><br>
        <span>Image</span>
        <input type="file" name="pic" id="" value="{{ old('pic') }}">
        <br>
        <input type="submit" value="Create" name='create'>

    </form>

</body>
</html>