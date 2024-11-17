<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chocó Travel</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900">
  <!-- Hero Section -->
  <div class="relative h-screen">
    <!-- Background Image -->
    <div class="absolute inset-0">
      <img
        src="{{url('assets/images/gallary/p1.jpg')}}"
        alt="Vista aérea del Chocó"
        class="w-full h-full object-cover opacity-80"
      />
    </div>
    
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    <!-- Navbar -->
    <nav class="absolute top-0 w-full p-3 flex items-center justify-between text-white z-20">
      <!-- Logo -->
      <div class="">
        <img class="w-[10rem]"src={{url('assets/images/logo/CHOCO_TRAVEL-removebg-preview.png')}} alt="">
      </div>

      <!-- Desktop Menu -->
      <div class="hidden md:flex space-x-6">
        <a href="#" class="hover:text-yellow-400">Inicio</a>
        <a href="#" class="hover:text-yellow-400">Destinos</a>
        <a href="#" class="hover:text-yellow-400">Reseñas</a>
        <a href="#" class="hover:text-yellow-400">Login</a>
      </div>

      <!-- Mobile Menu Button -->
      <div class="md:hidden">
        <button id="menu-button" class="text-white focus:outline-none">
          ☰
        </button>
      </div>
    </nav>

    <!-- Mobile Menu -->
    <div
      id="mobile-menu"
      class="hidden absolute top-16 left-0 w-full bg-gray-800 text-white flex flex-col items-center space-y-4 py-4 z-20"
    >
      <a href="#" class="hover:text-yellow-400">Inicio</a>
      <a href="#" class="hover:text-yellow-400">Destinos</a>
      <a href="#" class="hover:text-yellow-400">Reseñas</a>
      <a href="#" class="hover:text-yellow-400">Login</a>
    </div>

    <!-- Hero Text -->
    <div class="relative z-10 flex items-center h-full px-8 text-left">
      <div class="text-white space-y-6">
        <h1 class="text-4xl sm:text-6xl font-bold">
          Bienvenidos al <br />
          <span class="text-green-400 text-shadow-lg">mejor vividero del</span> mundo
        </h1>
      </div>
    </div>
  </div>

  <script>
    // Toggle Mobile Menu
    const menuButton = document.getElementById('menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    menuButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
</body>
</html>
