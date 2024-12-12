<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page - Buku Induk Siswa</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!--     Fonts    -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />
    <style>
        * {
            font-family: Inter, sans-serif;
            letter-spacing: 0em;
        }
    </style>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="bg-cover bg-center h-screen" style="background-image: url('https://cdn.wallpapersafari.com/84/52/VvHazk.jpg');">
  <!-- Navbar -->
  <header class="flex justify-between items-center px-8 py-4 bg-opacity-0">
    <div class="flex items-center space-x-2">
      <div class="w-6 h-6 rounded-full bg-blue-500"></div>
      <span class="text-xl font-bold text-blue-500">BUKIS</span>
    </div>
    <a href="/login" class="px-4 py-2 bg-blue-600 hover:bg-blue-800 text-white rounded-lg">Masuk</a>
  </header>

  <!-- Hero Section -->
  <section class="flex flex-col items-center justify-center h-[70vh] text-center text-white">
    <h1 class="text-4xl md:text-5xl font-bold leading-tight">
      Selamat Datang Di Website <br />
      <span class="text-white font-extrabold">Buku Induk Siswa</span> <br />
      SMPN 2 Baleendah
    </h1>
    <a href="/login" class="px-6 py-3 mt-8 bg-blue-600 hover:bg-blue-800 text-white font-medium rounded-lg text-lg text-center">
      Mulai
    </a>
  </section>

  <!-- Tujuan Website -->
  <section class="bg-green-100 py-16 text-center">
    <h2 class="text-2xl md:text-3xl font-bold mb-8">
      Tujuan <span class="text-green-500 font-extrabold">Website</span> ini dibuat
    </h2>
    <div class="w-11/12 mx-auto max-w-xl bg-gray-200 rounded-lg h-40 shadow-lg"></div>
    <p class="mt-6 text-gray-500 text-sm md:text-base">
      Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
    </p>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>
