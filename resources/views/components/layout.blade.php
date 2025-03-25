<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,400..600;1,100..900&display=swap" rel="stylesheet">
    @vite (['resources/js/app.js'])
</head>
<body class="bg-black text-white font-henken pb-20">
    <div class="wrapper px-10">
        <nav class="nav flex justify-between items-center p-4 border-b border-white/10">
            <div>
                <a href="/" class="">
                    <img src="{{ Vite::asset('resources/images/logo.jpg') }}" alt="site logo" class="w-[3rem]" />
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="#">Job</a>
                <a href="#">Carrers</a>
                <a href="#">Saleries</a>
                <a href="#">Companies</a>
            </div>
            <div>
                <a href="#">Post a Job</a>
            </div>
        </nav>
        <div class="main mx-auto mt-10 max-w-[986px]">
            {{ $slot }}
        </div>
    </div>
</body>
</html>