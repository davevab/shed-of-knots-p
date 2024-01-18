@props(['name','title'])

<div
    x-data = "{ show : false , name : '{{ $name }}' }"
    x-show = "show"
    x-on:open-modal.window = "show = ($event.detail.name === name)"
    x-on:close-modal.window = "show = true"
    x-on:keydown.escape.window = "show = false"
    style="display:none;"
    x-transition.duration

    class="fixed z-50 inset-0">

    {{--    Gray Background--}}
    <div x-on:click="show = false" class="fixed inset-0 bg-gray-600 opacity-40"></div>

    {{--    Modal Body--}}
    <div class="max-w-[500px] justify-center mx-auto p-4 ">
        @if(isset($title))
            <div class="py-3 flex items-center justify-center">
                {{$title}}
            </div>
        @endif

{{--        <div>--}}
{{--            {{ $body }}--}}
{{--        </div>--}}
    </div>
</div>
