@php 
  use App\Models\Project;
  $projects = Project::latest()->get();
@endphp

<section id="projects" class="relative py-20 px-6 overflow-hidden">

  <!-- Animated Bubbles -->
  <div class="absolute inset-0 -z-10">
    <div class="absolute w-32 h-32 bg-indigo-300 opacity-20 rounded-full left-10 top-10 animate-bubble-1"></div>
    <div class="absolute w-24 h-24 bg-purple-300 opacity-20 rounded-full right-10 bottom-10 animate-bubble-2"></div>
    <div class="absolute w-20 h-20 bg-pink-300 opacity-20 rounded-full left-1/2 top-1/4 animate-bubble-3"></div>
  </div>

  <div class="max-w-6xl mx-auto text-center relative z-10">
    <h2 class="text-3xl md:text-4xl font-bold mb-12 text-gray-800 dark:text-white">Projects</h2>

    @if($projects->count())
      <!-- Swiper -->
      <div class="swiper projects-swiper">
        <div class="swiper-wrapper">

          @foreach($projects as $project)
            <div class="swiper-slide">
              <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg overflow-hidden mx-4 transition duration-300 hover:shadow-2xl">
                <img src="{{ $project->image ? asset('storage/' . $project->image) : 'https://via.placeholder.com/600x300' }}"
                     alt="{{ $project->title }}"
                     class="w-full h-56 object-cover">

                <div class="p-6 text-left">
                  <h3 class="text-xl font-semibold text-indigo-700 dark:text-indigo-300 mb-2">
                    {{ $project->title }}
                  </h3>

                  <p class="text-gray-700 dark:text-gray-300 mb-4">
                    {{ $project->description }}
                  </p>

                  <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">
                    <strong>Tech Stack:</strong> {{ $project->tech_stack }}
                  </p>

                  <div class="flex gap-4 text-sm">
                    @if($project->github_url)
                      <a href="{{ $project->github_url }}" class="text-blue-600 hover:underline" target="_blank">GitHub</a>
                    @endif
                    @if($project->demo_url)
                      <a href="{{ $project->demo_url }}" class="text-green-600 hover:underline" target="_blank">Live Demo</a>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          @endforeach

        </div>
        <!-- Swiper Pagination -->
        <div class="swiper-pagination mt-6"></div>
      </div>
    @else
      <p class="text-gray-500 text-center mt-8">No projects available at the moment.</p>
    @endif
  </div>
</section>
