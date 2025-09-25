<div class="max-w-7xl w-full fixed top-9 left-1/2 -translate-x-1/2 z-50">
    <nav class="flex items-center justify-between bg-gray-900/30 backdrop-blur-lg 
                border border-white/10 px-2.5 py-2.5 rounded-full shadow-lg transition-all duration-300">

        <!-- Logo -->
        <div class="flex items-center space-x-2 ml-6">
            <x-icons.logo class="w-6 h-6 text-white"/>
            <span class="font-bold text-white text-2xl">jinihome</span>
        </div>

        <!-- Menu -->
        <ul class="flex space-x-1 text-base">
            @foreach($menus as $menu)
            @php
            $isActivePath = request()->is(ltrim($menu['url'], '/'));
            $currentRouteName = \Route::currentRouteName();
            $isActiveRoute = !empty($menu['page']) && $currentRouteName === $menu['page'];
            $isActive = $isActivePath || $isActiveRoute;
            @endphp
            <li>
                <a href="{{ $menu['url'] }}" class="text-white py-2 px-3.5 rounded-full transition
                  {{ $isActive ? 'bg-[#2C2C2C]/60' : 'hover:bg-[#2C2C2C]' }}">
                    {{ $menu['name'] }}
                </a>
            </li>
            @endforeach
        </ul>


        <!-- Right section -->
        <div class="flex items-center space-x-4">
            <!-- Search -->
            <button aria-label="Search" class="hover:text-orange-400 transition">
                <x-icons.search class="w-6 h-6 text-white"/>
            </button>

            <!-- Cart -->
            <button aria-label="Cart" class="hover:text-orange-400 transition">
                <x-icons.cart class="w-6 h-6 text-white"/>
            </button>
            <!-- Shop Now Button -->
            <a href="/shop"
                class="relative overflow-hidden bg-[#FC5F2B] px-4 py-2 rounded-full font-normal text-white text-sm group">
                <span class="block transition-transform duration-500 transform group-hover:-translate-y-[130%]">
                    Shop Now
                </span>
                <span
                    class="absolute left-0 top-full w-full text-center transition-transform duration-500 transform group-hover:-translate-y-[130%]">
                    Try Now?
                </span>
            </a>
        </div>
    </nav>
</div>