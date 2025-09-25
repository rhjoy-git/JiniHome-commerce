<section
    class="relative max-w-7xl mx-auto rounded-3xl overflow-hidden py-20 my-12 sm:px-12 text-center bg-gradient-to-b from-[#0F0402] via-[#3C0D02] to-[#a82e06]">
    <div class="absolute inset-0 bg-gradient-to-b from-[#571c01] via-[#d6570e]/20 to-[#d6570ebd] opacity-70 blur-2xl">
    </div>
    <!-- Content -->
    <div class="relative z-10 max-w-2xl mx-auto text-white">
        <!-- Badge -->
        <span class="px-4 py-2 rounded-full bg-white/10 text-white text-sm font-medium backdrop-blur-sm">
            Newsletter
        </span>
        
        <!-- Title -->
        <h2 class="mt-6 text-3xl sm:text-6xl font-semibold text-white">
            Stay Updated on <br> Latest Product Releases
        </h2>
        <!-- Subtitle -->
        <p class="mt-4 text-base text-gray-200">
            Never miss a beat and stay update with new product
        </p>
        <!-- Form -->
        <form action="{{ route('newsletter.subscribe') }}" method="POST"
            class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
            @csrf
            <input type="email" name="email" placeholder="Email Address"
                class="w-full sm:w-80 px-5 py-3 rounded-full bg-black/40 text-white placeholder-white focus:outline-none focus:ring-2 focus:ring-[#FF7535]">
            <button type="submit"
                class="px-6 py-3 rounded-full bg-white text-black font-medium hover:bg-[#FF7535] hover:text-white transition">
                Subscribe Now
            </button>
        </form>
    </div>
</section>