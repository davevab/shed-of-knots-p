
@extends('layouts.app')

@section('content')
        <!-- Hero Section Start -->
        <section id="hero" class="">
          <!-- Flex Container -->
          <div class="container flex flex-col-reverse items-center px-6 mx-auto mt-3 space-y-0 md:space-y-0 md:flex-row">
              <!-- Left Item -->
              <div class="flex flex-col mb-16 space-y-12 md:w-1/2">
                  <p class="max-w-sm text-center text-xl text-darkBrownish md:text-left">Add a touch of boho charm to your home with our</p>
                  <h1 class="max-w-md text-5xl font-bold text-center text-darkerBrownish md:text-7xl md:text-left lg:text-7xl">Exquisite Macrame' <br>Home Decors</h1>
                  <p class="max-w-sm text-center text-darkBrownish md:text-left">Discover the timeless beauty of macrame with our handmade collection of wall hangings, plant hangers, and baskets. Shop now and elevate your home decor.</p>
                  <div class="flex justify-center md:justify-start">
                    <div>
                      <a href="/shop" class="p-3 px-6  text-white bg-darkGrayish rounded-full baseline md:block hover:bg-darkerBrownish">Shop now</a>
                    </div>
                    <div class="pl-6">
                      <a href="/blog" class="p-3 px-6  text-white bg-darkGrayish rounded-full baseline md:block hover:bg-darkerBrownish">Learn more</a>
                    </div>
                  </div>
              </div>
              <!-- Image -->
              <div class="md:w-2/3 lg:w-2/3 rounded-full mt-0">
                  <img src="{{ asset('images/heroimage-022-01.png') }}" alt="heroimages">
              </div>
          </div>
      </section>

      <!-- Features Section -->
      <section id="features" class="bg-lightBrown">

          <!-- Flex container -->
          <div
            class="container flex flex-col p-6 mx-auto mt-10 space-y-12 md:space-y-0 md:flex-row"
          >
            <!-- What's Different -->
            <div class="items-center justify-center flex flex-col space-y-12 md:w-1/2">
              <div class="imd:1/2 md:flex-col pt-6">
                  <img class="rounded-xl "src="images/benifits2.jpg" alt="featureImage">
              </div>
            </div>

            <!-- Numbered List -->
            <div class="items-center justify-center flex flex-col p-6 marker:space-y-8 md:w-1/2">
              <h3 class="max-w-md mb-4 text-4xl text-darkerBrownish font-bold text-center">
                  The benefits of macrame in your home
                </h3>
              <!-- List Item 1 -->
              <div
                class="flex flex-col mb-3 space-y-3 md:space-y-0 md:space-x-6 md:flex-row"
              >
                <!-- Heading -->
                <div class="rounded-l-full  bg-yellowish md:bg-transparent">
                  <div class="flex items-center space-x-2">
                    <div
                      class="px-4 py-1 text-darkerBrownish font-bold rounded-full md:py-1 bg-brownish"
                    >
                      01
                    </div>
                    <h3 class="text-base text-darkerBrownish font-bold md:mb-2 md:hidden">
                      Versatility:
                    </h3>
                  </div>
                </div>

                <div>
                  <h3 class="hidden text-lg text-darkerBrownish font-bold md:block">
                      Versatility:
                  </h3>
                  <p class="text-darkBrownish">
                      Macrame decor can be used in a variety of ways, such as wall hangings, plant hangers, and decorative accents. This allows you to incorporate it into any room of your home.
                  </p>
                </div>
              </div>
              <!-- List Item 1 -->
              <div
                class="flex flex-col mb-3 space-y-3 md:space-y-0 md:space-x-6 md:flex-row"
              >
                <!-- Heading -->
                <div class="rounded-l-full  bg-yellowish md:bg-transparent">
                  <div class="flex items-center space-x-2">
                    <div
                      class="px-4 py-1 text-darkerBrownish font-bold rounded-full md:py-1 bg-brownish"
                    >
                      02
                    </div>
                    <h3 class="text-base text-darkerBrownish font-bold md:mb-2 md:hidden">
                      Handmade:
                    </h3>
                  </div>
                </div>

                <div>
                  <h3 class="hidden text-lg text-darkerBrownish font-bold md:block">
                      Handmade:
                  </h3>
                  <p class="text-darkBrownish">
                      Macrame pieces are often handmade, which adds a unique and personal touch to your home decor.
                  </p>
                </div>
              </div>
              <!-- List Item 1 -->
              <div
                class="flex flex-col mb-3 space-y-3 md:space-y-0 md:space-x-6 md:flex-row"
              >
                <!-- Heading -->
                <div class="rounded-l-full  bg-yellowish md:bg-transparent">
                  <div class="flex items-center space-x-2">
                    <div
                      class="px-4 py-1 text-darkerBrownish font-bold rounded-full md:py-1 bg-brownish"
                    >
                      03
                    </div>
                    <h3 class="text-base text-darkerBrownish font-bold md:mb-2 md:hidden">
                      Cost-effective:
                    </h3>
                  </div>
                </div>

                <div>
                  <h3 class="hidden text-lg text-darkerBrownish font-bold md:block">
                      Cost-effective:
                  </h3>
                  <p class="text-darkBrownish">
                      Macrame is a relatively inexpensive way to add decorative accents to your home, as the materials needed are relatively simple and inexpensive.
                  </p>
                </div>
              </div>
              <!-- List Item 1 -->
              <div
                class="flex flex-col mb-3 space-y-3 md:space-y-0 md:space-x-6 md:flex-row"
              >
                <!-- Heading -->
                <div class="rounded-l-full  bg-yellowish md:bg-transparent">
                  <div class="flex items-center space-x-2">
                    <div
                      class="px-4 py-1 text-darkerBrownish font-bold rounded-full md:py-1 bg-brownish"
                    >
                      04
                    </div>
                    <h3 class="text-base text-darkerBrownish font-bold md:mb-2 md:hidden">
                      Sustainable:
                    </h3>
                  </div>
                </div>

                <div>
                  <h3 class="hidden text-lg text-darkerBrownish font-bold md:block">
                      Sustainable:
                  </h3>
                  <p class="text-darkBrownish">
                      Macrame is a sustainable decorating option, as it can be made using natural materials such as cotton or hemp, which are both biodegradable and easy to obtain.
                  </p>
                </div>
              </div>
            </div>
          </div>
      </section>

        <livewire:testimonials />

      <!-- CTA Section -->
      <section id="cta"
               class="bg-cover bg-darkBrownish bg-center min-w-min bg-no-repeat"
               style="background-image: url('images/cta_bg.jpg')">
          <!-- Flex Container -->
          <div
            class="container flex flex-col bg-darkBrownish bg-opacity-50 last:items-center justify px-6 py-12 mx-auto space-y-12 md:py-12 md:flex-row md:space-y-0"
          >
            <!-- Heading -->
            <h2
              class="flex text-4xl text-center px-3 placeholder:text-y text-white"
            >
            Don't just take our word for it, see how macrame decor has transformed the homes of our satisfied customers.. Order your own unique piece today
            </h2>
            <!-- Button -->
            <div class="flex justify-center">
              <a href="/shop" class="p-3 px-7 text-white bg-brownish rounded-full baseline md:block hover:bg-darkerBrownish">Shop now</a>
            </div>
          </div>
        </section>

@endsection

