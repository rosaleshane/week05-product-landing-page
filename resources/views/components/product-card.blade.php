@props(['image', 'series', 'name', 'tag' => 'Featured'])

<article class="group overflow-hidden rounded-[2rem] border-2 border-neutral-950 bg-white retro-shadow-sm">
    <div class="relative overflow-hidden border-b-2 border-neutral-950 bg-[#efe8dc]">
        <img src="{{ asset($image) }}" alt="{{ $name }}" class="aspect-[4/3] w-full object-cover transition duration-500 group-hover:scale-105">
        <span class="absolute left-4 top-4 rounded-full border-2 border-neutral-950 bg-[#ffc928] px-3 py-1 text-xs font-black uppercase tracking-wider">{{ $tag }}</span>
    </div>
    <div class="p-5">
        <p class="text-xs font-black uppercase tracking-[.18em] text-[#f47a1f]">{{ $series }}</p>
        <h3 class="display-font mt-2 text-xl leading-tight">{{ $name }}</h3>
        <div class="mt-5 flex items-center justify-between">
            <span class="text-sm font-bold text-neutral-500">Price on inquiry</span>
            <a href="#contact" class="rounded-full border-2 border-neutral-950 bg-[#55c8c5] px-4 py-2 text-sm font-black transition hover:-translate-y-1">Ask ↗</a>
        </div>
    </div>
</article>
