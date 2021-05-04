<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link href="/css/app.css" rel="stylesheet">
    <title>Todos List</title>
</head>
<body class="bg-black">
    @include('inc.navbar')
    @include('inc.messages')
    <div>
        @yield('content')
    </div>

    <footer class="text-center text-blue-400 font-bold">
        @@Copyright 2021
    </footer>
</body>
</html>