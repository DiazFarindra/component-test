@props(['child', 'active'])

@php
    $classes = ($active ?? false)
    ? 'active'
    : 'inactive'
@endphp

<button {{ $attributes->merge(['class' => $classes]) }}>{{ $child }}</button>
