@extends('layouts.app')

@section('content')
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-5 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
                    <h2 class="text-sm title-font text-darkerBrownish tracking-widest">@foreach($product->categories as $category)
                            <a href="{{route('product-category', $category)}}">
                                {{$category->title}}
                            </a>
                        @endforeach</h2>
                    <h1 class="text-darkerBrownish text-3xl title-font font-medium mb-4">{{$product->product_name}}</h1>
                    <div class="flex mb-4">
                        <a class="flex-grow text-darkerBrownish border-b-2 border-darkerBrownish py-2 text-lg px-1">Description</a>
                    </div>
                    <p class="leading-relaxed mb-4 text-darkBrownish">{{$product->description}}</p>
                    <div class="flex">
                        <span class="title-font font-medium text-2xl text-darkerBrownish">${{$product->price}}.00</span>

                    </div>
                    <x-newmodal name="underDev" title="">
                        <x-slot name="body">
                            <x-under-dev-modal></x-under-dev-modal>
                        </x-slot>
                    </x-newmodal>

                    <button x-data x-on:click="$dispatch('open-modal', { name: 'underDev' })" class="mt-6 p-3 px-6  text-white bg-darkGrayish rounded-full baseline md:block hover:bg-darkerBrownish">Checkout</button>
                </div>
                <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded bg-darkBrownish bg-opacity-50 block" src="'/storage/{{$product->Image}}">
{{--                <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded bg-darkBrownish bg-opacity-50 block" src="{{ asset('images/benifits.jpg') }}">--}}
            </div>
        </div>
    </section>

@endsection
