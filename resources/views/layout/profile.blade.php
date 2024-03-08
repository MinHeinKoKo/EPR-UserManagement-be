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
    <main class="max-w-7xl h-auto w-full mx-auto mt-16">
        <section class="relative block h-[500px]">
            <div class="absolute top-0 w-full h-full bg-center bg-cover"
                style="
                      background-image: url('https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80');
                    ">
                <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute overflow-hidden h-70-px"
                style="transform: translateZ(0px)">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-blue-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
        <section class="relative bg-transparent -mt-16">

            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-xl rounded-lg -mt-44">
                <div class="flex w-full">
                    <div class="max-w-1/3 flex flex-col h-auto justify-center mx-auto p-10">
                        <img alt="..." src="https://demos.creative-tim.com/notus-js/assets/img/team-2-800x800.jpg"
                            class="shadow-xl rounded-md h-auto object-cover text-center border-none max-w-[250px]">
                        <h3 class="text-xl text-center tracking-wider font-semibold">Pisco</h3>
                    </div>
                    <div class="flex-1 mt-44 py-10">
                        <div class="flow-root">
                            <dl class="-my-3 divide-y divide-gray-100 text-sm">
                                <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                                    <dt class="font-medium text-gray-900">Name</dt>
                                    <dd class="text-gray-700 sm:col-span-2">Pisco</dd>
                                </div>

                                <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                                    <dt class="font-medium text-gray-900">Email</dt>
                                    <dd class="text-gray-700 sm:col-span-2">admin@gmail.com</dd>
                                </div>

                                <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                                    <dt class="font-medium text-gray-900">Phone</dt>
                                    <dd class="text-gray-700 sm:col-span-2">+959-426-941-688</dd>
                                </div>

                                <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                                    <dt class="font-medium text-gray-900">Address</dt>
                                    <dd class="text-gray-700 sm:col-span-2">Yangon, Myanmar</dd>
                                </div>

                            </dl>
                        </div>
                    </div>
                </div>
                <div class="border-t w-full h-auto py-6 px-10">
                    <div class="w-full flex justify-center">
                        <x-tap />
                    </div>
                    <div class="my-5">
                        @yield('content')
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
