@props(['initials', 'name', 'role', 'review', 'accent' => 'orange'])

@php
    $accentClass = match($accent) {
        'yellow' => 'bg-[#ffc928]',
        'aqua' => 'bg-[#55c8c5]',
        default => 'bg-[#f47a1f] text-white',
    };
@endphp

<article class="rounded-[2rem] border-2 border-neutral-950 bg-white p-6 retro-shadow-sm">
    <div class="flex items-center gap-4">
        <div class="display-font flex h-14 w-14 items-center justify-center rounded-full border-2 border-neutral-950 {{ $accentClass }}">
            {{ $initials }}
        </div>
        <div>
            <h3 class="font-black">{{ $name }}</h3>
            <p class="text-sm text-neutral-500">{{ $role }}</p>
        </div>
    </div>

    <div class="mt-5 text-[#f47a1f]">★★★★★</div>
    <p class="mt-4 leading-7 text-neutral-700">“{{ $review }}”</p>
</article>
