
    <div class="relative container mx-auto">
        <form wire:submit.prevent="submitForm">
            <div class="flex flex-wrap p-2 rounded-lg bg-lightBrown">
                <!-- Name Input -->
                <div class="p-2 w-full pt-6">
                    <div class="relative">
{{--                        <label for="name" class="leading-7 text-sm text-gray-600">Name</label>--}}
                        <input wire:model.defer="name" type="text" id="name" name="name" placeholder="Name" class="w-full bg-gray-100 bg-opacity-50 rounded border-0 border-gray-200 focus:border-yellowish focus:bg-white focus:ring-brownish text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- Email Input -->
                <div class="p-2 w-full">
                    <div class="relative">
{{--                        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>--}}
                        <input wire:model.defer="email" type="email" id="email" name="email" placeholder="Email Address" class="w-full bg-gray-100 bg-opacity-50 rounded border-0 border-gray-200 focus:border-yellowish focus:bg-white focus:ring-brownish text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- Message Textarea -->
                <div class="p-2 w-full">
                    <div class="relative">
{{--                        <label for="message" class="leading-7 text-sm text-gray-600 text-start">Message</label>--}}
                        <textarea wire:model.defer="message" id="message" name="message" placeholder="Message" class="w-full bg-gray-100 bg-opacity-50 rounded border-0 border-gray-200 focus:border-yellowish focus:bg-white focus:ring-brownish text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"></textarea>
                        @error('message') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="mx-auto">
                    @if (session()->has('message'))
                        <div class="text-green-800 font-light bg-green-200 p-3 px-6 rounded">{{ session('message') }}</div>
                    @endif
                </div>
                <!-- Submit Button -->
                <div class="p-2 w-full m-6">
                    <button type="submit" class="flex mx-auto p-3 px-6 text-white bg-darkGrayish rounded-full baseline md:block hover:bg-darkerBrownish">Submit</button>
                </div>
                <!-- Additional Contact Information -->
                <div class="mx-auto pb-6">
                    <a href="mailto:example@email.com" class="text-darkGrayish">example@email.com</a>
                    <p class="leading-normal text-darkGrayish">49 Smith St.
                        <br>Saint Cloud, MN 56301
                    </p>
                </div>
            </div>
        </form>
    </div>
ss
