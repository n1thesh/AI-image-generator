<?php
    include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI-Image Generator</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <h1>AI Image Generator</h1>
        <p>Type in a detailed description and get the best AI-generated images using text-to-image AI.</p>
        <form class="gen-form">
            <input type="text" id="user-prompt" placeholder="Type Your Prompt Here..." autocomplete="off">
            <button type="button" id="generate">Generate</button>
        </form>
        <div class="result">
            <div id="loading">Generating...</div>
            <div id="image-grid"></div>
        </div>
    </div>

    <script src="./scrip.js"></script>
</body>
</html>