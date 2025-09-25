<section class="bg-gradient-to-b from-white to-gray-50 py-16">
    <div class="max-w-7xl mx-auto">
        <!-- Top Badge -->
        <div class="flex justify-center items-center mb-6" aria-label="Best Products badge">
            <div class="inline-flex items-center bg-white shadow rounded-full px-4 py-2 text-sm font-medium" role="img"
                aria-label="Best Products badge">
                <div class="rounded-full bg-[#FC5F2B] p-2.5 mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 28 28" fill="none"
                        aria-label="Badge icon">
                        <path
                            d="M25.375 7H22.75V5.25C22.75 5.01794 22.6578 4.79538 22.4937 4.63128C22.3296 4.46719 22.1071 4.375 21.875 4.375H6.125C5.89294 4.375 5.67038 4.46719 5.50628 4.63128C5.34219 4.79538 5.25 5.01794 5.25 5.25V7H2.625C2.16087 7 1.71575 7.18437 1.38756 7.51256C1.05937 7.84075 0.875 8.28587 0.875 8.75V10.5C0.875 11.6603 1.33594 12.7731 2.15641 13.5936C2.56266 13.9998 3.04496 14.3221 3.57576 14.542C4.10656 14.7618 4.67547 14.875 5.25 14.875H5.64922C6.16465 16.5084 7.1474 17.955 8.47602 19.036C9.80464 20.117 11.4209 20.7849 13.125 20.9573V23.625H10.5C10.2679 23.625 10.0454 23.7172 9.88128 23.8813C9.71719 24.0454 9.625 24.2679 9.625 24.5C9.625 24.7321 9.71719 24.9546 9.88128 25.1187C10.0454 25.2828 10.2679 25.375 10.5 25.375H17.5C17.7321 25.375 17.9546 25.2828 18.1187 25.1187C18.2828 24.9546 18.375 24.7321 18.375 24.5C18.375 24.2679 18.2828 24.0454 18.1187 23.8813C17.9546 23.7172 17.7321 23.625 17.5 23.625H14.875V20.9541C18.3684 20.6008 21.2669 18.1497 22.3213 14.875H22.75C23.9103 14.875 25.0231 14.4141 25.8436 13.5936C26.6641 12.7731 27.125 11.6603 27.125 10.5V8.75C27.125 8.28587 26.9406 7.84075 26.6124 7.51256C26.2842 7.18437 25.8391 7 25.375 7ZM5.25 13.125C4.55381 13.125 3.88613 12.8484 3.39384 12.3562C2.90156 11.8639 2.625 11.1962 2.625 10.5V8.75H5.25V12.25C5.25 12.5417 5.26422 12.8333 5.29266 13.125H5.25ZM21 12.1516C21 16.0366 17.8281 19.2216 14 19.25C12.1435 19.25 10.363 18.5125 9.05025 17.1997C7.7375 15.887 7 14.1065 7 12.25V6.125H21V12.1516ZM25.375 10.5C25.375 11.1962 25.0984 11.8639 24.6062 12.3562C24.1139 12.8484 23.4462 13.125 22.75 13.125H22.6953C22.7312 12.8018 22.7495 12.4768 22.75 12.1516V8.75H25.375V10.5Z"
                            fill="white" />
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="text-xl leading-none">Best Products</span>
                    <span class="text-lg">Awards 2025</span>
                </div>
            </div>
        </div>

        <!-- Heading -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-5xl font-semibold text-gray-900">Loved by real people</h2>
            <p class="mt-2 text-gray-600">Stories from people already using Orbix every day.</p>
        </div>

        <!-- Swiper -->
        <div class="swiper testimonialSwiper">
            <div class="swiper-wrapper py-2">
                @php
                $pairedTestimonials = array_chunk($testimonials, 2);
                @endphp

                @foreach($pairedTestimonials as $colIndex => $pair)
                @if(count($pair) === 2)
                <div class="swiper-slide">
                    <div class="flex flex-col gap-4">

                        @php
                        $isOddColumn = $colIndex % 2 === 0;
                        $textItem = $pair[0];
                        $mediaItem = $pair[1];
                        @endphp

                        <!-- Text Box -->
                        <div class="{{ $isOddColumn ? 'order-1' : 'order-2' }}
                                    bg-white rounded-2xl shadow-md p-6 flex items-start h-48">
                            <div>
                                <div class="flex items-center mb-2">
                                    <img src="{{ $textItem['avatar'] }}" alt="{{ $textItem['name'] }}'s avatar"
                                        class="w-10 h-10 rounded-full">
                                    <div class="ml-2">
                                        <h4 class="text-base font-semibold text-gray-900 flex items-center">
                                            {{ $textItem['name'] }}
                                            @if(!empty($textItem['verified']))
                                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-4 h-4 text-blue-500"
                                                viewBox="0 0 14 13" fill="none">
                                                <path
                                                    d="M6.1041 7.6521L4.7121 6.2601C4.59476 6.14276 4.45076 6.0841 4.2801 6.0841C4.10943 6.0841 3.9601 6.1481 3.8321 6.2761C3.71476 6.39343 3.6561 6.54276 3.6561 6.7241C3.6561 6.90543 3.71476 7.05476 3.8321 7.1721L5.6561 8.9961C5.77343 9.11343 5.92276 9.1721 6.1041 9.1721C6.28543 9.1721 6.43476 9.11343 6.5521 8.9961L10.1841 5.3641C10.3014 5.24676 10.3601 5.10276 10.3601 4.9321C10.3601 4.76143 10.2961 4.6121 10.1681 4.4841C10.0508 4.36676 9.90143 4.3081 9.7201 4.3081C9.53876 4.3081 9.38943 4.36676 9.2721 4.4841L6.1041 7.6521ZM7.0001 12.9001C6.11476 12.9001 5.28276 12.732 4.5041 12.3958C3.72543 12.06 3.0481 11.6041 2.4721 11.0281C1.8961 10.4521 1.4402 9.77476 1.10442 8.9961C0.768204 8.21743 0.600098 7.38543 0.600098 6.5001C0.600098 5.61476 0.768204 4.78276 1.10442 4.0041C1.4402 3.22543 1.8961 2.5481 2.4721 1.9721C3.0481 1.3961 3.72543 0.939991 4.5041 0.603778C5.28276 0.267991 6.11476 0.100098 7.0001 0.100098C7.88543 0.100098 8.71743 0.267991 9.4961 0.603778C10.2748 0.939991 10.9521 1.3961 11.5281 1.9721C12.1041 2.5481 12.56 3.22543 12.8958 4.0041C13.232 4.78276 13.4001 5.61476 13.4001 6.5001C13.4001 7.38543 13.232 8.21743 12.8958 8.9961C12.56 9.77476 12.1041 10.4521 11.5281 11.0281C10.9521 11.6041 10.2748 12.06 9.4961 12.3958C8.71743 12.732 7.88543 12.9001 7.0001 12.9001Z"
                                                    fill="black" />
                                            </svg>
                                            @endif
                                        </h4>
                                        <p class="text-xs text-gray-900">{{ $textItem['role'] }}</p>
                                    </div>
                                </div>
                                @if(!empty($textItem['text']))
                                <p class="text-gray-900 text-sm leading-relaxed">
                                    "{{ Str::limit($textItem['text'], 150) }}"
                                </p>
                                @endif
                            </div>
                        </div>

                        <!-- Media Box -->
                        <div class="{{ $isOddColumn ? 'order-2' : 'order-1' }}
                                    bg-white rounded-2xl shadow-md overflow-hidden relative h-96">
                            @if(!empty($mediaItem['image']) || !empty($mediaItem['video']))
                            <div class="relative w-full h-full">
                                @if(!empty($mediaItem['image']))
                                <img src="{{ $mediaItem['image'] }}" alt="{{ $mediaItem['name'] }}'s testimonial image"
                                    class="w-full h-full object-cover">
                                @elseif(!empty($mediaItem['video']))
                                <video autoplay loop muted playsinline class="w-full h-full object-cover">
                                    <source src="{{ asset($mediaItem['video']) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                @endif

                                <!-- Overlay user info -->
                                <div
                                    class="absolute top-2 left-2 bg-black/20 text-white rounded-lg px-3 py-2 flex items-center space-x-2">
                                    <img src="{{ $mediaItem['avatar'] }}" alt="{{ $mediaItem['name'] }}'s avatar"
                                        class="w-10 h-10 rounded-full border border-white">
                                    <div>
                                        <h4 class="text-base font-semibold flex items-center">{{ '@' .
                                            $mediaItem['name'] }}
                                            @if(!empty($mediaItem['verified']))
                                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-4 h-4 text-blue-500"
                                                viewBox="0 0 16 15" fill="none">
                                                <path
                                                    d="M15.5 7.5C15.5 8.14 14.7137 8.6675 14.5562 9.2575C14.3937 9.8675 14.805 10.7175 14.4963 11.2513C14.1825 11.7938 13.2387 11.8588 12.7987 12.2987C12.3588 12.7387 12.2938 13.6825 11.7513 13.9963C11.2175 14.305 10.3675 13.8937 9.7575 14.0562C9.1675 14.2137 8.64 15 8 15C7.36 15 6.8325 14.2137 6.2425 14.0562C5.6325 13.8937 4.7825 14.305 4.24875 13.9963C3.70625 13.6825 3.64125 12.7387 3.20125 12.2987C2.76125 11.8588 1.8175 11.7938 1.50375 11.2513C1.195 10.7175 1.60625 9.8675 1.44375 9.2575C1.28625 8.6675 0.5 8.14 0.5 7.5C0.5 6.86 1.28625 6.3325 1.44375 5.7425C1.60625 5.1325 1.195 4.2825 1.50375 3.74875C1.8175 3.20625 2.76125 3.14125 3.20125 2.70125C3.64125 2.26125 3.70625 1.3175 4.24875 1.00375C4.7825 0.695 5.6325 1.10625 6.2425 0.94375C6.8325 0.78625 7.36 0 8 0C8.64 0 9.1675 0.78625 9.7575 0.94375C10.3675 1.10625 11.2175 0.695 11.7513 1.00375C12.2938 1.3175 12.3588 2.26125 12.7987 2.70125C13.2387 3.14125 14.1825 3.20625 14.4963 3.74875C14.805 4.2825 14.3937 5.1325 14.5562 5.7425C14.7137 6.3325 15.5 6.86 15.5 7.5Z"
                                                    fill="#2568EF" />
                                                <path
                                                    d="M10.1675 5.265L7.3125 8.12L5.8325 6.64125C5.51125 6.32 4.99 6.32 4.66875 6.64125C4.3475 6.9625 4.3475 7.48375 4.66875 7.805L6.745 9.88125C7.0575 10.1938 7.565 10.1938 7.8775 9.88125L11.33 6.42875C11.6512 6.1075 11.6512 5.58625 11.33 5.265C11.0087 4.94375 10.4887 4.94375 10.1675 5.265Z"
                                                    fill="#FFFCEE" />
                                            </svg>
                                            @endif
                                        </h4>
                                        <p class="text-sm text-gray-200">{{ $mediaItem['role'] }}</p>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="w-full h-full flex items-center justify-center bg-gray-200 text-gray-500">
                                No media available
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>

        <!-- Button -->
        <div class="text-center mt-10">
            <a href="/reviews"
                class="relative inline-block overflow-hidden px-6 py-4 bg-[#FC5F2B] rounded-full text-white font-semibold text-base transition hover:bg-[#ff7640] hover:shadow-lg group"
                aria-label="Explore products">
                <span class="block transition-transform duration-500 transform group-hover:-translate-y-[170%]">
                    See More Review
                </span>
                <span
                    class="absolute left-0 top-full w-full text-center transition-transform duration-500 transform group-hover:-translate-y-[170%]">
                    Try Now?
                </span>
            </a>
        </div>
    </div>
</section>