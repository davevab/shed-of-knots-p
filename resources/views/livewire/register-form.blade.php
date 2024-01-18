<div class="bg-lightBrown shadow-xl rounded-xl px-8 pt-8 text-darkGrayish">
    <div class="grid">
        <div class="justify-self-end">
            <button x-data x-on:click="$dispatch('close-modal',{ name: 'register' })"
                    href="#"
                    class="font-bold text-darkGrayish hover:text-darkerBrownish nav-link {{ request()->is('registration*') ? 'active bg-lightBrown px-3 shadow-darkGrayish drop-shadow-lg rounded-3xl text-black' : '' }}"><i class="scale-150 fa-solid fa-square-xmark"></i></button>
        </div>
    </div>
    <!-- Logo -->
    <div class="px-12 pb-10 pt-4">
        <img src="{{ asset('images/SOK-logo-02.svg') }}" alt="Logo" class="w-[220px]"/>
    </div>

<form wire:submit.prevent="register" class="">
    @csrf

    <!-- Name -->
    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input id="name" class="block mt-1 w-full" type="text" wire:model.defer="name" required autofocus autocomplete="name"/>
        <x-input-error :messages="$errors->get('name')" class="mt-2"/>
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-input-label for="email" :value="__('Email')"/>
        <x-text-input id="email" class="block mt-1 w-full" type="email" wire:model.defer="email" required autocomplete="username"/>
        <x-input-error :messages="$errors->get('email')" class="mt-2"/>
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-input-label for="password" :value="__('Password')"/>
        <x-text-input id="password" class="block mt-1 w-full" type="password" wire:model.defer="password" required autocomplete="new-password"/>
        <x-input-error :messages="$errors->get('password')" class="mt-2"/>
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <x-input-label for="password_confirmation" :value="__('Confirm Password')"/>
        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" wire:model.defer="password_confirmation" required autocomplete="new-password"/>
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
    </div>

    <div x-on:click="$dispatch('open-modal',{ name: 'login' })"
        class="flex items-center justify-end mt-8 pb-5">
        <a class="underline text-sm text-darkGrayish hover:text-gray-900 dark:hover:text-gray-100" href="#">
            {{ __('Already registered?') }}
        </a>
        <x-primary-button class="ms-4 ">
            {{ __('Register') }}
        </x-primary-button>
    </div>
</form>
</div>
