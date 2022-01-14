<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>JpDevelopment | Beneficiarios</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @yield('css')

    @livewireStyles

    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="flex bg-third">

    <nav class=" w-96 max-h-screen flex-col justify-between ">
        <div class="bg-third h-full">
            <div class="flex  justify-center py-10 shadow-sm pr-4">

                <div class="pl-2 flex flex-col items-center">
                    <img src="{{ asset('images/logo-white.png') }}" alt="">
                    <p class="text-3xl font-extrabold text-white">JpDevelopment</h1>
                    <p class="text-base block text-white tracking-widest">Beneficiarios</p>
                </div>
            </div>
            <div class="pl-10">
                <ul class="space-y-8 pt-10">
                    <li class="flex space-x-4 items-center text-white  hover:text-fourth font-bold text-lg cursor-pointer">
                        <ion-icon size='small' name="home"></ion-icon>
                        <a href="/dashboard">Dashboard</a>
                    </li>
                    <li class="flex space-x-4 items-center text-white  hover:text-fourth font-bold text-lg cursor-pointer">
                        <ion-icon size='small' name="bar-chart"></ion-icon>
                        <a href="/reports">Reportes</a>
                    </li>
                    <li class="flex space-x-4 items-center text-white  hover:text-fourth font-bold text-lg cursor-pointer">
                        <ion-icon size='small' name="person"></ion-icon>
                        <a href="/beneficiaries">Beneficiarios</a>
                    </li>
                    <li class="flex space-x-4 items-center text-white  hover:text-fourth font-bold text-lg cursor-pointer">
                        <ion-icon size='small' name="settings"></ion-icon>
                        <a href="">Configuraciones</a>
                    </li>
                    <li class="flex space-x-4 items-center text-white  hover:text-fourth font-bold text-lg cursor-pointer">
                        <ion-icon size='small' name="people"></ion-icon>
                        <a href="">Usuarios</a>
                    </li>
                    <li class="flex space-x-4 items-center text-white  hover:text-fourth font-bold text-lg cursor-pointer">
                        <ion-icon size='small' name="bookmarks"></ion-icon>
                        <a href="">Roles</a>
                    </li>
                </ul>
            </div>
        </div>
        
    </nav>

    <div class="w-full min-h-screen pt-20 bg-secondary">
        <div class="container mx-auto ">

            @yield('content')
        </div>
    </div>
    

    

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('js/chart.min.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    @yield('js')

    @livewireScripts
</body>

</html>
