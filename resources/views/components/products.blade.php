<section id="products" class="border-y-2 border-neutral-950 bg-[#171717] text-white">
    <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8 lg:py-24">

        <div
            class="mb-10 grid gap-6
                   md:grid-cols-[minmax(0,1fr)_auto]
                   md:items-end
                   lg:mb-12"
        >
            <div class="max-w-4xl">
                <p class="text-sm font-black uppercase tracking-[.22em] text-[#55c8c5]">
                    Featured collectibles
                </p>

                <h2
                    class="display-font mt-2
                           text-4xl leading-tight
                           sm:text-5xl
                           lg:text-6xl"
                >
                    Shelf-worthy picks from iconic series.
                </h2>
            </div>

            <div class="md:justify-self-end">
                <x-button
                    href="#contact"
                    variant="secondary"
                    class="w-full sm:w-auto"
                >
                    Ask about availability
                </x-button>
            </div>
        </div>

        <div
            class="grid gap-5
                   sm:gap-6
                   md:grid-cols-2
                   lg:grid-cols-3
                   lg:gap-7"
        >
            <x-product-card
                image="images/tokyo-animania/product-goku-ssj3.png"
                series="Dragon Ball Z"
                name="Son Goku Super Saiyan 3 — Grandista Nero"
            />

            <x-product-card
                image="images/tokyo-animania/product-overlord-albedo.png"
                series="Overlord"
                name="Albedo 1/7 — Gracemaster"
                tag="Premium"
            />

            <x-product-card
                image="images/tokyo-animania/product-chun-li.png"
                series="Street Fighter"
                name="Chun-Li — MASTERLISE"
            />

            <x-product-card
                image="images/tokyo-animania/product-hanma-baki.png"
                series="Baki"
                name="Hanma Baki — Grandista"
            />

            <x-product-card
                image="images/tokyo-animania/product-baki-green.png"
                series="Baki"
                name="Baki Series — MASTERLISE Figure"
            />

            <x-product-card
                image="images/tokyo-animania/product-jujutsu-kaisen.png"
                series="Jujutsu Kaisen"
                name="MASTERLISE EXPIECE Figure"
            />
        </div>
    </div>
</section>