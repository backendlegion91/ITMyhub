@extends('admin.layouts.admin')

@section('content')
  <div class="mb-6">
    <h1 class="text-2xl font-bold text-purple-700">Edit About Section</h1>
    <p class="text-sm text-gray-500">Update your About section content.</p>
  </div>

  <div class="bg-white p-6 rounded-lg shadow-md max-w-2xl">

    {{-- Validation Errors --}}
    @if ($errors->any())
      <div class="mb-4 text-red-600">
        <ul class="list-disc pl-4">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('admin.about.update', $about->id) }}" method="POST">
      @csrf
      @method('PUT')

      <!-- Initials -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Initials</label>
        <input type="text" name="initials" value="{{ old('initials', $about->initials) }}"
               class="w-full border border-gray-300 rounded-md p-2 focus:ring-purple-500 focus:border-purple-500" required>
      </div>

      <!-- Name -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Name</label>
        <input type="text" name="name" value="{{ old('name', $about->name) }}"
               class="w-full border border-gray-300 rounded-md p-2 focus:ring-purple-500 focus:border-purple-500" required>
      </div>

      <!-- Title -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Title</label>
        <input type="text" name="title" value="{{ old('title', $about->title) }}"
               class="w-full border border-gray-300 rounded-md p-2 focus:ring-purple-500 focus:border-purple-500" required>
      </div>

      <!-- Experience -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Experience (in years)</label>
        <input type="number" name="experience" value="{{ old('experience', $about->experience) }}"
               class="w-full border border-gray-300 rounded-md p-2 focus:ring-purple-500 focus:border-purple-500" required>
      </div>

      <!-- Bio -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Bio</label>
        <input type="text" name="bio" value="{{ old('bio', $about->bio) }}"
               class="w-full border border-gray-300 rounded-md p-2 focus:ring-purple-500 focus:border-purple-500" required>
      </div>

      <!-- Additional Info -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Additional Info</label>
        <textarea id="additional_info" name="additional_info" rows="6"
                  class="w-full border border-gray-300 rounded-md p-2 focus:ring-purple-500 focus:border-purple-500">{{ old('additional_info', $about->additional_info) }}</textarea>
      </div>

      <!-- Skills -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Skills</label>
        <input id="skillInput" name="skill"
               value="{{ old('skill', implode(',', json_decode($about->skills, true) ?? [])) }}"
               class="w-full border border-gray-300 rounded-md p-2 focus:ring-purple-500 focus:border-purple-500">
      </div>

      <!-- Submit -->
      <div class="mt-6">
        <button type="submit"
                class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-2 rounded shadow">
          Update About Section
        </button>
      </div>
    </form>
  </div>

@endsection

@push('scripts')
<!-- CKEditor 5 -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<!-- Tagify -->
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
<link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" />

<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Initialize CKEditor
    const editorEl = document.querySelector('#additional_info');
    if (editorEl) {
      ClassicEditor
        .create(editorEl)
        .catch(error => console.error('CKEditor Error:', error));
    } else {
      console.warn('Element #additional_info not found!');
    }

    // Initialize Tagify
    const skillInput = document.querySelector('#skillInput');
    if (skillInput) {
      new Tagify(skillInput);
    } else {
      console.warn('Element #skillInput not found!');
    }
  });
</script>
@endpush
