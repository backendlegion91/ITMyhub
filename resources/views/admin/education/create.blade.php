@extends('admin.layouts.admin')

@section('content')

  <div class="bg-white p-6 rounded-lg shadow-md max-w-3xl mx-auto">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Add Education / Certification</h2>

    <form action="{{ route('admin.education.store') }}" method="POST">
      @csrf

      <!-- Title -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Title</label>
        <input type="text" name="title" value="{{ old('title') }}"
               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-purple-500 focus:border-purple-500" required>
        @error('title')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Institution -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Institution</label>
        <input type="text" name="institution" value="{{ old('institution') }}"
               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
        @error('institution')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Duration -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Duration</label>
        <input type="text" name="duration" value="{{ old('duration') }}"
               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
        @error('duration')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Highlights -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Highlights (One per line)</label>
        <textarea name="highlights"
                  class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" rows="4">{{ old('highlights') }}</textarea>
        @error('highlights')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Type -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Type</label>
        <select name="type"
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
          <option value="education" {{ old('type') == 'education' ? 'selected' : '' }}>Education</option>
          <option value="certification" {{ old('type') == 'certification' ? 'selected' : '' }}>Certification</option>
        </select>
        @error('type')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Border Color -->
      <div class="mb-6">
        <label class="block text-sm font-medium text-gray-700">Border Color (Tailwind e.g., indigo, green, pink)</label>
        <input type="text" name="border_color" value="{{ old('border_color') }}"
               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
        @error('border_color')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Submit -->
      <div class="flex justify-end">
        <a href="{{ route('admin.education.index') }}"
           class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-2 px-4 rounded mr-2">
          Cancel
        </a>
        <button type="submit"
                class="bg-purple-600 hover:bg-purple-700 text-white font-medium py-2 px-6 rounded shadow">
          Save
        </button>
      </div>
    </form>
  </div>



@endsection
