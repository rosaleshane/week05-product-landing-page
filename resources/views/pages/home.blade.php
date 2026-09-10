@extends('layouts.app')

@section('title', 'Tokyo Animania — Premium Anime Collectibles')

@section('content')
    <x-navbar />
    <main>
        <x-hero />
        <x-features />
        <x-products />
        <x-showcase />
        <x-pricing />
        <x-testimonials />
        <x-cta />
    </main>
    <x-footer />
@endsection
