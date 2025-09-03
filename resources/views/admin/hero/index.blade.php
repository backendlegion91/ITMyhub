@extends('admin.layouts.admin')

@section('content')

<!-- Main Content Area -->

<!-- Hero Section -->
<div class="bg-white p-6 rounded-lg shadow-md">
  <div class="flex justify-between items-center mb-4 border-b pb-2">
    <h2 class="text-xl font-semibold text-gray-800">Hero Section</h2>
    <a href="{{ route('admin.hero.create') }}"
       class="bg-purple-600 hover:bg-purple-700 text-white font-medium py-2 px-4 rounded shadow text-sm">
      + Add Hero
    </a>
  </div>

  @if($hero)
    <div class="space-y-4">
      <div><span class="font-medium text-gray-600">Initials:</span> {{ $hero->initials }}</div>
      <div><span class="font-medium text-gray-600">Name:</span> {{ $hero->name }}</div>
      <div><span class="font-medium text-gray-600">Title:</span> {{ $hero->title }}</div>
      <div>
        <span class="font-medium text-gray-600">Resume:</span>
        @if($hero->resume_path)
          <a href="{{ asset('storage/' . $hero->resume_path) }}" target="_blank"
             class="text-blue-600 hover:underline">Download Resume</a>
        @else
          <span class="text-gray-400">No resume uploaded.</span>
        @endif
      </div>

      <a href="{{ route('admin.hero.edit', $hero->id) }}"
         class="inline-block bg-yellow-400 hover:bg-yellow-500 text-white font-medium py-2 px-4 rounded shadow">
        Edit
      </a>
    </div>
  @else
    <p class="text-gray-500 italic">No Hero Section added yet.</p>
  @endif
</div>



@endsection
