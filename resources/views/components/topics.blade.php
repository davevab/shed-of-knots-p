<div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-lg text-darkGrayish mt-0 px-6 py-2">

    <a href="{{route('blog')}}" class=" hover:text-darkerBrownish hover:font-bold block py-2 px-6 rounded {{ request()->is('blog') ? 'bg-darkBrownish hover:text-white text-white font-bold' : '' }}">All</a>

    @foreach($categories as $category)
        <a href="{{route('by-category', $category)}}" class=" hover:text-darkerBrownish hover:font-bold py-2 px-6 rounded {{ request('category')?->slug === $category->slug
                ? 'bg-darkBrownish hover:text-white text-white font-bold' :  ''}}">
            {{$category->title}}
        </a>
    @endforeach
</div>
