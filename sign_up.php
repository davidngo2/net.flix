<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aanmelden</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css">
</head>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['gebruikernaam'];
            $password = $_POST['wachtwoord'];


            $sql = "INSERT INTO user (gebruikernaam, wachtwoord) VALUES ('$username', '$password')";

           
            include_once('conn.php');
            
            if ($conn->query($sql) === true) {
                echo '<script>console.log("Registratie succesvol!");</script>';
            } else {
                echo '<script>console.error("Fout bij registratie: ' . $conn->error . '");</script>';
            }
            $conn->close();
        }
        ?>
<body class="bg-blend-darken text-white font-sans" style="background-image: url('netflix.jpg');">
    <div class="logo p-4">
        <img src="logo.png" alt="Netflix Logo" class="w-32">
    </div>

    <div class="container mx-auto p-6 mt-12 bg-black rounded-lg max-w-md">
        <h1 class="text-3xl font-semibold mb-6">Sign up</h1>
        <div class="mb-10">
            <form action="welcome.php" method="post">
            <input type="text" placeholder="Username" name="gebruikernaam" class="bg-gray-600 mb-3 w-full px-4 py-3 rounded bg-[#333] text-white placeholder-gray-500 text-base">
            <input type="password" placeholder="Password" name="wachtwoord" class="bg-gray-600 mb-10 w-full px-4 py-3 rounded bg-[#333] text-white placeholder-gray-500 text-base">
            <button type="submit" class="mb-2 w-full px-4 py-3 rounded bg-red-600 text-white text-base hover:bg-red-dark focus:outline-none focus:ring-2 focus:ring-red">Sign up</button>
            <div class="flex items-center space-x-2">
                <input type="checkbox" class="w-5 h-5 rounded bg-gray-500">
                <label class="text-base text-gray-400">Remember me</label>
                <a href="#" class="text-sm text-gray-400 no-underline hover:underline block">Need help?</a>
            </div>
            </form>
        </div>
        <div class="content mt-6 text-sm text-gray-400">
            <h2 class="mb-3 mt-20">Alrady a nember? <a href="sign_in.php" class="text-white no-underline hover:underline">Sign in.</a></h2>
        </div>
    </div>
</body>

</html>
