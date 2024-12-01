<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Application</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="min-h-screen flex flex-col">
        <nav class="bg-blue-500 text-white p-4">
            <div class="container mx-auto flex justify-between">
                <a href="{{ url('/') }}" class="text-lg font-bold">Minha Aplicação</a>
                <div>
                    <a href="{{ route('login') }}" class="px-4 py-2">Login</a>
                    <a href="{{ route('register') }}" class="px-4 py-2">Registrar</a>
                </div>
            </div>
        </nav>

        <main class="flex-grow">
            @yield('content')
        </main>
    </div>

</body>
</html>
