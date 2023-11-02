<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css">
    <style>
        .film-slide {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
        }

        .film-item {
            flex: 0 0 auto;
            scroll-snap-align: start;
            width: 25%;
        }
    </style>
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
        <div class="film-slide" id="film-grid">
        </div>
    </div>
    <div class="container px-4 mx-auto py-8">
        <h1 class="text-4xl font-semibold mb-8">Upcoming</h1>
        <div class="film-slide" id="film-grid1">
        </div>
    </div>
    <div class="container px-4 mx-auto py-8">
        <h1 class="text-4xl font-semibold mb-8">Top rated</h1>
        <div class="film-slide" id="film-grid2">
        </div>
    </div>
    <div class="container px-4 mx-auto py-8">
        <h1 class="text-4xl font-semibold mb-8">Trending series</h1>
        <div class="film-slide" id="film-grid3">
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
