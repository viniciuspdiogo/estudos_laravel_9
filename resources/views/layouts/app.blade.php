<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title')</title>
</head>
<body class="bg-gray-50">
    <div class="app">
        <form action="{{ route('logout')}}" method="post">
            @csrf
            <button type="submit" style="padding: 5px;border: 1px solid #333;background: transparent;border-radius: 5px;margin: 10px;color: #00F;">
                Logout</button>
        </form>
        @yield('content')
    </div>
</body>
</html>