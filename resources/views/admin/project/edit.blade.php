@extends('admin.layouts.admin')

@section('content')


  <div class="bg-white p-6 rounded-lg shadow-md max-w-3xl mx-auto">
    <div class="flex justify-between items-center mb-6 border-b pb-3">
      <h2 class="text-xl font-semibold text-gray-800">Edit Project</h2>
      <a href="{{ route('admin.project.index') }}"
         class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-1 px-3 rounded text-sm shadow">
        ← Back
      </a>
    </div>

    @if ($errors->any())
      <div class="mb-4">
        <ul class="list-disc list-inside text-sm text-red-500">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('admin.project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <!-- Title -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Title</label>
        <input type="text" name="title" value="{{ old('title', $project->title) }}"
               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500" required>
      </div>

      <!-- Description -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Description</label>
        <textarea name="description" rows="4"
                  class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500"
                  required>{{ old('description', $project->description) }}</textarea>
      </div>

      <!-- Tech Stack -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Tech Stack</label>
        <input type="text" name="tech_stack" value="{{ old('tech_stack', $project->tech_stack) }}"
               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500">
      </div>

      <!-- GitHub URL -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">GitHub URL</label>
        <input type="url" name="github_url" value="{{ old('github_url', $project->github_url) }}"
               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500">
      </div>

      <!-- Live Demo URL -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Live Demo URL</label>
        <input type="url" name="demo_url" value="{{ old('demo_url', $project->demo_url) }}"
               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500">
      </div>

      <!-- Image -->
      <div class="mb-6">
        <label class="block text-sm font-medium text-gray-700">Project Image</label>
        <input type="file" name="image" class="mt-1 block w-full text-sm text-gray-700">
        @if ($project->image)
          <img src="{{ asset('storage/' . $project->image) }}" alt="Current Image"
               class="mt-3 w-64 h-40 object-cover rounded border border-gray-300">
        @endif
      </div>

      <!-- Submit -->
      <div class="text-right">
        <button type="submit"
                class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-6 rounded shadow">
          Update Project
        </button>
      </div>

    </form>
  </div>



@endsection
