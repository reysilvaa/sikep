<div class="tw-flex {{ isset($isImage) ? 'tw-flex tw-flex-col tw-gap-2' : 'tw-flex-row tw-gap-8 md:tw-gap-14' }} ">
    <h5 class="tw-placeholder tw-text-n700 tw-w-[150px]">{{ $title }}</h5>

    
    @if (isset($isImage) && $isImage == true)
        <img src="" alt="" class="tw-w-80 tw-h-fit tw-min-h-56 tw-bg-b200">
    @elseif (isset($isLabel) && $isLabel == true)
        @include('components.form.label', ['content' => $content])
    @else
    <p class="tw-top-menu-text ">{{ $content }}</p>
    @endif

</div>