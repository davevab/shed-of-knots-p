@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-yellowish dark:border-yellowish bg-darkGrayish dark:text-gray-300 focus:border-limeButton dark:focus:border-limeButton focus:ring-limeButton dark:focus:ring-limeButton rounded-md shadow-sm']) !!}>
