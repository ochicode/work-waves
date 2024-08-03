@props(['tag', 'size' => 'base'])

@php
$classes = "bg-black/10  rounded-xl font-bold hover:bg-black/25 transition-colors duration-300";
    if ($size === 'base') {
        $classes .=" px-5 py-1 text-sm";
    }

    if ($size === 'small') {
        $classes .=" px-3 py-1 text-2xs";
    }
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ $tag->name }}</a>