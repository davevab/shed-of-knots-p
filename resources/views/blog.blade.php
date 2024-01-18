@extends('layouts.app')

@section('content')
    <section style="background-image: url('images/cta_bg.jpg')">
        <!-- Text Header -->
        <header class="w-full container mx-auto p-6">
            <div class="flex flex-col items-center py-8 bg-darkBrownish bg-opacity-50">
                <p class="font-bold text-5xl text-white">
                    Tales from the Shed
                </p>
                <p class="text-lg text-white">
                    The macrame artisans stories
                </p>
            </div>
        </header>
    </section>

    <!-- Topic Nav -->
    <nav class="lg:hidden w-full py-2 border-t border-b bg-lightBrown mx-auto p-6"
         x-data="{ open: false }">
        <div class="block sm:hidden">
            <a
                href="#"
                class="block md:hidden text-base text-darkerBrownish font-bold text-center justify-center items-center"
            >
                Topics
            </a>
        </div>
        <x-Topics></x-Topics>
    </nav>


    <div class="container mx-auto flex flex-wrap py-6">


        <!-- Posts Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3 pb-4 container mx-auto">

            <div>
                @foreach ($posts as $post)
                    <x-post-item :post="$post"></x-post-item>
                @endforeach
            </div>

            {{ $posts->links() }}

        </section>

        <x-sidebar></x-sidebar>
    </div>

@endsection



