<div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-lg text-darkGrayish mt-0 px-6 py-2">
    <a href="{{route('shop')}}" class=" hover:text-darkerBrownish hover:font-bold block py-2 px-6 rounded {{ request()->is('shop') ? 'bg-darkBrownish hover:text-white text-white font-bold' : '' }}">All</a>

    @foreach($categories as $category)
        <a href="{{route('product-category', $category)}}" class=" hover:text-darkerBrownish hover:font-bold py-2 px-6 gap-3.5 rounded {{ request('category')?->slug === $category->slug
                ? 'bg-darkBrownish hover:text-white text-white font-bold' :  ''}}">
            {{$category->title}}
        </a>
    @endforeach
</div>
