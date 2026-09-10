<section id="home" class="relative overflow-hidden border-b-2 border-neutral-950">
    <div class="absolute inset-0 grid-paper opacity-50"></div>
    <div class="absolute -right-24 top-10 h-72 w-72 rounded-full border-2 border-neutral-950 bg-[#ffc928] opacity-70"></div>
    <div class="absolute -left-20 bottom-8 h-52 w-52 rounded-full border-2 border-neutral-950 bg-[#55c8c5] opacity-80"></div>

    <div class="relative mx-auto grid min-h-[78vh] max-w-7xl items-center gap-12 px-4 py-16 sm:px-6 lg:grid-cols-[1.05fr_.95fr] lg:px-8">
        <div>
            <div class="mb-6 inline-flex items-center gap-2 rounded-full border-2 border-neutral-950 bg-white px-4 py-2 text-xs font-black uppercase tracking-[0.18em] retro-shadow-sm">
                <span class="h-2.5 w-2.5 rounded-full bg-[#f47a1f]"></span>
                Premium collectibles from Tokyo
            </div>

            <h1 class="display-font max-w-4xl text-5xl leading-[.95] sm:text-6xl lg:text-8xl">
                Bring a Piece of
                <span class="relative inline-block">
                    Japan
                    <span class="absolute -bottom-2 left-0 h-3 w-full -rotate-1 bg-[#ffc928] -z-10"></span>
                </span>
                Home.
            </h1>

            <p class="mt-7 max-w-2xl text-lg leading-8 text-neutral-700 sm:text-xl">
                Tokyo Animania brings premium anime figures and collectibles from Tokyo to fans and collectors who want their next shelf favorite.
            </p>

            <div class="mt-8 flex flex-wrap gap-4">
                <x-button href="#products">Browse Collection <span>↗</span></x-button>
                <x-button href="#contact" variant="aqua">Message Seller</x-button>
            </div>

            <div class="mt-10 flex flex-wrap gap-x-8 gap-y-3 text-sm font-bold">
                <span>✓ Japan-sourced items</span>
                <span>✓ Collector-friendly service</span>
                <span>✓ 84% recommend</span>
            </div>
        </div>

        <div class="relative">
            <div class="absolute -inset-5 rotate-3 rounded-[2.5rem] border-2 border-neutral-950 bg-[#55c8c5]"></div>
            <div class="absolute -inset-2 -rotate-2 rounded-[2.5rem] border-2 border-neutral-950 bg-[#ffc928]"></div>
            <div class="relative overflow-hidden rounded-[2.5rem] border-2 border-neutral-950 bg-white p-3 retro-shadow">
                <img src="{{ asset('images/tokyo-animania/product-dragonball-super.png') }}"
                     alt="Tokyo Animania Dragon Ball collectible"
                     class="aspect-[4/3] w-full rounded-[2rem] object-cover">
            </div>

            <div class="absolute -bottom-8 -left-5 max-w-[230px] rotate-[-3deg] rounded-2xl border-2 border-neutral-950 bg-white p-4 retro-shadow-sm">
                <p class="text-xs font-black uppercase tracking-widest text-[#f47a1f]">Collector note</p>
                <p class="mt-1 text-sm font-bold">Authentic-looking Japanese prize and premium figure selections.</p>
            </div>
        </div>
    </div>

    <div class="wave-band h-28 border-t-2 border-neutral-950"></div>
</section>
