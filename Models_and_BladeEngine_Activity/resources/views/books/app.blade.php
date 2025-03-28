<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    @vite('resources/css/app.css') <!-- Ensure Tailwind is loaded -->
</head>
<body class="bg-gray-100">

    <!-- Header -->
    <header class="bg-blue-600 p-4 text-white text-center">
        <h1 class="text-2xl font-bold">Book List</h1>
    </header>

    <!-- Main Content -->
    <div class="container mx-auto mt-5 p-5">
        @yield('content') <!-- This will render content from child views -->
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center p-3 mt-5">
        <p>&copy; {{ date('Y') }} Book List</p>
    </footer>

</body>
</html>
