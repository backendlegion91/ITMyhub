@php
  $testimonials = \App\Models\Testimonial::latest()->get();
@endphp

<section id="testimonials" class="relative py-20 px-6 overflow-hidden">
  <!-- Animated Bubbles -->
  <div class="absolute inset-0 -z-10">
    <div class="absolute w-32 h-32 bg-indigo-300 opacity-20 rounded-full left-10 top-10 animate-bubble-1"></div>
    <div class="absolute w-24 h-24 bg-purple-300 opacity-20 rounded-full right-10 bottom-10 animate-bubble-2"></div>
    <div class="absolute w-20 h-20 bg-pink-300 opacity-20 rounded-full left-1/2 top-1/4 animate-bubble-3"></div>
  </div>

  <div class="max-w-4xl mx-auto text-center relative z-10">
    <h2 class="text-3xl md:text-4xl font-bold mb-12 text-gray-800 dark:text-white">Testimonials</h2>

    <!-- Swiper -->
    <div class="swiper testimonials-swiper">
      <div class="swiper-wrapper">

        @forelse($testimonials as $t)
          <div class="swiper-slide">
            <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg mx-4 transition duration-300 hover:shadow-xl">
              <div class="text-5xl text-indigo-400 mb-4">“</div>
              <p class="text-lg italic text-gray-700 dark:text-gray-300 mb-4">
                {{ $t->message }}
              </p>
              <div class="flex flex-col items-center">
                <span class="font-semibold text-indigo-700 dark:text-indigo-300">{{ $t->name }}</span>
                @if($t->role || $t->company)
                  <span class="text-sm text-gray-500 dark:text-gray-400">
                    {{ $t->role }}{{ $t->company ? ', ' . $t->company : '' }}
                  </span>
                @endif

                @if($t->linkedin)
                  <a href="{{ $t->linkedin }}" target="_blank" class="mt-2 text-blue-600 hover:text-blue-800 transition">
                    <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn" class="w-5 h-5 inline-block">
                  </a>
                @endif
              </div>
            </div>
          </div>
        @empty
          <div class="swiper-slide">
            <div class="bg-gray-100 dark:bg-gray-800 rounded-2xl p-6 shadow-lg mx-4">
              <p class="text-lg italic text-gray-500 dark:text-gray-400">No testimonials available right now.</p>
            </div>
          </div>
        @endforelse

      </div>
      <!-- Pagination -->
      <div class="swiper-pagination mt-6"></div>
    </div>
  </div>
</section>
