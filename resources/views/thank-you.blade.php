<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/thank-you.css" type="text/css">
    <link rel="stylesheet" href="styles/all-shared.css" type="text/css"/>
    <title>Document</title>
</head>
<body>
    <div class="content-container">
        <div class="thank-you-header">
            <h2>Thank You</h2>
        </div>
        <div class="thank-you-content">
            <p>We appreciate you taking the time to contact us.</p>
            <p>We will be in touch soon.</p>
        </div>
        <div style="text-align:center;">
            <meta http-equiv="refresh" content="5; url={{ route('home') }}">
            <p>You will be redirected to our home page in a few seconds.</p> 
            <button class="button" onclick="window.location.href='/'">Return Home Now</button>   
        </div>  
    </div>

    <script type="module" src="scripts/thank-you.js"></script>
</body>
</html>