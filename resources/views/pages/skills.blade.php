@php
    $skills = \App\Models\Skill::all()->groupBy('category');
@endphp

@if($skills->count())
<section id="skills" class="relative py-20 px-6 overflow-hidden">
  <!-- Animated Bubbles -->
  <div class="absolute inset-0 -z-10">
    <div class="absolute w-32 h-32 bg-indigo-300 opacity-20 rounded-full left-10 top-10 animate-bubble-1"></div>
    <div class="absolute w-24 h-24 bg-purple-300 opacity-20 rounded-full right-10 bottom-10 animate-bubble-2"></div>
    <div class="absolute w-20 h-20 bg-pink-300 opacity-20 rounded-full left-1/2 top-1/4 animate-bubble-3"></div>
  </div>

  <!-- Main Content -->
  <div class="max-w-6xl mx-auto relative z-10 text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-12 text-gray-800 dark:text-white">
      Skills & Technologies
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-left">
      @foreach($skills as $category => $items)
        <div>
          <h3 class="text-xl font-semibold mb-4 text-indigo-700 dark:text-indigo-300">
            {{ $category }}
          </h3>
          <ul class="space-y-3 text-gray-700 dark:text-gray-300">
            @foreach($items as $skill)
              <li class="flex items-center gap-3">
                @if($skill->icon)
                  <span class="text-lg">{!! $skill->icon !!}</span>
                @else
                  <span class="w-4 h-4 inline-block bg-indigo-400 rounded-full"></span>
                @endif
                {{ $skill->name }}
              </li>
            @endforeach
          </ul>
        </div>
      @endforeach
    </div>
  </div>
</section>
@else
  <p class="text-center text-gray-500 py-10">No skills to display yet.</p>
@endif
