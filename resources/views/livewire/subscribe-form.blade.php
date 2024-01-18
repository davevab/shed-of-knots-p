{{--<div>--}}
{{--    --}}

{{--    <form wire:submit.prevent="subscribe">--}}
{{--        <label for="name">Name:</label>--}}
{{--        <input wire:model="name" type="text" id="name" name="name" required>--}}

{{--        <label for="email">Email:</label>--}}
{{--        <input wire:model="email" type="email" id="email" name="email" required>--}}

{{--        <button type="submit">Subscribe</button>--}}
{{--    </form>--}}
{{--</div>--}}

<form wire:submit.prevent="subscribe">
    <div class="flex flex-col justify-between px-6 mx-auto space-y-0">
        <span class="text-darkerBrownish font-bold text-xl pb-2">Stay in touch.</span>
        <span class="text-darkerBrownish font-medium pb-2">Get updated in your inbox</span>
        @if (session()->has('message'))
            <div class="text-green-800 font-light">{{ session('message') }}</div>
        @endif
        <!-- Name -->
        <div>
            <input id="name"
                   class="text-darkerBrownish block mt-1 w-full rounded-t-lg"
                   type="text"
                   placeholder="First Name"
                   wire:model.defer="name"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
        </div>

        <!-- Email Address -->
        <div class="">
            <input
                id="email"
                class="text-darkerBrownish block mt-1 w-full"
                type="email"
                placeholder="Email Address"
                wire:model.defer="email"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
        </div>
        <div class="pt-1">
            <button type="submit"
                class="px-6 py-2 text-white rounded-b-lg w-full bg-darkGrayish hover:bg-darkerBrownish focus:outline-none"
            >
                Subscribe
            </button>
        </div>
    </div>
</form>
