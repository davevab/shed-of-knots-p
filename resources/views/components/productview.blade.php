
<div class="lg:w-1/4 md:w-1/2 p-4 w-full">
    <a href="{{route('product-inner', $product)}}" class="block relative h-48 rounded overflow-hidden">
        <img alt="product_image" class="bg-darkBrownish bg-opacity-50 object-cover object-center w-full h-full block" src="storage/public/{{$product->Image}}">
{{--        <img alt="product_image" class="bg-darkBrownish bg-opacity-50 object-cover object-center w-full h-full block" src="{{ asset('images/benifits.jpg') }}">--}}
    </a>
    <div class="mt-4">
        <h3 class="text-darkerBrownish text-xs tracking-widest title-font mb-1">
            @foreach($product->categories as $category)
                <a href="#">
                    {{$category->title}}
                </a>
            @endforeach
        </h3>
        <h2 class="text-darkerBrownish title-font text-lg font-medium">
            {{$product->product_name}}
        </h2>
        <p class="mt-1 text-darkerBrownish">${{$product->price}}.00</p>
    </div>
</div>
