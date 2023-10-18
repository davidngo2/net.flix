<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix Welcome Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gray-900 text-white">
   <div class="container mx-auto px-4 py-8">
    <h1 class="text-6xl font-bold mb-8 text-center">Who's watching?</h1>
    <div class="flex justify-center">
        <div class="user-card user-card-large mt-8 mr-4">
            <img src="net.png" alt="User 1" class="rounded-full w-32 h-32 mx-auto mb-4">
            <h2 class="text-xl font-bold mb-2">User 1</h2>
            <a href="home.php" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded inline-block w-32">Watch Now</a>
        </div>
        <div class="user-card user-card-large mt-8">
            <img src="net.png" alt="User 2" class="rounded-full w-32 h-32 mx-auto mb-4">
            <h2 class="text-xl font-bold mb-2">User 2</h2>
            <a href="home.php" class="bg-red-500 hover-bg-red-600 text-white font-bold py-2 px-4 rounded inline-block w-32">Watch Now</a>
        </div>
    </div>

    <div class="text-center mt-8">
        <a href="manage-profile.php" class="bg-gray-800 text-gray-400 font-bold py-2 px-9 w-32 text-center text-2xl">Manage Profiles</a>
    </div>
</div>

</body>
</html>
