<!doctype html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
    <body>
            <x-navbar />
            <x-ecommerce.intro />
        <div class="max-w-7xl mx-auto h-auto">
            @yield('content')
        </div>
    <x-ecommerce.carts />
    </body>
    <script>
        let cartIsOpen = document.getElementById('cartComponents');

        // Cart Open Close Control
        let setCart = () => {
            cartIsOpen.classList.toggle('hidden')
        }

    </script>
</html>
