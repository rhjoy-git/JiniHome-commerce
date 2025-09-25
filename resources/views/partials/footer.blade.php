<footer class="relative bg-black text-gray-300 overflow-hidden mt-16">
    <!-- Main Footer Content -->
    <div class="max-w-7xl mx-auto px-6 py-12 relative z-10">
        <div class="flex flex-col md:flex-row md:items-start gap-10">
            <!-- Logo + Description -->
            <div class="{{ count($footerData['links']) > 3 ? 'md:w-1/5' : 'flex-1' }}">
                <div class="flex items-center space-x-2">
                    <x-dynamic-component :component="'icons.' . $footerData['logo']" />
                </div>
                <p class="mt-2 text-sm text-gray-400">
                    {{ $footerData['description'] }}
                </p>
                <!-- Social Icons -->
                <div class="flex items-center justify-start space-x-4 mt-4">
                    @foreach($footerData['socialLinks'] as $link)
                    <a href="{{ $link['url'] }}" target="_blank" class="text-gray-400 hover:text-white">
                        <x-dynamic-component :component="'icons.' . $link['icon']" />
                    </a>
                    @endforeach
                </div>
            </div>
            <!-- Links -->
            <div
                class="{{ count($footerData['links']) > 3 ? 'md:w-4/5' : 'flex-1' }} grid grid-cols-1 {{ count($footerData['links']) > 3 ? 'md:grid-cols-5' : 'md:grid-cols-3' }} gap-8 md:gap-16">
                @foreach($footerData['links'] as $linkGroup)
                <div class="{{ count($footerData['links']) > 3 ? 'md:w-full' : '' }}">
                    <h4 class="text-white font-semibold mb-3">{{ $linkGroup['title'] }}</h4>
                    <ul class="space-y-2">
                        @foreach($linkGroup['items'] as $item)
                        @if(isset($item['text']))
                        <li>
                            <a href="{{ $item['url'] }}" class="text-gray-400 hover:text-white text-sm">
                                {{ $item['text'] }}
                            </a>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Divider -->
    <div class="border-t border-gray-800 relative z-10"></div>
    <!-- Bottom Bar -->
    <div
        class="max-w-7xl mx-auto px-6 py-6 flex flex-col md:flex-row items-center justify-between text-sm text-gray-500 relative z-10">
        <p>{!! $footerData['copyright'] !!}</p>
        <div class="flex space-x-4 mt-2 md:mt-0">
            <a href="#" class="hover:text-white">Terms of Use</a>
            <a href="#" class="hover:text-white">Site Map</a>
        </div>
    </div>
    <!-- Background Gradient -->
    <div class="absolute inset-0 bg-gradient-to-t from-red-900 via-black to-black top"></div>
    <!-- Blurred Big Text -->
    <div class="w-full text-center select-none pointer-events-none">
        <span
            class="text-7xl md:text-[15rem] font-extrabold text-white tracking-wide blur-[1px] opacity-80 leading-none bg-gradient-to-b from-yellow-200 to-transparent bg-clip-text text-transparent">
            jinihome
        </span>
    </div>
</footer>