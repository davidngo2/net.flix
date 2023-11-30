<!DOCTYPE html>
<html lang="en">
<?php
// Include your database connection file
require_once 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $password = password_hash($_POST["wachtwoord"], PASSWORD_DEFAULT); // Hash the password for security
    $gebruikernaam = $_POST["gebruikernaam"];


    $selectedSubscription = $_GET['subscription'];
    $subscriptionType = "";
    switch ($selectedSubscription) {
        case 1:
            $subscriptionType = "Basic";
            break;
        case 2:
            $subscriptionType = "Standard";
            break;
        case 3:
            $subscriptionType = "Premium";
            break;
        default:
            // Handle unexpected values if necessary
            break;
    }


    // Validate and process the data
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Email is valid

        try {
            // Set the current date and the date after today
            $startDate = date("Y-m-d");
            $endDate = date("Y-m-d", strtotime("+1 day"));

            // Prepare and execute the SQL statement
            $stmt = $conn->prepare("INSERT INTO user (email, gebruikernaam, wachtwoord, start_date, eind_date, subscribsie) VALUES (:email, :gebruikernaam, :password, :startDate, :endDate, :subscriptionType)");

            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':gebruikernaam', $gebruikernaam);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':startDate', $startDate);
            $stmt->bindParam(':endDate', $endDate);
            $stmt->bindParam(':subscriptionType', $subscriptionType);
            $stmt->execute();
            header("Location: next_step.php");
            exit();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>




<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css">
    <link rel="stylesheet" href="signup.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="bg-blend-darken text-white font-sans">
    <div class="logo flex justify-between items-center" style="border-bottom: 1px solid gray; margin-bottom: 20px">
        <img src="logo.png" alt="Netflix Logo" class="w-44">
        <a href="sign_in.php" class="ml-auto text-black font-semibold text-lg px-6">Sign In</a>
    </div>

    <div class="container mx-auto p-6 mt-12 max-w-md text-black">
        <p class="text-xs">STEP <strong>2</strong> OF <strong>3</strong></p>
        <h1 class="text-3xl font-bold mb-4">Create a password to start your membership</h1>
        <h1 class="mb-4">Just a few more steps and you're finished!
            We hate paperwork, too.</h1>
        <div class="mb-10 text-black">
            <form action="" method="post">
                <input type="Email" placeholder="Email" name="email" class="border border-black mb-3 w-full px-4 py-3 rounded placeholder-gray-500">
                <input type="text" placeholder="gebruikernaam" name="gebruikernaam" class="border border-black mb-3 w-full px-4 py-3 rounded placeholder-gray-500">
                <input type="password" placeholder="Password" name="wachtwoord" class="border border-black mb-4 w-full px-4 py-3 rounded placeholder-gray-500">
                <div class="flex items-center space-x-2 mb-4">
                    <input type="checkbox" class="w-5 h-5 rounded bg-gray-500">
                    <label class="text-base">Yes, please email me Netflix special offers.</label>
                </div>
                <button type="submit" class="mb-2 w-full px-4 py-3 rounded bg-red-600 text-white text-base hover:bg-red-dark focus:outline-none focus:ring-2 focus:ring-red">Next</button>
            </form>
        </div>
    </div>
</body>

</html>
