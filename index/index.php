<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chromium Arcade</title>
    <link rel="stylesheet" href="/index/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'navbar.php'?>
    <?php include 'php/christmas.php'?>
    <h1>This is a Header (1)</h1>
    <h2>But, thiiis... this is too (2)</h2>
    <p>paralelogramma, nah, just paragraph</p>
    <a href="alma.html">Casual link tag</a>
    <br>
    <div class="games"></div>

    <?php include 'filter.php'; ?>
    <?php include 'search.php'; ?>


    <?php include 'footer.php'; ?>
    
    <script src="javascript/games.js"></script>
    <script src="javascript/darkmode.js" onload="darkmodecheck()"></script>

</body>
</html>