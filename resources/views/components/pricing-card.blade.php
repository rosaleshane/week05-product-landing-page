@props(['name', 'price', 'description', 'features' => [], 'featured' => false])

<article class="relative rounded-[2rem] border-2 border-neutral-950 p-6 {{ $featured ? 'bg-[#ffc928] -rotate-1' : 'bg-white' }} retro-shadow-sm">
    @if($featured)
        <span class="absolute -top-4 right-6 rounded-full border-2 border-neutral-950 bg-[#f47a1f] px-4 py-2 text-xs font-black uppercase tracking-wider text-white">Collector favorite</span>
    @endif

    <p class="text-sm font-black uppercase tracking-[.18em] text-neutral-500">{{ $name }}</p>
    <h3 class="display-font mt-4 text-4xl">{{ $price }}</h3>
    <p class="mt-3 min-h-14 text-sm leading-6 text-neutral-600">{{ $description }}</p>

    <ul class="mt-6 space-y-3 text-sm font-bold">
        @foreach($features as $feature)
            <li class="flex gap-3"><span>✓</span><span>{{ $feature }}</span></li>
        @endforeach
    </ul>

    <x-button href="#contact" :variant="$featured ? 'dark' : 'aqua'" class="mt-7 w-full">Ask for current price</x-button>
</article>
