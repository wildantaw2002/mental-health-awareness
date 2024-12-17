<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body className="bg-gray-100">
    <h1 className="text-2xl font-bold text-center mt-4">CRUD ARTIKEL</h1>
    <div className="mt-3">
        @yield('konten')
    </div>
</body>
</html>
