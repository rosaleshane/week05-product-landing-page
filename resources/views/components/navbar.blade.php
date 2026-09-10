<header class="sticky top-0 z-50 border-b-2 border-black bg-[#f7f1e7]/95 backdrop-blur">
    <nav
        class="mx-auto flex max-w-7xl items-center justify-between px-5 py-3 lg:px-8"
        aria-label="Main navigation"
    >

        <a
            href="{{ route('home') }}"
            class="flex items-center gap-3 rounded-md focus:outline-none focus-visible:ring-4 focus-visible:ring-[#55c8c5]"
            aria-label="Go to Tokyo Animania homepage"
        >
            <img
                src="{{ asset('images/tokyo-animania/logo.png') }}"
                alt="Tokyo Animania logo"
                class="h-12 w-auto object-contain md:h-14"
            >
        </a>

        <div class="hidden items-center gap-7 lg:flex" role="navigation" aria-label="Primary links">
            <a
                href="{{ route('home') }}#home"
                class="rounded-md font-bold text-[#171717] transition
                       hover:text-[#f47a1f]
                       focus:outline-none focus-visible:ring-4 focus-visible:ring-[#55c8c5]"
            >
                Home
            </a>

            <a
                href="{{ route('home') }}#features"
                class="rounded-md font-bold text-[#171717] transition
                       hover:text-[#f47a1f]
                       focus:outline-none focus-visible:ring-4 focus-visible:ring-[#55c8c5]"
            >
                Why Us
            </a>

            <a
                href="{{ route('home') }}#products"
                class="rounded-md font-bold text-[#171717] transition
                       hover:text-[#f47a1f]
                       focus:outline-none focus-visible:ring-4 focus-visible:ring-[#55c8c5]"
            >
                Products
            </a>

            <a
                href="{{ route('home') }}#pricing"
                class="rounded-md font-bold text-[#171717] transition
                       hover:text-[#f47a1f]
                       focus:outline-none focus-visible:ring-4 focus-visible:ring-[#55c8c5]"
            >
                Collector Options
            </a>

            <a
                href="{{ route('home') }}#testimonials"
                class="rounded-md font-bold text-[#171717] transition
                       hover:text-[#f47a1f]
                       focus:outline-none focus-visible:ring-4 focus-visible:ring-[#55c8c5]"
            >
                Reviews
            </a>
        </div>

        <div class="hidden items-center gap-3 lg:flex">
            <a
                href="https://www.facebook.com/messages/t/TokyoAnimaniaJPh/"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="Message Tokyo Animania on Messenger"
                class="inline-flex items-center justify-center rounded-full border-2 border-black
                       bg-white px-5 py-2.5 font-bold text-black shadow-[3px_3px_0_#171717]
                       transition
                       hover:translate-x-[1px] hover:translate-y-[1px]
                       hover:shadow-[2px_2px_0_#171717]
                       focus:outline-none focus-visible:ring-4 focus-visible:ring-[#55c8c5]"
            >
                Message Us
            </a>

            <a
                href="{{ route('sign-in') }}"
                aria-label="Open demo sign in page"
                class="inline-flex items-center justify-center rounded-full border-2 border-black
                       bg-[#ffc928] px-5 py-2.5 font-bold text-black shadow-[3px_3px_0_#171717]
                       transition
                       hover:bg-[#f47a1f] hover:text-white
                       focus:outline-none focus-visible:ring-4 focus-visible:ring-[#55c8c5]"
            >
                Sign In
            </a>
        </div>

        <details class="relative lg:hidden">
            <summary
                class="cursor-pointer list-none rounded-xl border-2 border-black bg-[#ffc928]
                       px-4 py-2 font-black shadow-[3px_3px_0_#171717]
                       focus:outline-none focus-visible:ring-4 focus-visible:ring-[#55c8c5]"
                aria-label="Open mobile navigation menu"
            >
                Menu
            </summary>

            <div
                class="absolute right-0 mt-3 w-64 rounded-2xl border-2 border-black bg-[#f7f1e7]
                       p-4 shadow-[6px_6px_0_#171717]"
                role="navigation"
                aria-label="Mobile navigation"
            >
                <div class="flex flex-col gap-2">

                    <a
                        href="{{ route('home') }}#home"
                        class="rounded-xl px-4 py-2.5 font-bold
                               hover:bg-white
                               focus:outline-none focus-visible:ring-4 focus-visible:ring-[#55c8c5]"
                    >
                        Home
                    </a>

                    <a
                        href="{{ route('home') }}#features"
                        class="rounded-xl px-4 py-2.5 font-bold
                               hover:bg-white
                               focus:outline-none focus-visible:ring-4 focus-visible:ring-[#55c8c5]"
                    >
                        Why Us
                    </a>

                    <a
                        href="{{ route('home') }}#products"
                        class="rounded-xl px-4 py-2.5 font-bold
                               hover:bg-white
                               focus:outline-none focus-visible:ring-4 focus-visible:ring-[#55c8c5]"
                    >
                        Products
                    </a>

                    <a
                        href="{{ route('home') }}#pricing"
                        class="rounded-xl px-4 py-2.5 font-bold
                               hover:bg-white
                               focus:outline-none focus-visible:ring-4 focus-visible:ring-[#55c8c5]"
                    >
                        Collector Options
                    </a>

                    <a
                        href="{{ route('home') }}#testimonials"
                        class="rounded-xl px-4 py-2.5 font-bold
                               hover:bg-white
                               focus:outline-none focus-visible:ring-4 focus-visible:ring-[#55c8c5]"
                    >
                        Reviews
                    </a>

                    <a
                        href="https://www.facebook.com/messages/t/TokyoAnimaniaJPh/"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Message Tokyo Animania on Messenger"
                        class="mt-2 rounded-xl border-2 border-black bg-white
                               px-4 py-2.5 text-center font-bold
                               focus:outline-none focus-visible:ring-4 focus-visible:ring-[#55c8c5]"
                    >
                        Message Us
                    </a>

                    <a
                        href="{{ route('sign-in') }}"
                        aria-label="Open demo sign in page"
                        class="rounded-xl border-2 border-black bg-[#ffc928]
                               px-4 py-2.5 text-center font-black
                               focus:outline-none focus-visible:ring-4 focus-visible:ring-[#55c8c5]"
                    >
                        Sign In
                    </a>
                </div>
            </div>
        </details>

    </nav>
</header>