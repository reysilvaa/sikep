@props([
    'type' => '',
    'disabled' => false,
    'name' => '',
    'value' => '',
    'placeholder' => '',
])

<input {{ $disabled ? 'disabled' : ''}} {{ $disabled ? $attributes->merge(['class' => 'tw-input-disabled tw-placeholder tw-bg-b50']) : $attributes->merge(['class' => 'tw-input-enabled tw-placeholder tw-bg-b50']) }} type="{{$type}}" id="{{$name}}" name="{{$name}}" placeholder="{{$placeholder}}" value="{{$value}}" type="{{$type}}" {{$type === 'number' ? 'min=0' : ''}}>