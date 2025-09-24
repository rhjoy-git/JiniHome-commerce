<footer class="relative bg-black text-gray-300 overflow-hidden">
    <!-- Main Footer Content -->
    <div class="max-w-7xl mx-auto px-6 py-12 relative z-10">
        <div class="flex flex-col md:flex-row md:justify-between gap-10">
            <!-- Logo + Description -->
            <div class="flex-1">
                <div class="flex items-center space-x-2">
                    <img src="{{ asset($footerData['logo']) }}" alt="Logo" class="h-6 w-auto">
                    <span class="text-white font-semibold text-lg">jinihome</span>
                </div>
                <p class="mt-2 text-sm text-gray-400">
                    {{ $footerData['description'] }}
                </p>

                <!-- Social Icons -->
                <div class="flex space-x-4 mt-4">
                    @foreach($footerData['socialLinks'] as $link)
                    <a href="{{ $link['url'] }}" target="_blank" class="text-gray-400 hover:text-white">
                        <!-- Placeholder SVG -->
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" />
                        </svg>
                    </a>
                    @endforeach
                </div>
            </div>

            <!-- Links -->
            <div class="flex-1 grid grid-cols-2 gap-8 md:gap-16">
                <div>
                    <h4 class="text-white font-semibold mb-3">{{ $footerData['quickLinksTitle'] }}</h4>
                    <ul class="space-y-2">
                        @foreach($footerData['quickLinks'] as $link)
                        <li>
                            <a href="{{ $link['url'] }}" class="text-gray-400 hover:text-white text-sm">
                                {{ $link['text'] }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-3">{{ $footerData['supportTitle'] }}</h4>
                    <ul class="space-y-2">
                        @foreach($footerData['supportLinks'] as $link)
                        <li>
                            <a href="{{ $link['url'] }}" class="text-gray-400 hover:text-white text-sm">
                                {{ $link['text'] }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Divider -->
    <div class="border-t border-gray-800 relative z-10"></div>

    <!-- Bottom Bar -->
    <div
        class="max-w-7xl mx-auto px-6 py-6 flex flex-col md:flex-row items-center justify-between text-sm text-gray-500 relative z-10">
        <p>{{ $footerData['copyright'] }}</p>
        <div class="flex space-x-4 mt-2 md:mt-0">
            <a href="#" class="hover:text-white">Terms of Use</a>
            <a href="#" class="hover:text-white">Site Map</a>
        </div>
    </div>

    <!-- Background Gradient -->
    <div class="absolute inset-0 bg-gradient-to-t from-red-900 via-black to-black"></div>

    <!-- Blurred Big Text -->
    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-full text-center select-none pointer-events-none">
        <span
            class="text-7xl md:text-9xl font-bold text-white/80 tracking-wide 
                     blur-[8px] opacity-80 leading-none bg-gradient-to-b from-yellow-200 to-transparent bg-clip-text text-transparent">
            jinihome
        </span>
    </div>
</footer>