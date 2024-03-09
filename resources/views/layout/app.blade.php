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
            @if (Request::is('/'))
            <x-ecommerce.intro />
            @endif
            
        <div class="h-auto mx-auto max-w-7xl">
            @yield('content')
        </div>
    <x-ecommerce.carts />
    </body>
    <script>

        //Cart functions
        let cartIsOpen = document.getElementById('cartComponents');

        // Cart Open Close Control
        let setCart = () => {
            cartIsOpen.classList.toggle('hidden')
        }

        // Wait for the DOM content to be fully loaded
        document.addEventListener('DOMContentLoaded', function () {
            // Get the category section element
            const categorySection = document.getElementById('category');
            const home = document.getElementById('home');
            let isCategoryFixed = false; // Track the state of category section

            // Function to handle intersection
            const handleIntersection = (entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !isCategoryFixed) {
                        console.log('Category section is intersecting with viewport');
                        categorySection.classList.add('fixed', 'top-16', 'mt-10', 'z-20' , 'hidden' , 'md:flex');
                        isCategoryFixed = true; // Update state
                    } else if (!entry.isIntersecting && isCategoryFixed) {
                        console.log('Category section is not intersecting with viewport');
                        categorySection.classList.remove('fixed', 'top-16', 'mt-10', 'z-20', 'hidden' , 'md:flex');
                        isCategoryFixed = false; // Update state
                    }
                });
            };

            // Create IntersectionObserver
            const observer = new IntersectionObserver(handleIntersection, {
                root: null,
                rootMargin: '-10% 0px -90% 0px',
                threshold: 0 // Trigger when any part of the category section is visible
            });

            // Observe the category section
            observer.observe(home);
        });
    </script>
</html>
