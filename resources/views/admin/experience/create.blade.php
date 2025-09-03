@extends('admin.layouts.admin')

@section('content')
  <div class="bg-white p-6 rounded-lg shadow-md max-w-3xl mx-auto">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Add New Experience</h2>

    <form action="{{ route('admin.experience.store') }}" method="POST">
      @csrf

      <!-- Title -->
      <div class="mb-4">
        <label class="block font-medium mb-1">Title</label>
        <input type="text" name="title" value="{{ old('title') }}" required
               class="w-full border-gray-300 rounded-md p-2 shadow-sm focus:ring-purple-500 focus:border-purple-500">
      </div>

      <!-- Company -->
      <div class="mb-4">
        <label class="block font-medium mb-1">Company</label>
        <input type="text" name="company" value="{{ old('company') }}" required
               class="w-full border-gray-300 rounded-md p-2 shadow-sm">
      </div>

      <!-- Location -->
      <div class="mb-4">
        <label class="block font-medium mb-1">Location</label>
        <input type="text" name="location" value="{{ old('location') }}"
               class="w-full border-gray-300 rounded-md p-2 shadow-sm">
      </div>

      <!-- Duration -->
      <div class="grid grid-cols-2 gap-4 mb-4">
        <div>
          <label class="block font-medium mb-1">From</label>
          <input type="text" name="from" value="{{ old('from') }}" placeholder="e.g., Jan 2022"
                 class="w-full border-gray-300 rounded-md p-2 shadow-sm">
        </div>
        <div>
          <label class="block font-medium mb-1">To</label>
          <input type="text" name="to" value="{{ old('to') }}" placeholder="e.g., Present"
                 class="w-full border-gray-300 rounded-md p-2 shadow-sm">
        </div>
      </div>

      <!-- Highlights -->
      <div class="mb-4">
        <label class="block font-medium mb-1">Highlights (comma separated)</label>
        <textarea name="highlights" rows="3"
                  class="w-full border-gray-300 rounded-md p-2 shadow-sm">{{ old('highlights') }}</textarea>
        <p class="text-sm text-gray-400">Example: Led team projects, Integrated PayU, Wrote unit tests</p>
      </div>

      <div class="mt-6">
        <button type="submit"
                class="bg-purple-600 hover:bg-purple-700 text-white font-medium py-2 px-4 rounded shadow">
          Save Experience
        </button>
        <a href="{{ route('admin.experience.index') }}" class="ml-4 text-sm text-gray-600 hover:underline">Cancel</a>
      </div>
    </form>
  </div>

@endsection
