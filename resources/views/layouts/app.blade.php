<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Todo List</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    @include('inc.navbar')
    @include('inc.messages')

    <div>
        @yield('content')
    </div>

</body>
<footer class="text-center">Copyright 2021</footer>

</html>