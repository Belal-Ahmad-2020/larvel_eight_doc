<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Middleware</title>
</head>
<body>
    
    <form action="{{ url('/token') }}" method="post">
        @method('PUT')
        <input type="hidden" name="csrf-token" value="{{ csrf_token() }}">
    </form>

<script>

    $.ajaxSetup({
        header : {
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });

    $baseUrl = {{!! json_encode(url('/')) !!}}
    alert($baseUrl);

</script>


</body>
</html>