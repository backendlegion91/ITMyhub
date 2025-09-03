@extends('admin.layouts.admin')

@section('content')

<!-- Main Content Area -->

  <div class="bg-white p-6 rounded-lg shadow-md">
    <div class="flex justify-between items-center mb-4 border-b pb-2">
      <h2 class="text-xl font-semibold text-gray-800">Projects</h2>
      <a href="{{ route('admin.project.create') }}"
         class="bg-purple-600 hover:bg-purple-700 text-white font-medium py-2 px-4 rounded shadow text-sm">
        + Add New
      </a>
    </div>

    @if($projects->count())
      <div class="space-y-6">
        @foreach($projects as $project)
          <div class="border border-gray-200 p-4 rounded-md shadow-sm bg-gray-50">
            <div class="flex justify-between items-start">
              <div class="w-full">
                <h3 class="text-lg font-semibold text-gray-800">{{ $project->title }}</h3>
                <p class="text-sm text-gray-600 mt-1"><strong>Tech Stack:</strong> {{ $project->tech_stack }}</p>
                <p class="text-sm text-gray-500 mt-1">{{ $project->description }}</p>

                <div class="flex flex-wrap gap-3 mt-3 text-sm">
                  @if($project->github_url)
                    <a href="{{ $project->github_url }}" class="text-blue-600 underline" target="_blank">GitHub</a>
                  @endif
                  @if($project->demo_url)
                    <a href="{{ $project->demo_url }}" class="text-green-600 underline" target="_blank">Live Demo</a>
                  @endif
                </div>

                @if($project->image)
                  <div class="mt-3">
                    <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full max-w-sm h-auto rounded shadow">
                  </div>
                @endif
              </div>

              <div class="space-x-2 mt-1 text-nowrap">
                <a href="{{ route('admin.project.edit', $project->id) }}"
                   class="inline-block bg-yellow-400 hover:bg-yellow-500 text-white font-medium py-1 px-3 rounded shadow text-sm">
                  Edit
                </a>

                {{-- <form action="{{ route('admin.project.destroy', $project->id) }}" method="POST" class="inline-block"
                      onsubmit="return confirm('Are you sure you want to delete this project?');">
                  @csrf
                  @method('DELETE')
                  <button type="submit"
                          class="bg-red-500 hover:bg-red-600 text-white font-medium py-1 px-3 rounded shadow text-sm">
                    Delete
                  </button>
                </form> --}}
              </div>
            </div>
          </div>
        @endforeach
      </div>
    @else
      <p class="text-gray-500 italic">No projects found.</p>
    @endif
  </div>


@endsection
