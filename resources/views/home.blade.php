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
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen">
    <nav id="header" class="w-full z-30 top-0 bg-c-primary text-white p-4">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 pt-2 pb-5">
            <h1 class="float-left text-3xl">Ajin airlines</h1>
            <div class="float-right">
                <ul class="list-none">
                    <li class="inline px-2">Plan</li> |
                    <li class="inline px-2">My bookings</li> |
                    <li class="inline px-2">Sign up</li> |
                    <li class="inline px-2">Login</li> |
                    <li class="inline px-2">Help</li>
                </ul>
            </div>
        </div>
        <form action="" method="" class="w-full">
            <div class="w-3/5 container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
                <div class="flex flex-col gap-2 gap-y-8 pb-4 w-8/12">
                    <div class="grid grid-cols-2 gap-2">
                            <div class="h-8 bg-c-gray">
                                <label for="cityFromInput" class="block pl-1 text-gray-500">From</label>
                                <input list="cityFrom" name="cityFrom" id="cityFromInput" class="focus:outline-none pl-1 text-black w-full h-full bg-c-gray">
                            </div>
                            <datalist id="cityFrom">
                                <option value="Warsaw">
                            </datalist>

                            <div class="h-8 bg-c-gray">
                                <label for="cityToInput" class="block pl-1 text-gray-500">To</label>
                                <input list="cityTo" name="cityTo" id="cityToInput" class="focus:outline-none pl-1 text-black w-full h-full bg-c-gray">
                            </div>
                            <datalist id="cityTo">
                                <option value="Warsaw">
                            </datalist>
                        </span>
                    </div>
                    <div class="grid grid-cols-3 gap-2">
                            <div class="h-8 bg-c-gray">
                                <label for="departureInput" class="block pl-1 text-gray-500">Departure</label>
                                <input type="text" name="departure" id="departureInput" onfocus="(this.type='date')" class="focus:outline-none pl-1 w-full h-full bg-c-gray text-black">
                            </div>

                            <div class="h-8 bg-c-gray">
                                <label for="arrivalInput" class="block pl-1 text-gray-500">Arrival</label>
                                <input type="text" name="arrival" id="arrivalInput" onfocus="(this.type='date')" class="focus:outline-none pl-1 w-full h-full bg-c-gray text-black">
                            </div>
                        
                            <div class="h-8 bg-c-gray">
                                <label for="passengerInput" class="block pl-1 text-gray-500">Passengers</label>
                                <input type="number" min="1" name="passengers" id="passengerInput" class="focus:outline-none pl-1 w-full h-full bg-c-gray text-black">
                            </div>
                    </div>
                </div>
                <div class="flex flex-col px-4 w-4/12">
                    <div class="grid grid-cols-1 gap-2">
                        <p class="text-xs">By clicking search you agree to the Website Terms of Use</p>
                        <input type="submit" value="Szukaj" class="bg-c-secondary h-8 hover:bg-blue-400">
                    </div>
                </div>
            </div>
        </form>
    </nav>
</body>
</html>