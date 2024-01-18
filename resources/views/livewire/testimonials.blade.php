
<section id="testimonials">
    <div class="max-w-6xl px-5 mx-auto mt-24 text-center">
        <h2 class="text-4xl font-bold text-center text-darkerBrownish">
            "Transform Your Home with Handmade Macrame Decor: Our Testimonials"
        </h2>
        <div class="owl-carousel">
            @foreach($testimonials as $testimonial)
                <div class="item">
                    <div class="flex-col max-w-[900px] m-auto items-center p-6 space-y-6 rounded-lg">
                        <img src="{{ $testimonial->avatar }}" alt="" />
                        <h5 class="text-lg font-bold text-darkerBrownish">{{ $testimonial->name }}</h5>
                        <p class="text-sm text-darkBrownish">
                            {{ $testimonial->testimonial }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('livewire:load', function () {
                $('.owl-carousel').owlCarousel({
                    items: 1,
                    autoplay: true,
                    autoplayTimeout: 15000,
                    autoplaySpeed: 1000,
                    loop: true,
                    responsive: {
                        768: {
                            items: 1
                        },
                        1024: {
                            items: 1
                        }
                    }
                });
            });
        </script>
    @endpush
</section>
