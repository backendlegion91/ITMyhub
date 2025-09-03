@extends('admin.layouts.admin')

@section('content')
  <div class="mb-6">
    <h1 class="text-2xl font-bold text-purple-700">Add About Section</h1>
    <p class="text-sm text-gray-500">Fill out the form below to set your About section content.</p>
  </div>

  <div class="bg-white p-6 rounded-lg shadow-md max-w-2xl">
    <form action="{{ route('admin.about.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <!-- Initials -->
      <div class="mb-4">
        <label for="initials" class="block text-sm font-medium text-gray-700">Initials</label>
        <input type="text" id="initials" name="initials" value="{{ old('initials') }}"
               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-purple-500 focus:border-purple-500" required>
        @error('initials')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Name -->
      <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}"
               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-purple-500 focus:border-purple-500" required>
        @error('name')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Title -->
      <div class="mb-4">
        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}"
               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-purple-500 focus:border-purple-500" required>
        @error('title')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Experience -->
      <div class="mb-4">
        <label for="experience" class="block text-sm font-medium text-gray-700">Years of Experience</label>
        <input type="number" id="experience" name="experience" value="{{ old('experience') }}"
               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-purple-500 focus:border-purple-500" required>
        @error('experience')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Bio -->
      <div class="mb-4">
        <label for="bio" class="block text-sm font-medium text-gray-700">Bio</label>
        <input type="text" id="bio" name="bio" value="{{ old('bio') }}"
               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-purple-500 focus:border-purple-500" required>
        @error('bio')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Additional Info (CKEditor) -->
      <div class="mb-4">
        <label for="additional_info" class="block text-sm font-medium text-gray-700">Additional Info</label>
        <textarea id="additional_info" name="additional_info" rows="6"
                  class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-purple-500 focus:border-purple-500">{{ old('additional_info') }}</textarea>
        @error('additional_info')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Skills (Tagify) -->
      <div class="mb-4">
        <label for="skillInput" class="block text-sm font-medium text-gray-700">Skills</label>
        <input id="skillInput" name="skill[]" placeholder="Add skills..."
               class="tag-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-purple-500 focus:border-purple-500">
        @error('skill')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Submit Button -->
      <div class="mt-6">
        <button type="submit"
                class="bg-purple-600 hover:bg-purple-700 text-white font-semibold px-6 py-2 rounded shadow">
          Save About Section
        </button>
      </div>

    </form>
  </div>

@endsection

@push('scripts')
<!-- CKEditor 5 -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<!-- Tagify -->
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
<link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" />

<script>
    // Initialize CKEditor
    ClassicEditor
        .create(document.querySelector('#additional_info'))
        .catch(error => {
            console.error('CKEditor error:', error);
        });

    // Initialize Tagify
    var input = document.querySelector('#skillInput');
    new Tagify(input);
</script>
@endpush
