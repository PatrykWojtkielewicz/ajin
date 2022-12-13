<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <!-- TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/pqh1agigvkv547khuf7xyehg024sk75vqh0i7zixj59yqc5e/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/8714f19098.js" crossorigin="anonymous"></script>
    <!-- CSRF token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="flex flex-col min-h-screen">
    <nav id="header" class="w-full z-30 top-0 bg-indigo-900 text-white p-4">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
            <p class="text-left">
                <a href="" class="p-4" ><i class="fas fa-home fa-2x"></i></a>
            </p>
            <h1 class="text-right">
                abc
            </h1>
        </div>
    </nav>
    <div class="flex-auto">
        @yield('content')
    </div>
    <footer id="footer" class="w-full z-30 top-0 bg-indigo-900 text-white text-center p-6">
        <p class="inline text-center">Blog &copy2021</p>
    </footer>
</body>
</html>