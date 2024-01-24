<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="icon" href="{{ asset('images/favicon-16x16.png') }}" type="image/x-icon">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>



    <title>Shed of Knots</title>

    @vite(['resources/css/app.css', 'resources/js/script.js', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-bodyBg">
<!-- Navbar Section Start -->
<nav class="relative container mx-auto p-3 border-b border-b-darkGrayish">
    <!-- Flex Container -->
    <div class="flex items-center justify-between">
        <!-- Logo -->
        <div class="">
            <a href="/">
                <img src="{{ asset('images/logoo.svg') }}" alt="Logo" class="w-[270px]">
            </a>
        </div>
        <!-- Menu Items -->
        <div class="hidden space-x-6 text-darkGrayish font-bold md:flex">
            <a href="/"
               class="hover:text-darkerBrownish nav-link {{ request()->is('/') ? 'active bg-bodyBg px-3 shadow-darkGrayish drop-shadow-lg rounded-3xl text-black' : '' }}">home</a>
            <a href="/shop"
               class="hover:text-darkerBrownish nav-link {{ request()->is('shop*') ? 'active bg-bodyBg px-3 shadow-darkGrayish drop-shadow-lg rounded-3xl text-black' : '' }}">shop</a>
            <a href="/blog"
               class="hover:text-darkerBrownish nav-link {{ request()->is('blog*') ? 'active bg-bodyBg px-3 shadow-darkGrayish drop-shadow-lg rounded-3xl text-black' : '' }}">blog</a>
            <a href="/about"
               class="hover:text-darkerBrownish nav-link {{ request()->is('about*') ? 'active bg-bodyBg px-3 shadow-darkGrayish drop-shadow-lg rounded-3xl text-black' : '' }}">about
                us</a>
        </div>

        <!-- Button -->
        <div>

            <div class="md:flex hidden">

                @auth

                    <div class="">
                        <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex items-center pe-1 font-bold rounded-full text-darkGrayish hover:text-darkerBrownish md:me-0 pt-2.5" type="button">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 me-2 rounded-full" src="{{ asset('images/unisex-avatar.jpg') }}" alt="Profile Avatar">
                            @auth
                                {{auth()->user()->name}}
                            @endauth

                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdownAvatarName" class="py-3 z-10 hidden bg-lightBrown rounded-lg shadow w-44 ">
                            <div class="px-4 text-sm text-darkGrayish">
                                <div class="font-medium ">Email</div>
                                <div class="truncate italic">@auth
                                        {{auth()->user()->email}}
                                    @endauth</div>

                            </div>
                            <div class="px-4 pt-3 pb-1.5 hover:text-darkerBrownish font-bold text-darkGrayish">
                                <a href="#" class="">Profile</a>
                            </div>
                            <div class="px-4 pb-1 hover:text-darkerBrownish font-bold text-darkGrayish">
                                @livewire('logout-form')
                            </div>
                        </div>
                    </div>

                @else
                    <x-newmodal name="login" title="">
                        <x-slot name="body">
                            @livewire('login-form')
                        </x-slot>
                    </x-newmodal>

                    <x-newmodal name="register" title="">
                        <x-slot name="body">
                            @livewire('register-form')
                        </x-slot>
                    </x-newmodal>

                    <button x-data x-on:click="$dispatch('open-modal', { name: 'login' })"
                            href="#"
                            class="pt-3 font-bold text-darkGrayish hover:text-darkerBrownish nav-link {{ request()->is('login*') ? 'active px-3 text-black underline animate-pulse' : '' }}">
                        Login
                    </button>

                    <span class="pt-2 font-bold text-darkGrayish hover:text-darkerBrownish">
                        {!! '&nbsp;|&nbsp;' !!}
                    </span>

                    <button x-data x-on:click="$dispatch('open-modal', { name: 'register' })"
                            href="#"
                            class="pt-3 font-bold text-darkGrayish hover:text-darkerBrownish nav-link {{ request()->is('registration*') ? 'active px-3 text-black underline animate-pulse' : '' }}">
                        Register
                    </button>

                @endauth
            </div>
            <!-- Hamburger Icon -->
            <div class="pt-2.5">
                <button id="menu-btn"
                        class="block hamburger md:hidden focus:outline-none">
                    <span class="hamburger-top"></span>
                    <span class="hamburger-middle"></span>
                    <span class="hamburger-bottom"></span>
                </button>
            </div>
        </div>
    </div>

    <div class="md:hidden">

        <div
            id="menu"
            class="z-50 absolute flex-col items-center hidden self-end py-8 rounded-lg mt-5 space-y-6 font-bold bg-lightBrown sm:w-auto sm:self-center left-6 right-6 drop-shadow-md text-darkGrayish"
        >
            <a href="/"
               class="hover:text-darkerBrownish nav-link {{ request()->is('/') ? 'active bg-lightBrown px-3 shadow-darkGrayish drop-shadow-lg rounded-3xl text-black' : '' }}">home</a>
            <a href="/shop"
               class="hover:text-darkerBrownish nav-link {{ request()->is('shop*') ? 'active bg-lightBrown px-3 shadow-darkGrayish drop-shadow-lg rounded-3xl text-black' : '' }}">shop</a>
            <a href="/blog"
               class="hover:text-darkerBrownish nav-link {{ request()->is('blog*') ? 'active bg-lightBrown px-3 shadow-darkGrayish drop-shadow-lg rounded-3xl text-black' : '' }}">blog</a>
            <a href="/about"
               class="hover:text-darkerBrownish nav-link {{ request()->is('about*') ? 'active bg-lightBrown px-3 shadow-darkGrayish drop-shadow-lg rounded-3xl text-black' : '' }}">about
                us</a>

            @auth

                <div class="divide-y divide-darkGrayish flex-row pt-5">
                    <div>
                        <button class="px-3 pb-2 flex items-center pe-1 font-bold rounded-full text-darkGrayish hover:text-darkerBrownish md:me-0" type="button">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 me-2 rounded-full" src="{{ asset('images/unisex-avatar.jpg') }}" alt="user photo">
                            @auth
                                {{auth()->user()->name}}
                            @endauth
                        </button>
                    </div>
                    <div class="px-4 text-sm text-darkGrayish">
                        <div class="font-medium ">Email:
                            <span class="truncate italic">
                            @auth
                                    {{auth()->user()->email}}
                                @endauth
                        </span>
                        </div>
                    </div>
                </div>
                <a href="#" class="hover:text-darkerBrownish nav-link {{ request()->is('profile*') ? 'active animate-pulse text-black' : '' }}">Profile</a>

                <div class="px-4 pb-1 hover:text-darkerBrownish font-bold text-darkGrayish">
                    @livewire('logout-form')
                </div>


            @else

                <div class="flex-row div">
                    <x-mobile-modal name="login" title="Login Here">
                        <x-slot name="body">
                            @livewire('login-form')
                        </x-slot>
                    </x-mobile-modal>

                    <x-mobile-modal name="register" title="Register Here">
                        <x-slot name="body">
                            @livewire('register-form')
                        </x-slot>
                    </x-mobile-modal>

                    <button x-data x-on:click="$dispatch('open-modal',{ name: 'login' })"
                        href="#"
                       class="font-bold text-darkGrayish hover:text-darkerBrownish nav-link {{ request()->is('login*') ? 'active bg-lightBrown px-3 shadow-darkGrayish drop-shadow-lg rounded-3xl text-black' : '' }}">Login</button>
                    <span class="font-bold text-darkGrayish hover:text-darkerBrownish">
                        {!! '&nbsp;|&nbsp;' !!}
                    </span>
                    <button x-data x-on:click="$dispatch('open-modal',{ name: 'register' })"
                        href="#"
                       class="font-bold text-darkGrayish hover:text-darkerBrownish nav-link {{ request()->is('registration*') ? 'active bg-lightBrown px-3 shadow-darkGrayish drop-shadow-lg rounded-3xl text-black' : '' }}">Register</button>
                </div>

            @endauth
        </div>
    </div>
</nav>



@yield('content')


<!-- Footer -->
<footer>
    <!-- Flex Container -->
    <div
        class="container flex flex-col-reverse justify-between px-6 py-10 mx-auto space-y-8 md:flex-row md:space-y-0 border-t border-t-darkGrayish"
    >
        <!-- Logo and social links container -->
        <div
            class="flex flex-col-reverse items-center justify-center space-y-12 md:flex-col md:space-y-0 md:items-start"
        >
            <div class="flex flex-col first-line:first-letter:mx-auto my-6 text-center  md:hidden text-darkerBrownish">
                Copyright &copy; 2024, All Rights Reserved
            </div>
            <!-- Logo -->
            <div class="mx-auto pb-3">
                <a href="/">
                    <img src="{{ asset('images/SOK-logo-02.svg') }}" alt="Logo" class="w-[180px]">
                </a>
            </div>
            <!-- Social Links Container -->
            <div class="flex justify-center space-x-4 bg-darkBrownish bg-opacity-50 p-3 px-6 rounded-full">
                <!-- Link 1 -->
                <a href="https://web.facebook.com/profile.php?id=100078298309036">
                    <img src="images/icon-facebook.svg" alt="" class="h-8"/>
                </a>
                <!-- Link 2 -->
                <a href="https://www.youtube.com/">
                    <img src="images/icon-youtube.svg" alt="" class="h-8"/>
                </a>
                <!-- Link 3 -->
{{--                <a href="#">--}}
{{--                    <img src="images/icon-twitter.svg" alt="" class="h-8"/>--}}
{{--                </a>--}}
                <!-- Link 4 -->
                <a href="https://www.pinterest.ph/">
                    <img src="images/icon-pinterest.svg" alt="" class="h-8"/>
                </a>
                <!-- Link 5 -->
                <a href="https://www.instagram.com/">
                    <img src="images/icon-instagram.svg" alt="" class="h-8"/>
                </a>
            </div>
        </div>
        <!-- List Container -->
        <div class="flex justify-around space-x-32">
            <div class="flex flex-col space-y-3 font-medium text-darkGrayish">
                <a href="/"
                   class="hover:text-darkerBrownish nav-link {{ request()->is('/') ? 'active text-black font-bold' : '' }}">home</a>
                <a href="/shop"
                   class="hover:text-darkerBrownish nav-link {{ request()->is('shop*') ? 'active text-black font-bold' : '' }}">shop</a>
                <a href="/blog"
                   class="hover:text-darkerBrownish nav-link {{ request()->is('blog*') ? 'active text-black font-bold' : '' }}">blog</a>
                <a href="/about"
                   class="hover:text-darkerBrownish nav-link {{ request()->is('about*') ? 'active text-black font-bold' : '' }}">about
                    us</a>
            </div>

        </div>

        <!-- Input Container -->
        <div class="flex flex-col justify-between">
            <livewire:subscribe-form/>
            <div class="hidden text-darkerBrownish md:block pt-2">
                Copyright &copy; 2024, All Rights Reserved
            </div>
        </div>
    </div>
</footer>
@livewireScripts
@stack('scripts')

</body>
</html>
