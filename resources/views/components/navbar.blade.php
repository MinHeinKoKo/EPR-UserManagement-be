<nav class="bg-white w-full h-20 border-gray-200 dark:bg-gray-900 fixed top-0 z-10 mb-20">
    <div class="max-w-7xl w-full h-full mx-auto">
        <div class="w-full h-full flex justify-between items-center">
            <div class="flex-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="82" height="40" fill="none" viewBox="0 0 82 40"><path fill="#FFD43D" d="M73.365 19.71c0 2.904-2.241 5.31-5.27 5.31-3.03 0-5.228-2.406-5.228-5.31 0-2.905 2.199-5.312 5.228-5.312s5.27 2.407 5.27 5.311Z"></path><path fill="#FF0C81" d="M48.764 19.544c0 2.946-2.323 5.145-5.27 5.145-2.904 0-5.227-2.2-5.227-5.145 0-2.947 2.323-5.104 5.228-5.104 2.946 0 5.27 2.158 5.27 5.104Z"></path><path fill="#11EEFC" d="M20.074 25.02c3.029 0 5.27-2.406 5.27-5.31 0-2.905-2.241-5.312-5.27-5.312-3.03 0-5.228 2.407-5.228 5.311 0 2.905 2.199 5.312 5.228 5.312Z"></path><path fill="#171A26" d="M68.095 30.54c-6.307 0-11.12-4.897-11.12-10.872 0-5.934 4.855-10.83 11.12-10.83 6.349 0 11.162 4.938 11.162 10.83 0 5.975-4.855 10.871-11.162 10.871Zm0-5.52c3.03 0 5.27-2.406 5.27-5.31 0-2.905-2.24-5.312-5.27-5.312-3.029 0-5.228 2.407-5.228 5.311 0 2.905 2.199 5.312 5.228 5.312ZM43.08 40c-4.813 0-8.506-2.116-10.373-5.934l4.896-2.655c.913 1.784 2.614 3.195 5.394 3.195 3.486 0 5.85-2.448 5.85-6.473v-.374c-1.12 1.411-3.111 2.49-6.016 2.49-5.768 0-10.373-4.481-10.373-10.581 0-5.934 4.813-10.788 11.12-10.788 6.431 0 11.162 4.605 11.162 10.788v8.299C54.74 35.27 49.76 40 43.08 40Zm.415-15.311c2.946 0 5.27-2.2 5.27-5.145 0-2.947-2.324-5.104-5.27-5.104-2.905 0-5.228 2.158-5.228 5.104s2.323 5.145 5.228 5.145ZM20.074 30.54c-6.307 0-11.12-4.897-11.12-10.872 0-5.934 4.854-10.83 11.12-10.83 6.348 0 11.162 4.938 11.162 10.83 0 5.975-4.855 10.871-11.162 10.871Zm0-5.52c3.029 0 5.27-2.406 5.27-5.31 0-2.905-2.241-5.312-5.27-5.312-3.03 0-5.228 2.407-5.228 5.311 0 2.905 2.199 5.312 5.228 5.312ZM0 0h5.892v30H0V0ZM82 6.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"></path></svg>
            </div>
            <div class="w-full flex-1">
                <ul class="flex sm:flex-col md:flex-row gap-x-5 justify-center">
                    <li>
                        <a href="{{ route('home') }}" class="font-semibold text-xl tracking-wider hover:text-red-500/75 duration-150 transition-all ease-in-out">
                        Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('shops') }}" class="font-semibold text-xl tracking-wider hover:text-red-500/75 duration-150 transition-all ease-in-out">
                        Shops
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about-us') }}" class="font-semibold text-xl tracking-wider hover:text-red-500/75 duration-150 transition-all ease-in-out">
                        About Us
                        </a>
                    </li>
                </ul>
            </div>
            <div class="flex-1 flex justify-end text-end w-full">
                <div class="flex gap-x-3 items-center">
                    <div class="flex flex-wrap items-center justify-between">
                        <button onclick="return setCart()" class="relative flex items-center">
                            <span
                                class="ml-3 rounded-md bg-red-300 px-[0.85em] py-[0.6em] text-[0.6rem] font-bold leading-none text-white"
                                >1</span
                                >
                            <a
                                class="ml-1 text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                                href="#">
                                <span class="[&>svg]:w-10">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                        class="h-16 w-16">
                                        <path
                                            d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                                    </svg>
                                </span>
                            </a>
                        </button>
                    </div>
                    <div class="flex gap-x-2 w-full h-auto">
                        <div class="">
                            <h3 class="text-lg font-semibold">Min Hein Ko Ko</h3>
                            <p class="text-sm">koko@minhein.com</p>
                        </div>
                    </div></div>
            </div>
        </div>
    </div>
</nav>
