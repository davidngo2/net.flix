<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix User Account</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<?php
    include_once 'conn.php';
    session_start();
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
}
    $query = $conn->query("SELECT * FROM user WHERE id = " . $user_id);
while ($data = $query->fetch_assoc()) {
    $name = $data['gebruikernaam'];
    $password = $data['wachtwoord'];
    $email = $data['email'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    if ($newPassword == $confirmPassword) {
        $updateQuery = $conn->prepare("UPDATE user SET wachtwoord = '$confirmPassword' WHERE id = '$user_id'");

        if ($updateQuery->execute()) {
            echo '<script>alert("Password changed successfully!");</script>';
        } else {
            echo '<script>alert("Failed to change password.");</script>';
        }
    } else {
        echo '<script>alert("Passwords do not match.");</script>';
    }
}
?>
<body class="bg-gray-900 text-white font-sans">
    <nav class="bg-black p-4">
        <div class="container mx-auto flex justify-between items-center">
            <img src="logo.png" alt="Netflix Logo" class="w-24">
            <a href="sign_in.php" class="text-white text-sm">Sign Out</a>
        </div>
    </nav>
    <div class="container mx-auto p-4 text-center">
        <img src="profile.jpg" alt="Your Profile" class="rounded-full w-24 mx-auto">
        <h2 class="text-2xl font-semibold mt-2"><?php echo $name ?></h2>
        <p class="text-gray-400 text-sm mt-1"><?php echo $email ?></p>
    </div>
    <div class="container mx-auto p-4 mt-4">
        <h3 class="text-lg font-semibold">Account Information</h3>
        <div class="mt-2">
            <p><span class="font-semibold">Email:</span> <?php echo $email ?></p>
            <p><span class="font-semibold">Plan:</span> Premium</p>
            <p><span class="font-semibold">Billing Date:</span> October 19, 2023</p>
        </div>
    </div>
    <div class="container mx-auto p-4 mt-4">
        <h3 class="text-lg font-semibold">Change Password</h3>
        <form action="" method="post">
            <div class="mt-2">
                <input type="password" placeholder="New Password" name="new_password" class="w-full p-2 bg-gray-800 text-white rounded mt-2">
                <input type="password" placeholder="Confirm New Password" name="confirm_password" class="w-full p-2 bg-gray-800 text-white rounded mt-2">
                <button type="submit" class="bg-red-500 text-white w-full py-2 rounded mt-4">Change Password</button>
            </div>
        </form>
    </div>
</body>
</html>
