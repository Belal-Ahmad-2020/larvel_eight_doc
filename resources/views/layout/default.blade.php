<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIllesotne - @yield('title')</title>
</head>
<body>
    <!-- parent view -->
    <div class="">
        <a href="">Home</a> |
        <a href="">Home</a> |
        <a href="">About</a> |
        <a href="">Contact</a> |
        <a href="">Service</a> |
        <hr>
    </div>



<div>
@yield('content', 'If there is no content in that page show this info')
</div>




<div>
<p>&copy; App</p>
</div>





</body>
</html>