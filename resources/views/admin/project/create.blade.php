@extends('admin.layouts.admin')

@section('content')

  <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Add New Project</h2>

    <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
      @csrf

      <div>
        <label class="block font-medium">Project Title</label>
        <input type="text" name="title" value="{{ old('title') }}" required
               class="w-full border border-gray-300 p-2 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500">
      </div>

      <div>
        <label class="block font-medium">Description</label>
        <textarea name="description" rows="4"
                  class="w-full border border-gray-300 p-2 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500">{{ old('description') }}</textarea>
      </div>

      <div>
        <label class="block font-medium">Tech Stack</label>
        <input type="text" name="tech_stack" value="{{ old('tech_stack') }}"
               class="w-full border border-gray-300 p-2 rounded-md shadow-sm">
      </div>

      <div>
        <label class="block font-medium">GitHub URL</label>
        <input type="url" name="github_url" value="{{ old('github_url') }}"
               class="w-full border border-gray-300 p-2 rounded-md shadow-sm">
      </div>

      <div>
        <label class="block font-medium">Live Demo URL</label>
        <input type="url" name="demo_url" value="{{ old('demo_url') }}"
               class="w-full border border-gray-300 p-2 rounded-md shadow-sm">
      </div>

      <div>
        <label class="block font-medium">Project Image</label>
        <input type="file" name="image"
               class="w-full border border-gray-300 p-2 rounded-md shadow-sm">
      </div>

      <div>
        <button type="submit"
                class="bg-purple-600 hover:bg-purple-700 text-white px-5 py-2 rounded-md shadow text-sm font-medium">
          Save Project
        </button>
      </div>
    </form>
  </div>

@endsection
