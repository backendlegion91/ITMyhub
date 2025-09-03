<section id="contact" class="relative py-20 px-6 overflow-hidden">
  <!-- Animated Bubbles -->
  <div class="absolute inset-0 -z-10">
    <div class="absolute w-32 h-32 bg-indigo-300 opacity-20 rounded-full left-10 top-10 animate-bubble-1"></div>
    <div class="absolute w-24 h-24 bg-purple-300 opacity-20 rounded-full right-10 bottom-10 animate-bubble-2"></div>
    <div class="absolute w-20 h-20 bg-pink-300 opacity-20 rounded-full left-1/2 top-1/4 animate-bubble-3"></div>
  </div>

  <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 relative z-10">
    <!-- Contact Info -->
    <div class="space-y-6">
      <h2 class="text-4xl font-bold text-gray-800">Contact Me</h2>
      <p class="text-gray-600">I’d love to hear from you! Whether it’s a project, a question, or just to say hi.</p>

      <!-- Contact Form -->
      <form action="{{ route('contact.send') }}" method="POST" class="grid gap-4 bg-white shadow-lg rounded-xl p-6">
        @csrf
        <input type="text" name="name" placeholder="Your Name" required
               class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" />
        <input type="email" name="email" placeholder="Your Email" required
               class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" />
        <textarea name="message" rows="4" placeholder="Your Message" required
                  class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
        <button type="submit"
                class="bg-blue-600 text-white py-3 px-6 rounded-xl hover:bg-blue-700 transition">
          Send Message
        </button>
      </form>

      @if(session('success'))
        <div class="mt-4 p-4 bg-green-100 text-green-700 rounded-lg">
          {{ session('success') }}
        </div>
      @endif

      <!-- Social Media Icons -->
      <div class="flex items-center space-x-4 pt-4 animate-float">
        @php
          $socials = [
            ['url' => 'https://gitlab.com/sumanks1307', 'icon' => 'https://cdn-icons-png.flaticon.com/512/5969/5969059.png', 'alt' => 'GitLab'],
            ['url' => 'https://www.linkedin.com/in/suman-k-s-a55868184/', 'icon' => 'https://cdn-icons-png.flaticon.com/512/174/174857.png', 'alt' => 'LinkedIn'],
            ['url' => 'https://x.com/SumanKS81840', 'icon' => 'https://cdn-icons-png.flaticon.com/512/733/733579.png', 'alt' => 'Twitter'],
            ['url' => 'https://wa.me/7996049769', 'icon' => 'https://cdn-icons-png.flaticon.com/512/733/733585.png', 'alt' => 'WhatsApp'],
          ];
        @endphp
        @foreach($socials as $s)
          <a href="{{ $s['url'] }}" target="_blank" rel="noopener" class="bg-white rounded-full p-2 shadow hover:scale-110 transition" aria-label="{{ $s['alt'] }}">
            <img src="{{ $s['icon'] }}" alt="{{ $s['alt'] }}" class="w-6 h-6" />
          </a>
        @endforeach
      </div>
    </div>

    <!-- Google Map -->
    <div class="rounded-2xl overflow-hidden">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3890.619465010528!2d77.5946!3d12.9716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670a1c631fb%3A0xa3c168dfd9c5f26b!2sBangalore%2C%20India!5e0!3m2!1sen!2sin!4v1629794408245!5m2!1sen!2sin"
        class="w-full h-96 border-0" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
</section>
