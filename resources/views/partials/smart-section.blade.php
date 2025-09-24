<!-- Smart Sections -->
<section class="w-full max-w-7xl mx-auto py-16 space-y-20">
    <!-- Section Title -->
    <h2
        class="text-3xl sm:text-4xl md:text-5xl font-semibold text-center text-gray-900 dark:text-white mb-12 leading-tight">
        Build Your<br>Smart Home Today
    </h2>
    @foreach ($smartSections as $smartSection)
    @if($smartSection['special'])
    <!-- Special Full Background Layout -->
    <div class="relative w-full h-[40rem] overflow-hidden rounded-2xl">
        <img src="{{ asset($smartSection['image']) }}" alt="{{ $smartSection['title'] }}"
            class="absolute inset-0 w-full h-full object-cover rounded-2xl">
        <div class="relative z-10 flex flex-col items-center justify-start h-full text-center text-black px-6 py-12">
            <h3 class="text-2xl md:text-5xl font-bold mb-4">{{ $smartSection['title'] }}</h3>
            <p class="text-lg md:text-xl mb-6">{{ $smartSection['description'] }}</p>
            <a href="{{ $smartSection['button_url'] ?? '#' }}"
                class="inline-block px-6 py-3 border-2 border-black hover:border-gray-500 rounded-full text-lg font-medium transition duration-300">
                {{ $smartSection['button'] }}
            </a>
        </div>
    </div>
    @else
    <!-- Default Text-Image Layout -->
    <div class="grid grid-cols-1 md:grid-cols-5 gap-6 items-center">
        <!-- Text Content -->
        <div class="{{ $smartSection['reverse'] ? 'md:order-2' : 'md:order-1' }} md:col-span-2 bg-[#EFF4F5] rounded-2xl p-8 
             h-full flex flex-col justify-between">
            <div>
                <h3 class="text-5xl font-semibold text-gray-900 mb-4">{{ $smartSection['title'] }}</h3>
                <p class="text-gray-600 text-lg mb-6">{{ $smartSection['description'] }}</p>
            </div>
            <a href="{{ $smartSection['button_url'] ?? '#' }}"
                class="inline-block self-start px-6 py-3 border-2 border-black hover:border-gray-500 rounded-full text-lg font-medium transition  duration-300"
                aria-label="Shop {{ $smartSection['button'] }}">
                {{ $smartSection['button'] }}
            </a>
        </div>
        <!-- Image Container -->
        <div class="{{ $smartSection['reverse'] ? 'md:order-1' : 'md:order-2' }} md:col-span-3 h-[40rem] flex">
            <img src="{{ asset($smartSection['image']) }}" alt="{{ $smartSection['title'] }}"
                class="rounded-2xl w-full h-full object-cover ">
        </div>
    </div>
    @endif
    @endforeach
</section>