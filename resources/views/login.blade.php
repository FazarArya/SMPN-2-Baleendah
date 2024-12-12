<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page - Buku Induk Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
            letter-spacing: 0em;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Left Section -->
        <div class="w-1/2 bg-gradient-to-b from-green-600 to-green-200 relative">
            <div class="absolute top-6 left-6">
                <img src="https://via.placeholder.com/50" alt="Logo">
            </div>
            <div class="flex items-center justify-center h-full">
                <h1 class="text-white text-5xl font-bold">Selamat Datang!</h1>
            </div>
        </div>

        <!-- Right Section -->
        <div class="w-1/2 bg-white flex items-center justify-center">
            <div class="w-3/4">
                <h2 class="text-3xl font-bold mb-6">Masuk</h2>
                <form>
                    <!-- Email Input -->
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500">
                    </div>
                    <!-- Password Input -->
                    <div class="mb-6">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" id="password" name="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500">
                    </div>
                    <!-- Login Button -->
                    <div class="mb-4">
                        <button type="submit" class="w-full bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600">Masuk</button>
                    </div>
                </form>
                <p class="text-sm text-gray-600 text-center">Belum punya akun? <a href="/regis" class="text-blue-500 hover:underline">Daftar di sini</a></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>

</html>