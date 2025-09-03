@php
    use Illuminate\Support\Str;

    $educations = \App\Models\Education::where('type', 'education')->get();
    $certifications = \App\Models\Education::where('type', 'certification')->get();
@endphp

<section id="education" class="relative py-20 px-6 overflow-hidden">

  <!-- Animated Bubbles -->
    <div class="absolute inset-0 -z-10">
    <div class="absolute w-32 h-32 bg-indigo-300 opacity-20 rounded-full left-10 top-10 animate-bubble-1"></div>
    <div class="absolute w-24 h-24 bg-purple-300 opacity-20 rounded-full right-10 bottom-10 animate-bubble-2"></div>
    <div class="absolute w-20 h-20 bg-pink-300 opacity-20 rounded-full left-1/2 top-1/4 animate-bubble-3"></div>
  </div>

  <div class="max-w-5xl mx-auto relative z-10">
    <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 dark:text-white mb-12">
      Education & Certifications
    </h2>

    <div class="space-y-10">
      
      {{-- Education Section --}}
      @if($educations->isNotEmpty())
        <div>
          <h3 class="text-2xl font-semibold text-gray-700 dark:text-white mb-4">Education</h3>
          <div class="space-y-6">
            @foreach($educations as $edu)
              <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow border-l-4 {{ 'border-' . ($edu->border_color ?? 'indigo') . '-500' }}">
                <h4 class="text-xl font-semibold text-gray-800 dark:text-white">{{ $edu->title }}</h4>
                <p class="text-gray-600 dark:text-gray-300">{{ $edu->institution }}</p>
                <p class="text-sm text-gray-500 dark:text-gray-400">{{ $edu->duration }}</p>

                @php
                  $highlights = is_array($edu->highlights) ? $edu->highlights : json_decode($edu->highlights, true);
                @endphp

                @if($highlights && is_array($highlights))
                  <ul class="list-disc list-inside text-sm text-gray-700 dark:text-gray-300 mt-2">
                    @foreach($highlights as $highlight)
                      <li>{{ $highlight }}</li>
                    @endforeach
                  </ul>
                @endif
              </div>
            @endforeach
          </div>
        </div>
      @endif

      {{-- Certifications Section --}}
      @if($certifications->isNotEmpty())
        <div>
          <h3 class="text-2xl font-semibold text-gray-700 dark:text-white mb-4">Certifications</h3>
          <div class="space-y-6">
            @foreach($certifications as $cert)
              <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow border-l-4 {{ 'border-' . ($cert->border_color ?? 'green') . '-500' }}">
                <h4 class="text-xl font-semibold text-gray-800 dark:text-white">{{ $cert->title }}</h4>
                <p class="text-gray-600 dark:text-gray-300">{{ $cert->institution }}</p>
                <p class="text-sm text-gray-500 dark:text-gray-400">{{ $cert->duration }}</p>

                @php
                  $highlights = is_array($cert->highlights) ? $cert->highlights : json_decode($cert->highlights, true);
                @endphp

                @if($highlights && is_array($highlights))
                  <ul class="list-disc list-inside text-sm text-gray-700 dark:text-gray-300 mt-2">
                    @foreach($highlights as $highlight)
                      <li>{{ $highlight }}</li>
                    @endforeach
                  </ul>
                @endif
              </div>
            @endforeach
          </div>
        </div>
      @endif

    </div>
  </div>
</section>
