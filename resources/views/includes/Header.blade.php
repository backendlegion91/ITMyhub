<!-- HEADER -->
<header class="bg-gradient-to-r from-indigo-500 via-purple-600 to-blue-500 text-white shadow-md sticky top-0 z-50 animate-slide-in-top">
  <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
    <!-- Logo -->
    <h1 class="text-2xl font-bold">Legion</h1>

    <!-- Mobile Hamburger -->
    <button class="md:hidden focus:outline-none" onclick="toggleMenu()" aria-label="Toggle Menu">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
           stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
        <path d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>

    <!-- Desktop Navigation -->
    <nav class="hidden md:flex space-x-8 text-lg font-medium">
      <a href="#home" class="nav-underline">Home</a>
      <a href="#about" class="nav-underline">About</a>
      <a href="#projects" class="nav-underline">Projects</a>
      <a href="#skills" class="nav-underline">Skills</a>
      <a href="#contact" class="nav-underline">Contact</a>
    </nav>

    <!-- Desktop CTA Button -->
    <div class="hidden md:block">
      <a href="#contact" class="bg-white text-blue-700 font-semibold px-4 py-2 rounded-xl shadow hover:scale-105 transition duration-300">
        Hire Me
      </a>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobileMenu" class="hidden md:hidden px-6 pb-4 animate-fade-up">
    <ul class="flex flex-col space-y-4 text-white text-lg">
      <li><a href="#home" class="nav-underline" onclick="toggleMenu()">Home</a></li>
      <li><a href="#about" class="nav-underline" onclick="toggleMenu()">About</a></li>
      <li><a href="#projects" class="nav-underline" onclick="toggleMenu()">Projects</a></li>
      <li><a href="#skills" class="nav-underline" onclick="toggleMenu()">Skills</a></li>
      <li><a href="#contact" class="nav-underline" onclick="toggleMenu()">Contact</a></li>
      <li>
        <a href="#contact" class="bg-white text-blue-700 px-4 py-2 rounded-xl shadow hover:bg-gray-100 transition duration-300" onclick="toggleMenu()">
          Hire Me
        </a>
      </li>
    </ul>
  </div>
</header>

<!-- Toggle Menu Script -->
<script>
  function toggleMenu() {
    const menu = document.getElementById('mobileMenu');
    menu.classList.toggle('hidden');
  }
</script>
