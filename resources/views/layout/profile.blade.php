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
    <main class="w-full h-auto mx-auto mt-16 max-w-7xl">
        <section class="relative block h-[500px]">
            <div class="absolute top-0 w-full h-full bg-center bg-cover"
                style="
                      background-image: url('https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80');
                    ">
                <span id="blackOverlay" class="absolute w-full h-full bg-black opacity-50"></span>
            </div>
            <div class="absolute bottom-0 left-0 right-0 top-auto w-full overflow-hidden h-70-px"
                style="transform: translateZ(0px)">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-blue-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
        <section class="relative -mt-16 bg-transparent">

            <div class="relative flex flex-col w-full min-w-0 mb-6 break-words rounded-lg shadow-xl -mt-44">
                <div class="flex flex-col w-full md:flex-row">
                    <div class="flex flex-col justify-center h-auto p-10 mx-auto max-w-1/3">
                        <img alt="..." src="https://demos.creative-tim.com/notus-js/assets/img/team-2-800x800.jpg"
                            class="shadow-xl rounded-md h-auto object-cover text-center border-none max-w-[250px]">
                        <h3 class="text-xl font-semibold tracking-wider text-center">Pisco</h3>
                    </div>
                    <div class="flex-1 md:py-10 md:mt-44">
                        <div class="flow-root px-5 md:px-0">
                            <dl class="-my-3 text-sm divide-y divide-gray-100">
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
                <div class="w-full h-auto px-10 py-6 border-t">
                    <div class="flex justify-center w-full">
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
