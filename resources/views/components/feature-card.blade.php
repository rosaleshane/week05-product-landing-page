@props(['icon', 'title', 'description'])

<article class="group rounded-[2rem] border-2 border-neutral-950 bg-white p-6 transition duration-200 hover:-translate-y-2 hover:bg-[#fffaf2] retro-shadow-sm">
    <div class="mb-5 flex h-14 w-14 items-center justify-center rounded-2xl border-2 border-neutral-950 bg-[#ffc928] text-2xl transition group-hover:rotate-6">
        {{ $icon }}
    </div>
    <h3 class="display-font text-xl">{{ $title }}</h3>
    <p class="mt-3 leading-7 text-neutral-600">{{ $description }}</p>
</article>
