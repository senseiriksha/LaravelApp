<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pagetitle }}</title>

    <style>
        #main{
            display: block;
            margin: 0 auto;
            width: 1140px;
            border: 1px solid black;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div id="main">
        <h1>@yield('title')</h1>

        @yield('content')
    </div>
</body>
</html>