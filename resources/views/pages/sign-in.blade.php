@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-[#f7f1e7] flex items-center justify-center px-6 py-12">

    <div class="w-full max-w-md">

        <a href="{{ route('home') }}"
           class="inline-flex items-center gap-2 mb-6 font-bold text-black hover:text-[#f47a1f] transition">
            ← Back to Home
        </a>

        <div class="bg-white border-2 border-black rounded-[28px] p-8 md:p-10 shadow-[8px_8px_0_#171717]">

            <div class="text-center mb-8">

                <img
                    src="{{ asset('images/tokyo-animania/logo.png') }}"
                    alt="Tokyo Animania Logo"
                    class="h-20 mx-auto mb-5 object-contain"
                >

                <p class="text-[#f47a1f] font-bold uppercase tracking-widest text-xs mb-2">
                    Welcome Back
                </p>

                <h1 class="text-3xl md:text-4xl font-black text-[#171717]">
                    Sign In
                </h1>

                <p class="text-gray-600 mt-3 text-sm">
                    Access your Tokyo Animania account.
                </p>

            </div>


            <form action="{{ route('sign-in.submit') }}" method="POST" class="space-y-5">

                @csrf

                <div>
                    <label class="block font-bold text-sm mb-2">
                        Email Address
                    </label>

                    <input
                        type="email"
                        placeholder="collector@example.com"
                        required
                        class="w-full px-4 py-3 rounded-xl border-2 border-black
                               focus:outline-none focus:ring-4 focus:ring-[#55c8c5]/30"
                    >
                </div>


                <div>
                    <label class="block font-bold text-sm mb-2">
                        Password
                    </label>

                    <input
                        type="password"
                        placeholder="••••••••"
                        required
                        class="w-full px-4 py-3 rounded-xl border-2 border-black
                               focus:outline-none focus:ring-4 focus:ring-[#55c8c5]/30"
                    >
                </div>


                <div class="flex items-center justify-between text-sm">

                    <label class="flex items-center gap-2">
                        <input type="checkbox">
                        Remember me
                    </label>

                    <span class="font-bold text-[#f47a1f] cursor-pointer">
                        Forgot Password?
                    </span>

                </div>


                <button
                    type="submit"
                    class="w-full bg-[#f47a1f] text-white font-black
                           py-3.5 rounded-xl border-2 border-black
                           shadow-[4px_4px_0_#171717]
                           hover:translate-x-[2px]
                           hover:translate-y-[2px]
                           hover:shadow-[2px_2px_0_#171717]
                           transition">
                    Sign In
                </button>

            </form>


            <div class="relative my-7">
                <div class="border-t border-gray-300"></div>
                <span class="absolute bg-white px-3 text-xs text-gray-500
                             left-1/2 -translate-x-1/2 -top-2">
                    COLLECTORS AREA
                </span>
            </div>


            <p class="text-center text-sm text-gray-600">
                Don't have an account?
                <span class="font-bold text-[#55aead]">
                    Contact Tokyo Animania
                </span>
            </p>

        </div>

        <p class="text-center text-xs text-gray-500 mt-6">
            Tokyo Animania • Authentic Japanese Collectibles
        </p>

    </div>

</div>

@endsection