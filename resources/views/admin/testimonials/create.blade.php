@extends('admin.layouts.admin')
@section('content')


  <div class="max-w-3xl mx-auto bg-white shadow-md rounded-lg p-6">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Add New Testimonial</h2>

    @if ($errors->any())
      <div class="mb-4 bg-red-100 text-red-700 p-3 rounded">
        <ul class="list-disc list-inside text-sm">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('admin.testimonials.store') }}" method="POST" class="space-y-4">
      @csrf

      <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Name<span class="text-red-500">*</span></label>
        <input type="text" name="name" id="name" required value="{{ old('name') }}"
               class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500" />
      </div>

      <div>
        <label for="role" class="block text-sm font-medium text-gray-700">Role<span class="text-red-500">*</span></label>
        <input type="text" name="role" id="role" required value="{{ old('role') }}"
               class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500" />
      </div>

      <div>
        <label for="company" class="block text-sm font-medium text-gray-700">Company</label>
        <input type="text" name="company" id="company" value="{{ old('company') }}"
               class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500" />
      </div>

      <div>
        <label for="linkedin" class="block text-sm font-medium text-gray-700">LinkedIn URL</label>
        <input type="url" name="linkedin" id="linkedin" value="{{ old('linkedin') }}"
               class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500" />
      </div>

      <div>
        <label for="message" class="block text-sm font-medium text-gray-700">Message<span class="text-red-500">*</span></label>
        <textarea name="message" id="message" rows="5" required
                  class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500">{{ old('message') }}</textarea>
      </div>

      <div class="pt-4 flex justify-between">
        <a href="{{ route('admin.testimonials.index') }}" class="bg-gray-200 text-gray-700 px-4 py-2 rounded hover:bg-gray-300">Back</a>
        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Save Testimonial</button>
      </div>
    </form>
  </div>


@endsection
