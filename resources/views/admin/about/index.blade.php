@extends('admin.layouts.admin')

@section('content')

<!-- Main Content Area -->

  <div class="bg-white p-6 rounded-lg shadow-md">
    <div class="flex justify-between items-center mb-4 border-b pb-2">
      <h2 class="text-xl font-semibold text-gray-800">About Section</h2>
      <a href="{{ route('admin.about.create') }}"
         class="bg-purple-600 hover:bg-purple-700 text-white font-medium py-2 px-4 rounded shadow text-sm">
        + Add About
      </a>
    </div>

    @if($about)
      <div class="space-y-4">
        <div><span class="font-medium text-gray-600">Initials:</span> {{ $about->initials }}</div>
        <div><span class="font-medium text-gray-600">Name:</span> {{ $about->name }}</div>
        <div><span class="font-medium text-gray-600">Title:</span> {{ $about->title }}</div>
        <div><span class="font-medium text-gray-600">Experience:</span> {{ $about->experience }} years</div>
        <div><span class="font-medium text-gray-600">Bio:</span> {{ $about->bio }}</div>

        <div>
          <span class="font-medium text-gray-600">Additional Info:</span>
          <div class="prose max-w-none">{!! $about->additional_info !!}</div>
        </div>

        <div>
          <span class="font-medium text-gray-600">Skills:</span>
          @php
            $skills = is_array($about->skills) ? $about->skills : json_decode($about->skills, true);
          @endphp
          @if($skills && is_array($skills))
            <div class="flex flex-wrap gap-2 mt-1">
              @foreach ($skills as $skill)
                <span class="bg-purple-100 text-purple-800 px-3 py-1 text-sm rounded-full">{{ $skill }}</span>
              @endforeach
            </div>
          @else
            <span class="text-gray-400 italic">No skills added</span>
          @endif
        </div>

        <a href="{{ route('admin.about.edit', $about->id) }}"
           class="inline-block bg-yellow-400 hover:bg-yellow-500 text-white font-medium py-2 px-4 rounded shadow">
          Edit
        </a>
      </div>
    @else
      <p class="text-gray-500 italic">No About Section added yet.</p>
    @endif
  </div>


@endsection
