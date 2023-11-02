<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Information</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css">
</head>
<body class="bg-gray-900 text-white font-sans">
    <?php
    include_once 'conn.php';
    $movieId = $_GET['id'];
    $query = $conn->query("SELECT * FROM films WHERE id = " . $movieId);
    while ($data = $query->fetch_assoc()) {
        $name = $data['name'];
        $duur = $data['duur'];
        $summary = $data['sumary'];
        $foto = $data['foto'];
    }
    ?>

<body class="bg-black text-white font-sans">
    <div class="container mx-auto py-8">
        <h1 class="text-4xl font-semibold mb-4"><?php echo $name; ?></h1>
        <div class="max-w-2xl">
            <img src="<?php echo $foto; ?>" alt="<?php echo $name; ?>" class="w-full rounded-lg mb-4">
            <p class="text-lg mb-4"><?php echo $summary; ?></p>
            <p class="text-gray-400">Duur: <?php echo $duur; ?></p>
        </div>
    </div>
</body>
</body>
</html>
