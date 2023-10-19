<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix User Account</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white font-sans">
    <!-- Navigation Bar -->
    <nav class="bg-black p-4">
        <div class="container mx-auto flex justify-between items-center">
            <img src="netflix-logo.png" alt="Netflix Logo" class="w-24">
            <a href="#" class="text-white text-sm">Sign Out</a>
        </div>
    </nav>

    <!-- User Profile -->
    <div class="container mx-auto p-4 text-center">
        <img src="profile-picture.jpg" alt="Your Profile" class="rounded-full w-24 mx-auto">
        <h2 class="text-2xl font-semibold mt-2">Your Name</h2>
        <p class="text-gray-400 text-sm mt-1">User Email</p>
    </div>

    <!-- Account Information -->
    <div class="container mx-auto p-4 mt-4">
        <h3 class="text-lg font-semibold">Account Information</h3>
        <div class="mt-2">
            <p><span class="font-semibold">Email:</span> user@email.com</p>
            <p><span class="font-semibold">Plan:</span> Premium</p>
            <p><span class="font-semibold">Billing Date:</span> October 19, 2023</p>
        </div>
    </div>

    <!-- Change Password -->
    <div class="container mx-auto p-4 mt-4">
        <h3 class="text-lg font-semibold">Change Password</h3>
        <div class="mt-2">
            <input type="password" placeholder="New Password" class="w-full p-2 bg-gray-800 text-white rounded mt-2">
            <input type="password" placeholder="Confirm New Password" class="w-full p-2 bg-gray-800 text-white rounded mt-2">
            <button class="bg-red-500 text-white w-full py-2 rounded mt-4">Change Password</button>
        </div>
    </div>
</body>
</html>
