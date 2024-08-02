@php
    $classes = 'p-4 bg-black/5 rounded-xl border border-transparent hover:border-dodger-blue-600 hover:shadow-lg group transition-all duration-300'
@endphp

<div {{ $attributes(['class'=> $classes]) }}>
    {{ $slot }}
</div>