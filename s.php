<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css">
</head>

<body class="bg-gray-900 text-white">
    <header class="py-6">
        <div class="container mx-auto flex justify-between items-center">
            <img src="https://www.freepnglogos.com/uploads/netflix-logo-0.png" alt="Netflix Logo" class="w-48">
            <nav>
                <ul class="flex items-center">
                    <li class="mr-6">
                        <a href="#" class="hover:text-gray-400">Home</a>
                    </li>
                    <li class="mr-6">
                        <a href="#" class="hover:text-gray-400">TV Shows</a>
                    </li>
                    <li class="mr-6">
                        <a href="#" class="hover:text-gray-400">Movies</a>
                    </li>
                    <li class="mr-6">
                        <a href="#" class="hover:text-gray-400">Recently Added</a>
                    </li>
                    <li class="mr-6">
                        <a href="#" class="hover:text-gray-400">My List</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container px-4 mx-auto py-8">
        <h1 class="text-4xl font-semibold mb-8">Filmoverzicht</h1>
        <div class="flex space-x-4 grid xl:grid-cols-4 " id="film-grid">
            <!-- Film items will be added here -->
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
