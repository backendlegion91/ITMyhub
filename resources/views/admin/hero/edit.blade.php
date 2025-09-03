@extends('admin.layouts.admin')

@section('content')

  <!-- Header -->
  <div class="mb-6">
    <h1 class="text-2xl font-bold text-purple-700">Edit Hero Section</h1>
    <p class="text-sm text-gray-500">Update the homepage hero section content below.</p>
  </div>

  <!-- Form Card -->
  <div class="bg-white rounded-xl shadow-md p-6 max-w-2xl mx-auto">
    <form action="{{ route('admin.hero.update', $hero->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <!-- Initials -->
      <div class="mb-5">
        <label for="initials" class="block text-sm font-medium text-gray-700 mb-1">Initials</label>
        <input type="text" name="initials" id="initials" value="{{ old('initials', $hero->initials) }}"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500 text-sm">
        @error('initials')
          <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Name -->
      <div class="mb-5">
        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
        <input type="text" name="name" id="name" value="{{ old('name', $hero->name) }}"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500 text-sm">
        @error('name')
          <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Title -->
      <div class="mb-5">
        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Professional Title</label>
        <input type="text" name="title" id="title" value="{{ old('title', $hero->title) }}"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500 text-sm">
        @error('title')
          <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Resume Upload -->
      <div class="mb-5">
        <label for="resume" class="block text-sm font-medium text-gray-700 mb-1">Resume (PDF)</label>
        <input type="file" name="resume" id="resume"
          class="w-full text-sm text-gray-700 file:bg-purple-100 file:text-purple-700 file:px-4 file:py-2 file:rounded-md file:border-0 hover:file:bg-purple-200">
        @if($hero->resume_path)
          <p class="text-sm mt-2 text-blue-600">
            <a href="{{ asset('storage/' . $hero->resume_path) }}" target="_blank" class="underline">View current resume</a>
          </p>
        @endif
        @error('resume')
          <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Submit Button -->
      <div class="mt-6">
        <button type="submit"
          class="bg-purple-600 hover:bg-purple-700 text-white font-semibold px-6 py-2 rounded-lg shadow-sm transition duration-300">
          Update Hero Section
        </button>
      </div>
    </form>
  </div>

@endsection
