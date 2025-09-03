<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind Config (optional customization) -->
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: '#3b82f6', // Tailwind Blue-500
              dark: '#0f172a', // Slate-900
              light: '#f8fafc', // Gray-50
            },
            spacing: {
              68: '17rem', // Custom sidenav width
            },
          },
        },
      };
    </script>
  </head>

  <body class="font-sans antialiased bg-light text-slate-600 dark:bg-dark dark:text-slate-300">

    <!-- Background header layer -->
    <div class="fixed top-0 left-0 right-0 z-0 h-40 bg-primary dark:hidden"></div>

    <!-- Sidenav -->
    @include('admin.includes.sidenav')

    <!-- Main Content Area -->
    <main class="relative z-10 min-h-screen xl:ml-68 transition-all duration-200 ease-in-out">
      
      <!-- Navbar -->
      @include('admin.includes.Navbar')

      <!-- Page Content -->
<section class="pt-24 px-6 pb-8">
        @yield('content')
      </section>

      <!-- Footer -->
      <footer class="px-6 pt-4 pb-8 border-t border-gray-200 dark:border-slate-700">
        @include('admin.includes.Footer')
      </footer>
    </main>

  </body>
</html>
