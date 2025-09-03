<footer class="bg-gradient-to-r from-blue-700 via-indigo-700 to-purple-800 text-white animate-fade-up">
  <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-3 gap-10 text-center md:text-left">

    <!-- About / Logo -->
    <div class="flex flex-col items-center md:items-start space-y-4">
      <div class="flex items-center justify-center space-x-3">
        <div class="bg-gradient-to-r from-purple-600 to-blue-500 rounded-full w-12 h-12 flex items-center justify-center font-bold text-lg shadow-md">
          BL
        </div>
        <div>
          <h1 class="text-2xl font-extrabold">Legion</h1>
          <p class="text-sm text-gray-300">Code With Power</p>
        </div>
      </div>
    </div>

    <!-- Quick Links -->
    <div>
      <h2 class="text-xl font-bold mb-4">Quick Links</h2>
      <ul class="space-y-2 text-gray-200 text-sm">
        <li><a href="#home" class="hover:underline hover:text-white transition">Home</a></li>
        <li><a href="#about" class="hover:underline hover:text-white transition">About</a></li>
        <li><a href="#projects" class="hover:underline hover:text-white transition">Projects</a></li>
        <li><a href="#skills" class="hover:underline hover:text-white transition">Skills</a></li>
        <li><a href="#contact" class="hover:underline hover:text-white transition">Contact</a></li>
      </ul>
    </div>

    <!-- Contact / Socials -->
    <div>
      <h2 class="text-xl font-bold mb-4">Get in Touch</h2>
      <p class="text-sm text-gray-200">📧 backendlegion91@gmail.com</p>
       <p class="text-sm text-gray-200">📞 +91 79960 49769</p>
      <div class="flex justify-center md:justify-start gap-4 mt-4">

        <!-- GitLab -->
        <a href="https://gitlab.com/sumanks1307" target="_blank" class="hover:scale-110 transition" aria-label="GitLab">
          <img src="https://cdn-icons-png.flaticon.com/512/5969/5969059.png" class="w-6 h-6" alt="GitLab" />
        </a>

        <!-- LinkedIn -->
        <a href="https://www.linkedin.com/in/suman-k-s-a55868184/" target="_blank" class="hover:scale-110 transition" aria-label="LinkedIn">
          <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" class="w-6 h-6" alt="LinkedIn" />
        </a>

        <!-- WhatsApp -->
        <a href="https://wa.me/7996049769" target="_blank" class="hover:scale-110 transition" aria-label="WhatsApp">
          <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" class="w-6 h-6" alt="WhatsApp" />
        </a>

        <!-- Twitter -->
        <a href="https://x.com/SumanKS81840" target="_blank" class="hover:scale-110 transition" aria-label="Twitter">
          <img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" class="w-6 h-6" alt="Twitter" />
        </a>

      </div>
    </div>
  </div>

  <!-- Footer Bottom -->
  <div class="text-center text-gray-300 text-sm py-4 border-t border-indigo-900">
    &copy; <span id="year"></span> Backend Legion. All rights reserved.
  </div>

  <!-- Year Script -->
  <script>
    document.getElementById('year').textContent = new Date().getFullYear();
  </script>
</footer>
