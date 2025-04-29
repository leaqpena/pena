<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900 font-sans antialiased h-full">

<div class="min-h-screen flex">
    <!-- Sidebar -->
    @include('admin.components.sidebar')

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Navbar -->
        @include('admin.components.navbar')

        <!-- Page Content -->
        <main class="p-6 bg-white m-4 rounded-lg shadow overflow-auto">
            @yield('content')
        </main>
    </div>
</div>

</body>
</html>