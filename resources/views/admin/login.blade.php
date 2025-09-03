<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login | Legion</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
  </style>
</head>
<body class="bg-gradient-to-br from-indigo-100 via-purple-100 to-blue-100 min-h-screen flex items-center justify-center">

  <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8 space-y-6">
    <div class="text-center">
      <h1 class="text-3xl font-bold text-indigo-700">Welcome Back</h1>
      <p class="text-gray-500 text-sm mt-1">Sign in to your account</p>
    </div>

    @if (session('error'))
      <div class="bg-red-100 text-red-700 px-4 py-2 rounded text-sm">
        {{ session('error') }}
      </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
      @csrf

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required
          class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none">
        @error('email')
          <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" name="password" id="password" required
          class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none">
        @error('password')
          <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Remember Me -->
      <div class="flex items-center justify-between">
        <label class="inline-flex items-center">
          <input type="checkbox" name="remember" class="h-4 w-4 text-indigo-600 border-gray-300 rounded" />
          <span class="ml-2 text-sm text-gray-600">Remember me</span>
        </label>
        <a href="#" class="text-sm text-indigo-600 hover:underline">Forgot password?</a>
      </div>

      <!-- Submit -->
      <div>
        <button type="submit"
          class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 rounded-lg transition duration-200">
          Login
        </button>
      </div>
    </form>

    <p class="text-center text-sm text-gray-600">
      Don't have an account?
      <a href="#" class="text-indigo-600 hover:underline">Register</a>
    </p>
  </div>

</body>
</html>
