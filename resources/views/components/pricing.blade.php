<section id="pricing" class="border-y-2 border-neutral-950 bg-[#55c8c5]/25">
    <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
        <div class="mx-auto mb-10 max-w-3xl text-center">
            <p class="text-sm font-black uppercase tracking-[.22em] text-[#f47a1f]">Collector options</p>
            <h2 class="display-font mt-2 text-4xl sm:text-5xl">Pick the kind of collectible you're hunting.</h2>
            <p class="mt-4 text-neutral-600">Tokyo Animania's sample posts do not show a fixed public price list, so current pricing is confirmed directly with the seller.</p>
        </div>

        <div class="grid gap-6 lg:grid-cols-3">
            <x-pricing-card
                name="Prize Finds"
                price="Message for Price"
                description="A good starting point for collectors looking for accessible anime merchandise."
                :features="['Selected prize items', 'Popular anime series', 'Availability varies']"
            />
            <x-pricing-card
                name="Premium Figures"
                price="Message for Price"
                description="For collectors interested in larger or more detailed figure lines."
                :features="['MASTERLISE selections', 'Grandista-style figures', 'Japan-sourced items']"
                :featured="true"
            />
            <x-pricing-card
                name="Special Collectibles"
                price="Message for Price"
                description="For harder-to-find pieces, premium scale figures, or special collector items."
                :features="['Collector-focused pieces', 'Limited availability may apply', 'Direct seller inquiry']"
            />
        </div>
    </div>
</section>
