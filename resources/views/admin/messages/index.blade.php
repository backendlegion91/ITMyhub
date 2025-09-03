@extends('admin.layouts.admin')
@section('content')


    {{-- <div class="bg-white p-6 rounded-lg shadow-md">
  <div class="flex justify-between items-center mb-4 border-b pb-2"> --}}
      <h2 class="text-2xl font-semibold mb-4">Contact Messages</h2>

  @if(session('success'))
    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">{{ session('success') }}</div>
  @endif

  <form method="GET" action="{{ route('admin.messages.index') }}" class="mb-4">
    <input type="text" name="search" value="{{ request('search') }}"
           placeholder="Search by name, email, or message..."
           class="p-2 border border-gray-300 rounded w-full md:w-1/3">
  </form>

  <div class="bg-white shadow rounded-lg overflow-x-auto">
    <table class="min-w-full text-left">
      <thead>
        <tr class="bg-gray-100 text-gray-700">
          <th class="p-3">Name</th>
          <th class="p-3">Email</th>
          <th class="p-3">Message</th>
          <th class="p-3">Read?</th>
          <th class="p-3">Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($messages as $msg)
        <tr class="border-t {{ $msg->is_read ? 'bg-gray-50' : 'bg-white' }}">
          <td class="p-3">{{ $msg->name }}</td>
          <td class="p-3">{{ $msg->email }}</td>
          <td class="p-3">{{ Str::limit($msg->message, 40) }}</td>
          <td class="p-3">
            <form action="{{ route('admin.messages.toggleRead', $msg->id) }}" method="POST">
              @csrf @method('PATCH')
              <button type="submit"
                      class="px-2 py-1 text-xs rounded {{ $msg->is_read ? 'bg-green-200 text-green-800' : 'bg-red-200 text-red-800' }}">
                {{ $msg->is_read ? 'Read' : 'Unread' }}
              </button>
            </form>
          </td>
          <td class="p-3 space-x-2">
            <!-- Reply Form -->
            <form action="{{ route('admin.messages.reply', $msg->id) }}" method="POST" class="inline-flex gap-2">
              @csrf
              <input type="text" name="reply_message" placeholder="Type reply..."
                     class="border px-2 py-1 rounded text-sm w-40" required>
              <button class="bg-blue-600 text-white px-3 py-1 text-sm rounded">Send</button>
            </form>

            <!-- Delete -->
            <form action="{{ route('admin.messages.destroy', $msg->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Delete this message?');">
              @csrf @method('DELETE')
              <button class="text-red-600 hover:underline text-sm">Delete</button>
            </form>
          </td>
        </tr>
        @empty
        <tr><td colspan="5" class="p-4 text-center text-gray-500">No messages found.</td></tr>
        @endforelse
      </tbody>
    </table>
  </div>

  <div class="mt-4">{{ $messages->withQueryString()->links() }}</div>


@endsection
