<!-- Sidebar Section -->
<aside class="w-full md:w-1/3 flex flex-col items-center px-3">

    <div class="w-full bg-lightBrown flex flex-col p-6 rounded">
        <a href="{{route('blog')}}">
            <h3 class="text-xl font-semibold mb-3 text-darkGrayish">All Categories</h3>
        </a>
        @foreach($categories as $category)
            <a href="{{route('by-category', $category)}}"
               class="text-semibold text-darkGrayish block py-2 px-3 rounded {{ request('category')?->slug === $category->slug
                ? 'font-bold' :  ''}}">
                {{$category->title}} ({{$category->total}})
            </a>
        @endforeach
    </div>

    <div class="w-full bg-lightBrown shadow flex flex-col my-4 p-6 rounded">
        <p class="text-xl text-darkGrayish font-semibold pb-5">
            {{ \App\Models\TextWidget::getTitle('about-us-sidebar') }}
        </p>
        <p class="text-darkGrayish">{!! \App\Models\TextWidget::getContent('about-us-sidebar') !!}</p>
        <a href="{{route('about')}}"
           class="w-full bg-darkGrayish text-white font-bold text-sm rounded-full hover:bg-darkerBrownish flex items-center justify-center px-2 py-3 mt-4">
            Get to know us
        </a>
    </div>
</aside>
