@props([
    'disabled' => false,
    'name' => '',
    'value' => '',
    'type' => '',
    'placeholder' => '',
    'icon' => '',
    'alt' => '',
])

<div class="tw-relative tw-flex tw-w-full">
    <input type="number" min="0" id="{{$name}}" name="{{$name}}" placeholder="{{$placeholder}}"
    value="{{$value}}" {{ $disabled ? 'disabled' : ''}} {{ $disabled ? $attributes->merge(['class' => 'tw-input-disabled tw-placeholder  tw-pl-8 tw-pr-3 tw-bg-b50']) : $attributes->merge(['class' => 'tw-input-enabled tw-placeholder  tw-pl-8 tw-pr-3 tw-bg-b50']) }} type="{{$type}}" {{$type === 'number' ? 'min=0' : ''}}>
    </input>
    <span
        class="tw-absolute tw-top-1/2 -tw-translate-y-1/2 tw-left-[6px] tw-flex tw-items-center tw-cursor-pointer">
        <img class="tw-w-7 tw-bg-cover"
            src="{{ asset('assets/icons/actionable/'.$icon.'.svg') }}" alt="{{$alt}}">
    </span>
</div>