@extends('layouts.app')

@section('content')
    <section style="background-image: url('images/cta_bg.jpg')">
        <!-- Text Header -->
        <header class="w-full container mx-auto p-6">
            <div class="flex flex-col items-center py-8 bg-darkBrownish bg-opacity-50">
                <p class="font-bold text-5xl text-white">
                    Macramé Selections
                </p>
                <p class="text-lg text-white">
                    From our Hands to Your Home
                </p>
            </div>
        </header>
    </section>

    <!-- Product Nav -->
    <nav class="w-full py-2 border-t border-b bg-lightBrown mx-auto p-6"
         x-data="{ open: false }">
        <div class="block sm:hidden">
            <a
                href="#"
                class="block md:hidden text-base text-gray-800 font-extrabold uppercase text-center justify-center items-center"
            >
                Categories
            </a>
        </div>
        <x-productnav></x-productnav>

    </nav>


    <section class="">
        <div class="container px-5 py-8 mx-auto">
            <div class="flex flex-wrap -m-4">
                @foreach($products as $product)
                    <x-productview :product="$product"></x-productview>
                @endforeach

            </div>
            {{$products->links()}}


        </div>
    </section>


@endsection



