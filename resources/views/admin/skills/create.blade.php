@extends('admin.layouts.admin')

@section('content')

<!-- Main Content Area -->

  <div class="bg-white p-6 rounded-lg shadow-md max-w-3xl mx-auto">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6 border-b pb-2">Add New Skill</h2>

    <form action="{{ route('admin.skills.store') }}" method="POST">
      @csrf

      <!-- Category -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Category</label>
        <select name="category" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
          <option value="">-- Select Category --</option>
          <option value="Programming Languages">Programming Languages</option>
          <option value="Frameworks">Frameworks</option>
          <option value="Tools & Platforms">Tools & Platforms</option>
        </select>
        @error('category')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Skill Name -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Skill Name</label>
        <input type="text" name="name" value="{{ old('name') }}"
               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
        @error('name')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Icon (emoji or class name) -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Icon (Emoji or FontAwesome class)</label>
        <input type="text" name="icon" value="{{ old('icon') }}"
               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
        @error('icon')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Submit Button -->
      <div class="mt-6">
        <button type="submit"
                class="bg-purple-600 hover:bg-purple-700 text-white font-medium py-2 px-4 rounded shadow">
          Save Skill
        </button>
        <a href="{{ route('admin.skills.index') }}"
           class="ml-4 text-sm text-gray-600 hover:underline">Cancel</a>
      </div>

    </form>
  </div>



@endsection
