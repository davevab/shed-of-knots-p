
@extends('layouts.app')

@section('content')
    <div class="container mx-auto flex flex-wrap pt-6">

        <!-- About-Us Widget Section -->

        <div class="w-full md:w-2/3 flex flex-col items-center px-3 pb-4 container mx-auto">
            <article>
                <!-- Article Image -->
                <div class="">
                    <img class="rounded-t-lg" src="{{ asset('images/benifits.jpg') }}" alt="AboutImg">
                </div>
                <div class="flex flex-col justify-start p-6 rounded-b-lg bg-lightBrown ">

                    <h1 class="pb-4 text-darkerBrownish text-3xl title-font font-medium">
                        {{$widget->title}}
                    </h1>
                    <div class="text-darkGrayish">
                        {!! $widget->content !!}
                    </div>
                </div>
            </article>

        </div>

        <div class="w-full md:w-1/3 flex flex-col items-center px-3">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-3 text-darkerBrownish">Contact Us</h1>
            <p class="mx-auto leading-relaxed text-base text-darkGrayish mb-3">Knot Sure? Reach Out to Us for Macrame Magic and Assistance</p>

            <livewire:contact-form />
        </div>

    </div>

@endsection



