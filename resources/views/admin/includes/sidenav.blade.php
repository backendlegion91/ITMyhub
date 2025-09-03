<aside class="fixed top-0 left-0 w-64 h-screen bg-white text-gray-800 shadow-lg z-40">
  <!-- Logo / Brand -->
  <div class="flex items-center justify-center h-16 border-b border-pink-400">
    {{-- <img src="{{ asset('images/logo.png') }}" class="w-10 h-10 bg-white p-1 rounded-full" /> --}}
    <span class="ml-2 text-xl font-bold">Legion</span>
  </div>

  <!-- Navigation -->
@php
  $menuItems = [
      ['name' => 'Dashboard', 'route' => route('admin.dashboard')],
      ['name' => 'Hero Content', 'route' => route('admin.hero.index')],
      ['name' => 'About Content', 'route' => route('admin.about.index')],
      ['name' => 'Education & Certifications', 'route' => route('admin.education.index')],
      ['name' => 'Skills', 'route' => route('admin.skills.index')],
      ['name' => 'Projects', 'route' => route('admin.project.index')],
      ['name' => 'Experience', 'route' => route('admin.experience.index')],
      ['name' => 'Messages', 'route' => route('admin.messages.index')],
      ['name' => 'Testimonials', 'route' => route('admin.testimonials.index')],
  ];
@endphp


<nav class="mt-4 px-4 space-y-2 text-sm">
  @foreach ($menuItems as $item)
    <a href="{{ $item['route'] }}"
       class="flex items-center space-x-3 px-3 py-2 rounded-md transition duration-200
       {{ request()->url() === $item['route'] ? 'bg-purple-100 text-purple-800 font-semibold' : 'hover:bg-purple-50 hover:text-purple-700' }}">

      {{-- Unique Icons --}}
      @switch($item['name'])
        @case('Dashboard')
          <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M3 12l9-9 9 9M4 10v10h16V10" />
          </svg>
          @break

        @case('Hero Content')
          <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0z"/>
          </svg>
          @break

        @case('About Content')
          <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M13 16h-1v-4h-1m1-4h.01M12 4a8 8 0 100 16 8 8 0 000-16z"/>
          </svg>
          @break

        @case('Education & Certifications')
          <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 14l9-5-9-5-9 5 9 5zm0 0v6"/>
          </svg>
          @break

        @case('Skills')
          <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M9.75 3v2.25m4.5-2.25v2.25M3 7.5h18M4.5 7.5l1.5 12.75A1.5 1.5 0 007.5 21h9a1.5 1.5 0 001.5-1.275L19.5 7.5M9 11.25h.008v.008H9v-.008zm6 0h.008v.008H15v-.008z" />
          </svg>
          @break

        @case('Projects')
          <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M3 7h18M3 12h18M3 17h18"/>
          </svg>
          @break

        @case('Experience')
          <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M6 7V6a2 2 0 012-2h8a2 2 0 012 2v1m-2 4v6a2 2 0 01-2 2H10a2 2 0 01-2-2v-6m12-2H4"/>
          </svg>
          @break

        @case('Messages')
          <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
          </svg>
          @break

        @case('Testimonials')
          <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M7 8h10M7 12h6m-1 8h6a2 2 0 002-2v-5.586a1 1 0 00-.293-.707l-2.414-2.414A1 1 0 0017.586 9H6.414a1 1 0 00-.707.293L3.293 11.707A1 1 0 003 12.414V18a2 2 0 002 2h6z" />
          </svg>
          @break

        @default
          <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M6 12h.01M12 12h.01M18 12h.01" />
          </svg>
      @endswitch

      <span>{{ $item['name'] }}</span>
    </a>
  @endforeach
</nav>

</aside>
