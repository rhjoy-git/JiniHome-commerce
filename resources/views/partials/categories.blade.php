<!-- Category Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Title -->
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-semibold text-center text-gray-900 mb-12 leading-tight">
            Build Your<br>Smart Home Today
        </h2>
        <!-- Categories Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach($categories as $category)
            <a href="/products/{{ $category['slug'] }}"
                class="block bg-white rounded-3xl text-center transition-all duration-300 hover:-translate-y-2 hover:scale-102 hover:shadow-xl"
                style="width: 292px; height: 344px;" aria-label="View {{ $category['name'] }} products">
                <div class="w-full h-[300px] overflow-hidden bg-[#F8F9FA] rounded-3xl flex items-center justify-center">
                    <img src="{{ $category['image'] }}" alt="{{ $category['name'] }}"
                        class="w-full h-full object-contain">
                </div>
                <div class="mt-2">
                    <p class="text-xl font-semibold text-gray-800">{{ $category['name'] }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>