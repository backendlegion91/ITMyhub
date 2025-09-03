@extends('admin.layouts.admin')

@section('content')

<!-- Main Content Area -->
  <!-- Page Title -->
  <div class="mb-6">
    <h1 class="text-2xl font-bold text-purple-700">Add Hero Section</h1>
    <p class="text-sm text-gray-500">Fill out the form below to set your Hero section content.</p>
  </div>

  <!-- Form Card -->
  <div class="bg-white p-6 rounded-lg shadow-md max-w-2xl">
    <form action="{{ route('admin.hero.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <!-- Initials -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Initials</label>
        <input type="text" name="initials" value="{{ old('initials') }}"
               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-purple-500 focus:border-purple-500" required>
        @error('initials')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Name -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Name</label>
        <input type="text" name="name" value="{{ old('name') }}"
               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-purple-500 focus:border-purple-500" required>
        @error('name')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Title -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Title</label>
        <input type="text" name="title" value="{{ old('title') }}"
               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-purple-500 focus:border-purple-500" required>
        @error('title')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Resume Upload -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Resume (PDF)</label>
        <input type="file" name="resume"
               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 bg-white file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:bg-purple-600 file:text-white hover:file:bg-purple-700">
        @error('resume')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Submit Button -->
      <div class="mt-6">
        <button type="submit"
                class="bg-purple-600 hover:bg-purple-700 text-white font-semibold px-6 py-2 rounded shadow">
          Save Hero Section
        </button>
      </div>

    </form>
  </div>


@endsection
