<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title') - Curso Laravel</title>
</head>
<body class="bg-gradient-to-r from-blue-500 to-cyan-500">
    <div class="container mx-auto px-4 py-8">
        @yield('content')
    </div>

</body>
</html>