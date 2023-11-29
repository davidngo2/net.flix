<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-gray-900 text-white">
    <header class="py-6">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <div class="logo">
                    <img src="https://www.freepnglogos.com/uploads/netflix-logo-0.png" alt="Netflix Logo" class="w-48">
                </div>
                <nav>
                    <ul class="flex items-center">
                        <li class="mr-6">
                            <a href="#film-grid" class="hover:text-gray-400">Home</a>
                        </li>
                        <li class="mr-6">
                            <a href="#film-grid3" class="hover:text-gray-400">TV Shows</a>
                        </li>
                        <li class="mr-6">
                            <a href="#film-grid2" class="hover:text-gray-400">Movies</a>
                        </li>
                        <li class="mr-6">
                            <a href="#film-grid1" class="hover:text-gray-400">Upcoming</a>
                        </li>
                        <li class="mr-6">
                            <a href="#my-list" class="hover:text-gray-400">My List</a>
                        </li>
                    </ul>
                </nav>
                <div class="relative group mr-6" id="profileButton">
                    <button class="focus:outline-none" onclick="toggleDropdown()">
                        <img src="profile1.jpg" alt="Profile" class="w-8 h-8 rounded-full">
                    </button>
                    <div class="dropdown-menu" id="profileDropdown">
                        <ul>
                            <li><a href="account.php">Settings</a></li>
                            <li><a href="sign_in.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container px-4 mx-auto py-8">
        <h1 class="text-4xl font-semibold mb-8">Recently Added</h1>
        <div class="film-slide" id="film-grid">
        </div>
    </div>
    <div class="container px-4 mx-auto py-8">
        <h1 class="text-4xl font-semibold mb-8">Upcoming</h1>
        <div class="film-slide" id="film-grid1">
        </div>
    </div>
    <div class="container px-4 mx-auto py-8">
        <h1 class="text-4xl font-semibold mb-8">Movies</h1>
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
</body>

</html>

</html>
