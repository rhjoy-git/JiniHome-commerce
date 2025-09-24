@extends('layouts.app')
@section('title', 'Welcome')
@section('content')
<!-- Hero Section -->
<section
    class="relative w-full min-h-screen flex flex-col items-center justify-center text-center overflow-hidden bg-gradient-to-r from-[#530402] from-10% via-[#0E0402] via-30% to-[#0E0402] to-90%">
    <!-- Content Container -->
    <div class="relative z-10 max-w-6xl mt-16 py-24 bg-transparent">
        <div class="relative inline-block">
            <div class="absolute inset-0 z-0 select-none pointer-events-none blur-xl opacity-50 
        bg-gradient-to-r from-[#E5B8A7] via-[#FFECCD] to-[#FF6834] 
        bg-clip-text text-transparent">
                <h1 class="text-5xl md:text-7xl font-extrabold capitalize leading-[1.1] tracking-[-0.05em]">
                    Simple, Connected,<br>& Designed for you
                </h1>
            </div>

            <h1 class="relative z-10 text-5xl md:text-7xl font-extrabold 
        bg-gradient-to-r from-[#E5B8A7] via-[#FFECCD] to-[#FF6834] 
        bg-clip-text text-transparent leading-[1.1] tracking-[-0.025em]">
                Simple, Connected,<br>& Designed for you
            </h1>
        </div>

        <!-- Subtitle -->
        <p class="mt-5 text-xl font-normal leading-tight tracking-tight text-center text-gray-400">
            Smart home accessories that blend into your space,<br>
            but stand out in how they make life easier.
        </p>

        <!-- CTA Button -->
        <div class="mt-8">
            <a href="/shop"
                class="relative inline-block overflow-hidden px-6 py-4 bg-[#FC5F2B] rounded-full text-white font-semibold text-base transition hover:bg-[#ff7640] hover:shadow-lg group"
                aria-label="Explore products">
                <span class="block transition-transform duration-500 transform group-hover:-translate-y-[170%]">
                    Shop Right Now
                </span>
                <span
                    class="absolute left-0 top-full w-full text-center transition-transform duration-500 transform group-hover:-translate-y-[170%]">
                    Try Now?
                </span>
            </a>
        </div>
        <!-- Video Section -->
        <div class="mt-12 rounded-[3rem] overflow-hidden shadow-lg">
            <video autoplay loop muted playsinline class="w-full h-auto rounded-xl">
                <source src="{{asset('videos/hero-video.mp4')}}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</section>
@include('partials.categories')
@endsection