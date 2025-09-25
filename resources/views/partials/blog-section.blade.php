<!-- Blog Section -->
<section class="max-w-7xl mx-auto py-16">
    <!-- Section Header -->
    <div class="text-center mb-10">
        <h2 class="text-3xl md:text-5xl font-bold">We Have partner with</h2>
        <p class="text-gray-500 mt-2">Fresh from the future. The latest releases, ready for you</p>
    </div>

    <!-- Blog Grid -->
    <div class="grid grid-cols-4 grid-rows-4 gap-5">
        @foreach($blogs as $index => $blog)
        @if($index === 0)
        <!-- First Blog -->
        <div class="relative col-span-2 row-span-4 col-start-1 rounded-2xl overflow-hidden group max-h-[800px]">
            <img src="{{ asset($blog['image']) }}" alt="{{ $blog['title'] }}"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
            <span class="absolute top-8 left-8 bg-gray-900/40 text-white text-xs px-3 py-1 rounded-full">
                {{ strtoupper($blog['category']) }}
            </span>
            <div class="absolute bottom-4 left-8 right-8">
                <h3 class="text-white text-4xl font-normal leading-snug">
                    {{ $blog['title'] }}
                </h3>
            </div>
        </div>
        @elseif($index === 1)
        <!-- Second Blog -->
        <div class="relative col-span-2 row-span-2 col-start-3 rounded-2xl overflow-hidden group max-h-[390px]">
            <img src="{{ asset($blog['image']) }}" alt="{{ $blog['title'] }}"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
            <span class="absolute top-8 left-8 bg-gray-900/40 text-white text-xs px-3 py-1 rounded-full">
                {{ strtoupper($blog['category']) }}
            </span>
            <div class="absolute bottom-4 left-8 right-8">
                <h3 class="text-white text-4xl font-normal leading-snug">
                    {{ $blog['title'] }}
                </h3>
            </div>
        </div>
        @elseif($index === 2)
        <!-- Third Blog -->
        <div
            class="relative col-span-2 row-span-2 col-start-3 row-start-3 rounded-2xl overflow-hidden group max-h-[390px]">
            <img src="{{ asset($blog['image']) }}" alt="{{ $blog['title'] }}"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
            <span class="absolute top-8 left-8 bg-gray-900/40 text-white text-xs px-3 py-1 rounded-full">
                {{ strtoupper($blog['category']) }}
            </span>
            <div class="absolute bottom-4 left-8 right-8">
                <h3 class="text-white text-4xl font-normal leading-snug">
                    {{ $blog['title'] }}
                </h3>
            </div>
        </div>
        @endif
        @endforeach
    </div>


    <!-- Button -->
    <div class="text-center mt-10">
        <a href="/blog/archive"
            class="relative inline-block overflow-hidden px-6 py-4 bg-[#FC5F2B] rounded-full text-white font-semibold text-base transition hover:bg-[#ff7640] hover:shadow-lg group"
            aria-label="Explore all blog posts">
            <span class="block transition-transform duration-500 transform group-hover:-translate-y-[170%]">
                See All Blogs
            </span>
            <span
                class="absolute left-0 top-full w-full text-center transition-transform duration-500 transform group-hover:-translate-y-[170%]">
                Explore Now
            </span>
        </a>
    </div>
</section>