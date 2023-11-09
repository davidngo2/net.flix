<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="bg-blend-darken text-white font-sans">
    <div class="logo flex justify-between items-center" style="border-bottom: 1px solid gray; margin-bottom: 20px">
        <img src="logo.png" alt="Netflix Logo" class="w-44">
        <a href="sign_in.php" class="ml-auto text-black font-semibold text-lg px-6">Sign In</a>
    </div>
    <div class="max-w-6xl mx-auto text-black">
        <p class="text-xs">STEP 1 OF 3</p>
        <p class="text-3xl font-semibold mb-4">Choose the plan that's right for you.</p>
        <p class="mb-4 text-xl"><span style="color: red; font-size: 40px;">&#10003;</span> Watch all you want. Advert-free.</p>
        <p class="mb-4 text-xl"><span style="color: red; font-size: 40px;">&#10003;</span> Recommendations just for you.</p>
        <p class="mb-4 text-xl"><span style="color: red; font-size: 40px;">&#10003;</span> Change or cancel your plan at any time.</p>
        <div class="flex">
            <div class="text-center mr-10 flex justify-end item-center">
                <div>
                    <button class="bg-red-500 text-white px-10 py-10 rounded text-xl mb-4">Basic</button>
                    <p class="mb-4 text-xl">€7.99</p>
                    <p class="mb-4 text-xl">Good</p>
                    <p class="mb-4 text-xl">720p</p>
                    <span style="color: red; font-size: 40px;">&#10003;</span>
                </div>
            </div>
            <div class="text-center mr-10 flex justify-end item-center">
                <div>
                    <button class="bg-red-500 text-white px-6 py-10 rounded text-xl mb-4">Standard</button>
                    <p class="mb-4 text-xl">€11.99</p>
                    <p class="mb-4 text-xl">Better</p>
                    <p class="mb-4 text-xl">1080p</p>
                    <span style="color: red; font-size: 40px;">&#10003;</span>
                </div>
            </div>
            <div class="text-center flex justify-end item-center">
                <div>
                    <button class="bg-red-500 text-white px-6 py-10 rounded text-xl mb-4">Premium</button>
                    <p class="mb-4 text-xl">€15.99</p>
                    <p class="mb-4 text-xl">Best</p>
                    <p class="mb-4 text-xl">4K+HDR</p>
                    <span style="color: red; font-size: 40px;">&#10003;</span>
                </div>
            </div>
        </div>
    </div>
</body>
