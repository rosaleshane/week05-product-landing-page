<header class="sticky top-0 z-50 border-b-2 border-neutral-950 bg-[#f7f1e7]/95 backdrop-blur">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3 sm:px-6 lg:px-8">
        <a href="#home" class="flex items-center gap-3">
            <img src="{{ asset('images/tokyo-animania/logo.png') }}" alt="Tokyo Animania" class="h-12 w-24 rounded-xl border-2 border-neutral-950 object-cover sm:w-28">
            <span class="hidden text-xs font-black uppercase tracking-[0.18em] md:block">Tokyo → Your Shelf</span>
        </a>

        <nav class="hidden items-center gap-6 text-sm font-bold lg:flex">
            <a class="transition hover:text-[#f47a1f]" href="#home">Home</a>
            <a class="transition hover:text-[#f47a1f]" href="#features">Features</a>
            <a class="transition hover:text-[#f47a1f]" href="#products">Products</a>
            <a class="transition hover:text-[#f47a1f]" href="#pricing">Pricing</a>
            <a class="transition hover:text-[#f47a1f]" href="#testimonials">Testimonials</a>
            <a class="transition hover:text-[#f47a1f]" href="#contact">Contact</a>
        </nav>

        <div class="hidden items-center gap-3 sm:flex">
            <x-button href="#contact" variant="secondary" class="!px-4 !py-2">Sign In</x-button>
            <x-button href="#products" class="!px-4 !py-2">Get Started</x-button>
        </div>

        <details class="relative lg:hidden">
            <summary class="cursor-pointer list-none rounded-full border-2 border-neutral-950 bg-white px-4 py-2 font-black retro-shadow-sm">
                Menu
            </summary>
            <div class="absolute right-0 mt-3 w-56 rounded-3xl border-2 border-neutral-950 bg-white p-4 retro-shadow">
                <div class="flex flex-col gap-3 font-bold">
                    <a href="#home">Home</a>
                    <a href="#features">Features</a>
                    <a href="#products">Products</a>
                    <a href="#pricing">Pricing</a>
                    <a href="#testimonials">Testimonials</a>
                    <a href="#contact">Contact</a>
                </div>
            </div>
        </details>
    </div>
</header>
