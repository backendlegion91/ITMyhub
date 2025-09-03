@extends('admin.layouts.admin')
@section('content')

  <h2 class="text-2xl font-semibold mb-4">Testimonials</h2>

  @if(session('success'))
    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">{{ session('success') }}</div>
  @endif

  <div class="flex justify-between items-center mb-4">
    <form method="GET" action="{{ route('admin.testimonials.index') }}">
      <input type="text" name="search" value="{{ request('search') }}"
             placeholder="Search by name or company..."
             class="p-2 border border-gray-300 rounded w-full md:w-72">
    </form>
    <a href="{{ route('admin.testimonials.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
      + Add Testimonial
    </a>
  </div>

  <div class="bg-white shadow rounded-lg overflow-x-auto">
    <table class="min-w-full text-left">
      <thead>
        <tr class="bg-gray-100 text-gray-700">
          <th class="p-3">Name</th>
          <th class="p-3">Role</th>
          <th class="p-3">Company</th>
          <th class="p-3">Message</th>
          <th class="p-3">Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($testimonials as $testimonial)
          <tr class="border-t bg-white hover:bg-gray-50">
            <td class="p-3 font-medium">{{ $testimonial->name }}</td>
            <td class="p-3">{{ $testimonial->role }}</td>
            <td class="p-3">{{ $testimonial->company ?? '-' }}</td>
            <td class="p-3">{{ Str::limit($testimonial->message, 60) }}</td>
            <td class="p-3 space-x-2">
              <a href="{{ route('admin.testimonials.edit', $testimonial->id) }}"
                 class="text-blue-600 hover:underline text-sm">Edit</a>

              {{-- <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST"
                    class="inline-block" onsubmit="return confirm('Are you sure you want to delete this testimonial?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-600 hover:underline text-sm">Delete</button>
              </form> --}}
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="5" class="p-4 text-center text-gray-500">No testimonials found.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>

  <div class="mt-4">
    {{ $testimonials->withQueryString()->links() }}
  </div>


@endsection
