<section class="max-w-3xl mx-auto py-12">
    <h2 class="text-5xl font-bold text-center mb-6">Have Questions?</h2>
    <p class="text-center text-gray-500 mb-16 text-lg">
        Quick answers to help you set up and use your Orbix devices.
    </p>

    <!-- প্রথমটা ডিফল্ট ওপেন -->
    <div x-data="{ open: 0 }" class="space-y-4">
        @foreach($faqs as $index => $faq)
        <div class="border rounded-lg shadow-sm overflow-hidden">
            <!-- Question -->
            <button @click="open = open === {{ $index }} ? null : {{ $index }}" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-lg 
                       focus:outline-none focus:ring-0 outline-none text-black" :aria-expanded="open === {{ $index }}"
                aria-controls="faq-answer-{{ $index }}">

                <span>{{ $faq['question'] }}</span>

                <span x-show="open !== {{ $index }}">
                    <x-icons.plus class="w-6 h-6 text-gray-700" />
                </span>
                <span x-show="open === {{ $index }}">
                    <x-icons.cross class="w-6 h-6 text-gray-700" />
                </span>
            </button>

            <!-- Answer -->
            <div x-show="open === {{ $index }}" x-collapse id="faq-answer-{{ $index }}" role="region"
                class="px-6 pb-4 text-black text-base font-normal leading-relaxed">
                {{ $faq['answer'] }}
            </div>
        </div>
        @endforeach
    </div>
</section>