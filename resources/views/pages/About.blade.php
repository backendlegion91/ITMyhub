@php
  $about = \App\Models\AboutSection::first();
@endphp

@if($about)
<!-- About Section with Bubbles -->
<section id="about" class="relative py-20 px-6 overflow-hidden">

  <!-- Animated Decorative Bubbles -->
  <div class="absolute inset-0 -z-10 overflow-hidden">
    <div class="absolute w-32 h-32 bg-blue-300 opacity-20 rounded-full left-10 top-20 animate-bubble-1"></div>
    <div class="absolute w-20 h-20 bg-purple-300 opacity-20 rounded-full right-10 bottom-32 animate-bubble-2"></div>
    <div class="absolute w-24 h-24 bg-pink-300 opacity-20 rounded-full left-1/2 top-1/3 animate-bubble-3"></div>
  </div>

  <!-- Main Grid Content -->
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center relative z-10">

    <!-- Initials Badge -->
    <div class="flex justify-center md:justify-start">
      <div class="w-32 h-32 flex items-center justify-center rounded-full bg-white text-indigo-700 text-3xl font-bold shadow-xl">
        {{ $about->initials }}
      </div>
    </div>

    <!-- About Text Content -->
    <div>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">About Me</h2>

      <p class="text-lg leading-relaxed text-gray-700 dark:text-gray-300">
        I'm <strong>{{ $about->name }}</strong>, a passionate {{ $about->title }} with over 
        <strong>{{ $about->experience }} years of experience</strong> in building secure, scalable, and high-performance web applications.
      </p>

      <p class="mt-4 text-lg leading-relaxed text-gray-700 dark:text-gray-300">
        {{ $about->bio }}
      </p>

      <div class="mt-4 prose max-w-none text-gray-700 dark:text-gray-300">
        {!! $about->additional_info !!}
      </div>

      <!-- Skill Tags -->
      @php
        $skills = is_array($about->skills) ? $about->skills : json_decode($about->skills, true);
      @endphp

      @if($skills && is_array($skills))
        <div class="mt-6 flex flex-wrap gap-2">
          @foreach($skills as $skill)
            <span class="px-4 py-1 bg-purple-100 text-purple-700 border border-purple-300 rounded-full text-sm hover:bg-purple-200 transition">
              {{ trim($skill) }}
            </span>
          @endforeach
        </div>
      @endif

      <!-- CTA -->
      <div class="mt-8">
        <a href="#contact"
           class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl shadow transition">
          Let's Work Together
        </a>
      </div>
    </div>
  </div>
</section>
@endif
