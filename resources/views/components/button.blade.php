@props([
    'href' => '#',
    'variant' => 'primary',
])

@php
    $styles = match ($variant) {
        'secondary' => 'bg-white text-neutral-950 border-2 border-neutral-950 hover:-translate-y-1',
        'dark' => 'bg-neutral-950 text-white border-2 border-neutral-950 hover:bg-[#f47a1f]',
        'aqua' => 'bg-[#55c8c5] text-neutral-950 border-2 border-neutral-950 hover:-translate-y-1',
        default => 'bg-[#f47a1f] text-white border-2 border-neutral-950 hover:-translate-y-1',
    };
@endphp

<a href="{{ $href }}"
   {{ $attributes->merge(['class' => "inline-flex items-center justify-center gap-2 rounded-full px-6 py-3 text-sm font-bold transition duration-200 retro-shadow-sm $styles"]) }}>
    {{ $slot }}
</a>
