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

    <div class="card shadow big-card">
        <div class="download-container">
            <h1>Game Title</h1>
            <p>Game Description</p>

            <a class="btn-download" href="index/" download="example.txt">Download</a>
        </div>
    </div>

    <?php include 'footer.php'; ?>
    
    <script src="javascript/games.js"></script>
    <script src="javascript/darkmode.js" onload="darkmodecheck()"></script>

</body>
</html>