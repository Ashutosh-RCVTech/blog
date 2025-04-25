<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to My Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white p-10 rounded-lg shadow-lg text-center max-w-lg">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Welcome to My Blog</h1>
        <p class="text-gray-600 mb-6">Discover amazing content from our community. Sign up or log in to start posting your own blogs!</p>

        <div class="flex justify-center space-x-4">
            <a href="{{ route('login') }}"
               class="px-6 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">
                Login
            </a>
            <a href="{{ route('register') }}"
               class="px-6 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition">
                Register
            </a>
        </div>
    </div>

</body>
</html>
