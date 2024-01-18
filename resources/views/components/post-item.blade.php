<article class="flex flex-col mb-6">
    <!-- Article Image -->
    <a href="{{route('view', $post)}}" class="block relative h-96 rounded-t overflow-hidden">
        <img class="bg-darkBrownish bg-opacity-50 object-cover object-center w-full h-full block" src="{{ asset('images/benifits.jpg') }} ">
{{--        <img class="bg-darkBrownish bg-opacity-50 object-cover object-center w-full h-full block" src="{{ $post->getThumbnail() }}">--}}
    </a>
    <div class="bg-lightBrown flex flex-col justify-start p-6 rounded-b">
        @foreach ($post->categories as $category)
            <a href="{{route('by-category', $category)}}" class="text-darkerBrownish text-sm font-bold uppercase pb-4">
                {{ $category->title }}
            </a>
        @endforeach

        <p class="text-darkerBrownish text-3xl title-font font-medium pb-4">
            {{ $post->title }}
        </p>
        <p class="text-sm title-font text-darkerBrownish pb-3">
                By <span class="text-sm title-font text-darkerBrownish tracking-widest">{{ $post->user->name ?? 'Admin' }}</span>,
            Published on {{ $post->getFormattedDate() }}
        </p>
        <p class="leading-relaxed mb-4 text-darkGrayish">
            {{ $post->shortBody() }}
        </p>

        <a href="{{route('view', $post)}}" class="text-darkGrayish hover:text-darkerBrownish">Continue Reading <i class="fas fa-arrow-right-long"></i></a>
    </div>
</article>
