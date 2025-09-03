@php
    use App\Models\Experience;
    use Carbon\Carbon;

    $experiences = Experience::latest()->get();
@endphp

  <section id="experience" class="relative py-20 px-6 overflow-hidden">

  <!-- Animated Bubbles -->
  <div class="absolute inset-0 -z-10 pointer-events-none">
    <div class="absolute w-32 h-32 bg-indigo-300 opacity-20 rounded-full left-10 top-10 animate-bubble-1"></div>
    <div class="absolute w-24 h-24 bg-purple-300 opacity-20 rounded-full right-10 bottom-10 animate-bubble-2"></div>
    <div class="absolute w-20 h-20 bg-pink-300 opacity-20 rounded-full left-1/2 top-1/4 animate-bubble-3"></div>
  </div>

  <div class="max-w-5xl mx-auto relative z-10">
    <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 dark:text-white mb-12">
      Experience
    </h2>

    <div class="space-y-10">
      @forelse ($experiences as $exp)
        @php
            $from = Carbon::parse($exp->from)->format('M Y');
            $to = $exp->to ? Carbon::parse($exp->to)->format('M Y') : 'Present';
            $color = in_array($exp->color, ['blue', 'green', 'red', 'purple', 'pink', 'indigo', 'yellow']) ? $exp->color : 'blue';

            $highlights = is_array($exp->highlights)
                ? $exp->highlights
                : preg_split("/\r\n|\n|\r/", trim($exp->highlights));
        @endphp

        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow border-l-4 border-{{ $color }}-500">
          <h3 class="text-xl font-semibold text-gray-800 dark:text-white">{{ $exp->title }}</h3>
          <p class="text-gray-600 dark:text-gray-300">{{ $exp->company }}</p>
          <p class="text-gray-600 dark:text-gray-300">{{ $exp->location }}</p>
          <p class="text-sm text-gray-500 dark:text-gray-400">{{ $from }} - {{ $to }}</p>

       @if (!empty($highlights))
  <p class="mt-3 text-gray-700 dark:text-gray-300 text-sm leading-relaxed">
    • {{ is_array($highlights) ? implode(' ', $highlights) : $highlights }}
  </p>
@endif
        </div>

      @empty
        <p class="text-center text-gray-500 dark:text-gray-400">No experiences found.</p>
      @endforelse
    </div>
  </div>
</section>
