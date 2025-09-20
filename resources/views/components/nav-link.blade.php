@props(['active' => false])

@php
$classes = $active
            ? 'text-cyan-400 neon-text font-bold'
            : 'text-cyan-300 hover:text-cyan-200 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
