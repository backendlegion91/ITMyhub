@php
  $hero = \App\Models\Hero::first();
@endphp

@if($hero)
<section id="home" class="relative min-h-screen flex items-center justify-center bg-gradient-to-tr from-indigo-600 via-purple-600 to-pink-500 text-white px-6 overflow-hidden">
  
  <!-- Decorative Background Blobs -->
  <div class="absolute inset-0 z-0 pointer-events-none">
    <div class="absolute w-80 h-80 bg-white opacity-10 rounded-full -top-20 -left-20 animate-pulse"></div>
    <div class="absolute w-64 h-64 bg-white opacity-10 rounded-full top-32 right-32 animate-ping"></div>
    <div class="absolute w-40 h-40 bg-white opacity-10 rounded-full bottom-16 left-40 animate-bounce"></div>
  </div>

  <!-- Main Content -->
  <div class="relative z-10 text-center max-w-4xl animate-fade-in-up">
    
    <!-- Initials Badge -->
    <div class="w-32 h-32 mx-auto mb-6 flex items-center justify-center rounded-full bg-white text-indigo-700 text-3xl font-bold shadow-lg">
      {{ $hero->initials }}
    </div>

    <!-- Name -->
    <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-4 drop-shadow-md">
      {{ $hero->name }}
    </h1>

    <!-- Title -->
    <p class="text-lg md:text-2xl font-light text-white/90 mb-8 max-w-xl mx-auto">
      {{ $hero->title }}
    </p>

    <!-- Action Buttons -->
    <div class="flex flex-col sm:flex-row justify-center gap-4">
      <a href="#contact"
         class="bg-white text-indigo-700 px-6 py-3 rounded-xl font-semibold hover:bg-gray-200 transition duration-300 shadow">
        Hire Me
      </a>

      @if($hero->resume_path)
        <a href="{{ asset('storage/' . $hero->resume_path) }}" download
           class="border border-white px-6 py-3 rounded-xl font-semibold hover:bg-white hover:text-indigo-700 transition duration-300">
          Download Resume
        </a>
      @endif
    </div>

  </div>
</section>
@endif
