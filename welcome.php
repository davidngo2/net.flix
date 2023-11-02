<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<?php
include_once 'conn.php';
session_start();
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
}
    $movieId = $user_id;
    $query = $conn->query("SELECT * FROM user WHERE id = " . $user_id);
while ($data = $query->fetch_assoc()) {
    $name = $data['gebruikernaam'];
}
?>
<body class="bg-gray-900 text-white">
   <div class="container mx-auto px-4 py-8">
    <h1 class="text-6xl font-bold mb-8 text-center">Who's watching?</h1>
        <section class="container mx-auto p-4">
        <div class="gap-10 mt-6 flex items-center justify-center">
            <div class="group cursor-pointer">
                <a href="ani.php">
                <img src="profile1.jpg" alt="Profile" class="w-44 h-44 mx-auto">
                </a>
                <p class="text-xl font-semibold text-center mt-2 group-hover:text-red-500"><?php echo $name ?></p>
            </div>
        </div>
    </section>

    <div class="text-center mt-8">
        <a href="account.php?id=<?php echo $user_id; ?>" class=" border-4 border-gray-600 text-gray-600 font-bold py-2 px-9 w-32 text-center text-2xl">Manage Profiles</a>
    </div>
    </div>

    </body>
    </html>
.then(response => response.json())
.then(data => {
    const list = data.d;
    list.map(item => {
        const name = item.l;
        const poster = item.i.imageUrl;
        const movie = `<li><img src="${poster}">${name}</li>`;
        document.querySelector(".movies").innerHTML += movie;    
    })
})
.catch (err => {
    console.error(err);
});
