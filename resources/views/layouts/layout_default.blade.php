<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{'Web Estágios'}}</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
{{--@include('templates.menu')--}}

<div class="container">
    @yield('content')
</div>

<script src="{{asset('js/app.js')}}"></script>

</body>
</html>