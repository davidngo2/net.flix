<!DOCTYPE html>
<html lang="en">

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
    <div class="max-w-4xl mx-auto text-black">
        <p class="text-xs">STEP <strong>1</strong> OF <strong>3</strong></p>
        <p class="text-3xl font-semibold mb-4">Choose the plan that's right for you.</p>
        <p class="mb-4 text-xl"><span style="color: red; font-size: 40px;">&#10003;</span> Watch all you want. Advert-free.</p>
        <p class="mb-4 text-xl"><span style="color: red; font-size: 40px;">&#10003;</span> Recommendations just for you.</p>
        <p class="mb-4 text-xl"><span style="color: red; font-size: 40px;">&#10003;</span> Change or cancel your plan at any time.</p>
        <div class="text-center mr-10 flex justify-end item-center">
            <div>
                <button class="bg-red-500 text-white px-8 py-10 text-xl mb-4 mr-4" onclick="highlightRow(1)">Basic</button>
                <button class="bg-red-500 text-white px-4 py-10 text-xl mb-4 mr-4" onclick="highlightRow(2)">Standard</button>
                <button class="bg-red-500 text-white px-4 py-10 text-xl mb-4" onclick="highlightRow(3)">Premium</button>
            </div>
        </div>
        <div>
            <table class="text-xl mb-4">
                <tr class="tr" id="row1">
                    <th>Monthly price</th>
                    <td class="price1">€7.99</td>
                    <td class="price2">€11.99</td>
                    <td class="price3">€15.99</td>
                </tr>
                <tr class="tr" id="row2">
                    <th>Video quality</th>
                    <td class="quality1">Good</td>
                    <td class="quality2">Better</td>
                    <td class="quality3">Best</td>
                </tr>
                <tr class="tr" id="row3">
                    <th>Resolution</th>
                    <td class="resolution1">720p</td>
                    <td class="resolution2">1080p</td>
                    <td class="resolution3">4K+HDR</td>
                </tr>
                <tr id="row4">
                    <th>Watch on your TV, computer, mobile phone and tablet</th>
                    <td><span class="check1" style="font-size: 40px;">&#10003;</span></td>
                    <td><span class="check2" style="font-size: 40px;">&#10003;</span></td>
                    <td><span class="check3" style="font-size: 40px;">&#10003;</span></td>
                </tr>
            </table>
            <p class="mb-4">HD (720p), Full HD (1080p), Ultra HD (4K) and HDR availability subject to your internet service and device capabilities. Not all content is available in all resolutions. See our Terms of Use for more details.</p>
            <p class="mb-10">Only people who live with you may use your account. Watch on 4 different devices at the same time with Premium, 2 with Standard and 1 with Basic.</p>
            <div class="max-w-xs mx-auto text-black">
                <button onclick="redirectToSignUp()" class="bg-red-600 text-white px-48 py-3 mt-4 rounded text-2xl">Next</button>
            </div>
        </div>
    </div>
    <script src="signup_sript.js"></script>
</body>

</html>
