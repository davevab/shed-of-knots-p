
@extends('layouts.app')

@section('content')

    <div class="container mx-auto flex flex-wrap py-6">
        <!-- Post Section -->
        <section class="w-full md:w-2/3 flex flex-col px-3 items-center pb-4 container mx-auto">

            <article class="flex flex-col shadow rounded-t">
                <!-- Article Image -->
                <a href="#" class="block relative h-96 rounded-t overflow-hidden">
{{--                    <img src="{{ $post->thumbnail }}" class="bg-darkBrownish bg-opacity-50 object-cover object-center w-full h-full block rounded-t">--}}
                    <img src="{{ asset('images/benifits.jpg') }}" class="bg-darkBrownish bg-opacity-50 object-cover object-center w-full h-full block rounded-t">
                </a>
                <div class="bg-lightBrown flex flex-col justify-start p-6">
                    <div class="flex gap-4">
                        @foreach($post->categories as $category)
                            <a href="{{route('by-category', $category)}}" class="text-darkerBrownish text-sm font-bold uppercase pb-4">
                                {{$category->title}}
                            </a>
                        @endforeach
                    </div>
                    <p class="text-darkerBrownish text-3xl title-font font-medium pb-4 prose">
                        {{ $post->title }}
                    </p>
                    <p class="text-sm title-font text-darkerBrownish pb-3">
                        By <span class="text-sm title-font text-darkerBrownish tracking-widest">{{ $post->user->name ?? 'Admin' }}</span>,
                        Published on {{ $post->getFormattedDate() }}
                    </p>
                    <div class="leading-relaxed text-darkGrayish">
                        {!! $post->body !!}
                    </div>
                </div>
            </article>

            <div class="w-full flex pt-2">
                <div class="w-1/2 pr-2">
                    @if($prev)
                        <a href="{{route('view', $prev)}}"
                           class="block w-full bg-lightBrown shadow hover:shadow-xl text-left p-6 rounded-bl">
                            <p class="text-lg text-darkerBrownish font-bold flex items-center">
                                <i class="fas fa-arrow-left pr-1"></i>
                                Previous
                            </p>
                            <p class="pt-2 text-darkGrayish">{{\Illuminate\Support\Str::words($prev->title, 5)}}</p>
                        </a>
                    @endif
                </div>
                <div class="w-1/2 pl-2-2">
                    @if($next)
                        <a href="{{route('view', $next)}}"
                           class="block w-full bg-lightBrown shadow hover:shadow-xl text-right p-6 rounded-br">
                            <p class="text-lg text-darkerBrownish font-bold flex items-center justify-end">Next
                                <i
                                    class="fas fa-arrow-right pl-1"></i></p>
                            <p class="pt-2 text-darkGrayish">
                                {{\Illuminate\Support\Str::words($next->title, 5)}}
                            </p>
                        </a>
                    @endif
                </div>
            </div>

{{--            <livewire:comments :post="$post"/>--}}
        </section>

        <x-sidebar/>
    </div>

@endsection



