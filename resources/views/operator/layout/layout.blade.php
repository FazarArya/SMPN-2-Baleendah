<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buku Induk Siswa - Operator</title>
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
    <!-- Remix Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="g-sidenav-show   bg-gray-100">
    @include('operator.layout.sidebar')
    <main class="main-content position-relative border-radius-lg">
        @yield('content')

    </main>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

</body>

</html>