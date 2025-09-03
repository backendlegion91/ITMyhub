@extends('admin.layouts.admin')

@section('content')

<!-- Main Content Area -->

  <div class="bg-white p-6 rounded-lg shadow-md">
    <div class="flex justify-between items-center mb-4 border-b pb-2">
      <h2 class="text-xl font-semibold text-gray-800">Education & Certifications</h2>
      <a href="{{ route('admin.education.create') }}"
         class="bg-purple-600 hover:bg-purple-700 text-white font-medium py-2 px-4 rounded shadow text-sm">
        + Add New
      </a>
    </div>

    @if($educations->count())
      <div class="space-y-6">
        @foreach($educations as $edu)
          <div class="border border-gray-200 p-4 rounded-md shadow-sm bg-gray-50">
            <div class="flex justify-between items-start">
              <div>
                <h3 class="text-lg font-semibold text-gray-800">{{ $edu->title }}</h3>
                <p class="text-sm text-gray-600">{{ $edu->institution }} ({{ $edu->duration }})</p>
                <p class="text-sm text-gray-500 mt-1 capitalize">Type: <span class="font-medium">{{ $edu->type }}</span></p>
                @if(is_array($edu->highlights))
                  <ul class="list-disc list-inside text-sm text-gray-700 mt-2">
                    @foreach($edu->highlights as $highlight)
                      <li>{{ $highlight }}</li>
                    @endforeach
                  </ul>
                @endif
              </div>
              <div class="space-x-2 mt-1">
                <a href="{{ route('admin.education.edit', $edu->id) }}"
                   class="inline-block bg-yellow-400 hover:bg-yellow-500 text-white font-medium py-1 px-3 rounded shadow text-sm">
                  Edit
                </a>

                {{-- <form action="{{ route('admin.education.destroy', $edu->id) }}" method="POST" class="inline-block"
                      onsubmit="return confirm('Are you sure you want to delete this entry?');">
                  @csrf
                  @method('DELETE')
                  <button type="submit"
                          class="bg-red-500 hover:bg-red-600 text-white font-medium py-1 px-3 rounded shadow text-sm">
                    Delete
                  </button>
                </form> --}}
              </div>
            </div>
          </div>
        @endforeach
      </div>
    @else
      <p class="text-gray-500 italic">No education or certification entries found.</p>
    @endif
  </div>


@endsection
