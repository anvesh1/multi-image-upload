<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Laravel 5.2 DropZone Js</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {!! HTML::style('/packages/bootstrap/css/bootstrap.min.css') !!}
    {!! HTML::style('/assets/css/style.css') !!}
    {!! HTML::style('/packages/font-awesome/css/font-awesome.min.css') !!}
    {!! HTML::script('https://code.jquery.com/jquery-2.1.4.min.js') !!}
    {!! HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') !!}

    @yield('head')

</head>

<body>

<div class="container">
    <br><br>

@yield('content')

</div>
</body>

@yield('footer')
</html>
