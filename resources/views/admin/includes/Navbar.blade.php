<header class="bg-white shadow border-b border-gray-200 fixed top-0 inset-x-0 z-50">
  <div class="max-w-full mx-auto px-6 py-3 flex items-center justify-between">

    <!-- Logo and Title -->
    <div class="flex items-center space-x-3">
      {{-- <img src="{{ asset('images/logo.png') }}" class="h-10 w-10 rounded-full bg-pink-500 p-1 shadow" alt="Logo" /> --}}
      <h1 class="text-xl font-extrabold text-purple-600 tracking-wide">Legion</h1>
    </div>

    <!-- Right Nav -->
    <div class="flex items-center space-x-4">

      <!-- Notifications -->
      <button aria-label="Notifications" class="relative text-pink-500 hover:text-purple-600 transition duration-150 ease-in-out">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.4-1.4M19 13V8a7 7 0 10-14 0v5l-1.4 1.4A1 1 0 005 18h14a1 1 0 00.7-1.7L19 13z" />
        </svg>
        <span class="absolute top-0 right-0 block h-2 w-2 rounded-full ring-2 ring-white bg-pink-500 animate-ping"></span>
      </button>

      <!-- User Menu -->
      <div class="relative">
        <button id="dropdownBtn" aria-haspopup="true" aria-expanded="false" class="flex items-center space-x-2 focus:outline-none focus:ring-2 focus:ring-pink-400 rounded px-2 py-1 transition hover:bg-gray-100">
          {{-- <img src="{{ asset('images/admin-avatar.png') }}" class="h-8 w-8 rounded-full border-2 border-pink-400" alt="Admin Avatar" /> --}}
          <span class="text-sm text-gray-700 font-semibold hidden sm:block">Admin</span>
          <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>

        <!-- Dropdown -->
        <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg z-50">
          <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-pink-600 transition">
            Logout
          </a>
        </div>

        <!-- Logout Form -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
          @csrf
        </form>
      </div>
    </div>
  </div>
</header>

<!-- JavaScript for Dropdown -->
<script>
  const dropdownBtn = document.getElementById('dropdownBtn');
  const dropdownMenu = document.getElementById('dropdownMenu');

  dropdownBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    dropdownMenu.classList.toggle('hidden');
    dropdownBtn.setAttribute('aria-expanded', dropdownMenu.classList.contains('hidden') ? 'false' : 'true');
  });

  window.addEventListener('click', (e) => {
    if (!dropdownMenu.contains(e.target) && !dropdownBtn.contains(e.target)) {
      dropdownMenu.classList.add('hidden');
      dropdownBtn.setAttribute('aria-expanded', 'false');
    }
  });
</script>
