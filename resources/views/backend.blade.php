<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Typing Test Results</title>
    <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
</head>
<body>
<div class="position-ref full-height">
    <div class="content">
        <h1 class="text-center">Online Typing Test Results</h1>
        <br>
        <ul>
            @foreach($tests as $test)
                <li>{{ $test }}</li>
            @endforeach
        </ul>
        {{ $tests->links() }}
    </div>
</div>
</body>
</html>
