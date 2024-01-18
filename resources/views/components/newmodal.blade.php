@props(['name','title'])

<div x-data = "{ show : false , name : '{{ $name }}'}"
     x-show = "show"
     x-on:open-modal.window = "show = ($event.detail.name === name)"
     x-on:close-modal.window = "show = false"
     x-on:keydown.escape.window = "show = false"
     style="display:none;"
     x-transition

    class="fixed z-50 inset-0">

{{--    Gray background--}}
    <div x-on:click="show = false"
        class="fixed inset-0 bg-gray-950 opacity-80"></div>

{{--    MOdal Body--}}
        <div class="m-auto fixed inset-0 flex max-w-fit max-h-fit">
{{--            @if(isset($title))--}}
{{--                <div class="text-darkGrayish flex items-center justify-center font-medium text-2xl pb-4">--}}
{{--                    {{ $title }}--}}
{{--                </div>--}}
{{--            @endif--}}

            <div>{{ $body }}</div>
        </div>

    </div>
