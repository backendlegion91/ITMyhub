@extends('admin.layouts.admin')

@section('content')

  <!-- Main Content Area -->
  <!-- Page Title -->
  <div class="mb-6">
    <h1 class="text-2xl font-bold text-purple-700">Dashboard</h1>
    <p class="text-sm text-gray-500">Welcome back, Admin 👋</p>
  </div>

  <!-- Info Cards -->
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
    <div class="bg-white rounded-xl shadow-md p-4 border-l-4 border-pink-500">
      <h2 class="text-sm font-medium text-gray-500">Total Users</h2>
      <p class="mt-1 text-2xl font-bold text-purple-700">1,245</p>
    </div>

    <div class="bg-white rounded-xl shadow-md p-4 border-l-4 border-pink-500">
      <h2 class="text-sm font-medium text-gray-500">New Registrations</h2>
      <p class="mt-1 text-2xl font-bold text-purple-700">320</p>
    </div>

    <div class="bg-white rounded-xl shadow-md p-4 border-l-4 border-pink-500">
      <h2 class="text-sm font-medium text-gray-500">Revenue</h2>
      <p class="mt-1 text-2xl font-bold text-purple-700">₹58,200</p>
    </div>

    <div class="bg-white rounded-xl shadow-md p-4 border-l-4 border-pink-500">
      <h2 class="text-sm font-medium text-gray-500">Pending Tickets</h2>
      <p class="mt-1 text-2xl font-bold text-purple-700">14</p>
    </div>
  </div>

  <!-- Recent Table -->
  <div class="bg-white rounded-xl shadow-md p-6">
    <h3 class="text-lg font-semibold text-purple-700 mb-4">Recent Users</h3>
    <table class="w-full text-sm text-left">
      <thead class="text-gray-600 border-b">
        <tr>
          <th class="py-2">Name</th>
          <th class="py-2">Email</th>
          <th class="py-2">Status</th>
          <th class="py-2 text-right">Joined</th>
        </tr>
      </thead>
      <tbody>
        <tr class="hover:bg-pink-50">
          <td class="py-2">Ravi Kumar</td>
          <td class="py-2">ravi@example.com</td>
          <td class="py-2"><span class="text-green-600 font-medium">Active</span></td>
          <td class="py-2 text-right">June 12, 2025</td>
        </tr>
        <tr class="hover:bg-pink-50">
          <td class="py-2">Ayesha Patel</td>
          <td class="py-2">ayesha@example.com</td>
          <td class="py-2"><span class="text-yellow-600 font-medium">Pending</span></td>
          <td class="py-2 text-right">June 10, 2025</td>
        </tr>
        <tr class="hover:bg-pink-50">
          <td class="py-2">Sohan Das</td>
          <td class="py-2">sohan@example.com</td>
          <td class="py-2"><span class="text-red-600 font-medium">Suspended</span></td>
          <td class="py-2 text-right">June 9, 2025</td>
        </tr>
      </tbody>
    </table>
  </div>


@endsection