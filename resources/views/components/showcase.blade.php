<section class="mx-auto grid max-w-7xl gap-10 px-4 py-20 sm:px-6 lg:grid-cols-2 lg:items-center lg:px-8">
    <div class="relative">
        <div class="absolute -inset-4 -rotate-2 rounded-[2.5rem] border-2 border-neutral-950 bg-[#f47a1f]"></div>
        <img src="{{ asset('images/tokyo-animania/product-baki-musashi.png') }}" alt="Tokyo Animania product showcase" class="relative w-full rounded-[2.5rem] border-2 border-neutral-950 object-cover retro-shadow">
    </div>

    <div>
        <p class="text-sm font-black uppercase tracking-[.22em] text-[#f47a1f]">Product showcase</p>
        <h2 class="display-font mt-2 text-4xl sm:text-5xl">From Tokyo shelves to your display case.</h2>
        <p class="mt-6 text-lg leading-8 text-neutral-600">
            The landing page highlights Tokyo Animania's collector-focused lineup while keeping the experience easy to scan on desktop, tablet, and mobile.
        </p>

        <div class="mt-8 grid gap-4 sm:grid-cols-2">
            @foreach ([
                ['01', 'Premium figures', 'MASTERLISE, Grandista and character collectibles.'],
                ['02', 'Popular series', 'Dragon Ball, Baki, Overlord, Street Fighter and more.'],
                ['03', 'Collector support', 'Message the seller for current prices and availability.'],
                ['04', 'Mobile friendly', 'Responsive layout designed to work across screen sizes.'],
            ] as [$number, $title, $copy])
                <div class="rounded-3xl border-2 border-neutral-950 bg-white p-5">
                    <span class="display-font text-2xl text-[#55c8c5]">{{ $number }}</span>
                    <h3 class="mt-2 font-black">{{ $title }}</h3>
                    <p class="mt-1 text-sm leading-6 text-neutral-600">{{ $copy }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
