@extends('admin.layouts.admin')

@section('content')
  <div class="bg-white p-6 rounded-lg shadow-md max-w-3xl mx-auto">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Edit Experience</h2>

    <form action="{{ route('admin.experience.update', $experience->id) }}" method="POST">
      @csrf
      @method('PUT')

      <!-- Title -->
      <div class="mb-4">
        <label class="block font-medium mb-1">Title</label>
        <input type="text" name="title" value="{{ old('title', $experience->title) }}" required
               class="w-full border-gray-300 rounded-md p-2 shadow-sm">
      </div>

      <!-- Company -->
      <div class="mb-4">
        <label class="block font-medium mb-1">Company</label>
        <input type="text" name="company" value="{{ old('company', $experience->company) }}" required
               class="w-full border-gray-300 rounded-md p-2 shadow-sm">
      </div>

      <!-- Location -->
      <div class="mb-4">
        <label class="block font-medium mb-1">Location</label>
        <input type="text" name="location" value="{{ old('location', $experience->location) }}"
               class="w-full border-gray-300 rounded-md p-2 shadow-sm">
      </div>

      <!-- Duration -->
      <div class="grid grid-cols-2 gap-4 mb-4">
        <div>
          <label class="block font-medium mb-1">From</label>
          <input type="text" name="from" value="{{ old('from', $experience->from) }}"
                 class="w-full border-gray-300 rounded-md p-2 shadow-sm">
        </div>
        <div>
          <label class="block font-medium mb-1">To</label>
          <input type="text" name="to" value="{{ old('to', $experience->to) }}"
                 class="w-full border-gray-300 rounded-md p-2 shadow-sm">
        </div>
      </div>

      <!-- Highlights -->
      <div class="mb-4">
        <label class="block font-medium mb-1">Highlights</label>
    <textarea name="highlights" rows="6"
          class="w-full border-gray-300 rounded-md p-2 shadow-sm">{{ old('highlights', is_array($experience->highlights) ? implode("\n", $experience->highlights) : $experience->highlights) }}</textarea>

     
                </div>

      <div class="mt-6">
        <button type="submit"
                class="bg-purple-600 hover:bg-purple-700 text-white font-medium py-2 px-4 rounded shadow">
          Update Experience
        </button>
        <a href="{{ route('admin.experience.index') }}" class="ml-4 text-sm text-gray-600 hover:underline">Cancel</a>
      </div>
    </form>
  </div>

@endsection
