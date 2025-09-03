@extends('admin.layouts.admin')

@section('content')

<!-- Main Content Area -->

  <div class="bg-white p-6 rounded-lg shadow-md">
    <div class="flex justify-between items-center mb-4 border-b pb-2">
      <h2 class="text-xl font-semibold text-gray-800">Skills</h2>
      <a href="{{ route('admin.skills.create') }}"
         class="bg-purple-600 hover:bg-purple-700 text-white font-medium py-2 px-4 rounded shadow text-sm">
        + Add Skill
      </a>
    </div>

    @if($skills->count())
      <table class="w-full table-auto text-sm">
        <thead>
          <tr class="bg-gray-100 text-left text-gray-700">
            <th class="px-4 py-2">#</th>
            <th class="px-4 py-2">Category</th>
            <th class="px-4 py-2">Name</th>
            <th class="px-4 py-2">Icon</th>
            <th class="px-4 py-2">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($skills as $index => $skill)
          <tr class="border-b hover:bg-gray-50">
            <td class="px-4 py-2">{{ $index + 1 }}</td>
            <td class="px-4 py-2">{{ $skill->category }}</td>
            <td class="px-4 py-2">{{ $skill->name }}</td>
            <td class="px-4 py-2">{{ $skill->icon }}</td>
            <td class="px-4 py-2 space-x-2">
              <a href="{{ route('admin.skills.edit', $skill->id) }}"
                 class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-xs">Edit</a>
              {{-- <form action="{{ route('admin.skills.destroy', $skill->id) }}" method="POST" class="inline-block"
                    onsubmit="return confirm('Are you sure?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">
                  Delete
                </button>
              </form> --}}
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    @else
      <p class="text-gray-500 italic">No skills added yet.</p>
    @endif
  </div>


@endsection
