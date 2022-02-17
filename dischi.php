<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi.php</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="./img/logo.svg" alt="spotify">
        </div>
    </header>
    <main>
        <!-- stampo i dischi solamente con php -->
        <!-- nel container passerò con inlcude cartella Cardbox presente nel template -->
        <div class="main-container">
            <?php include __DIR__ . "/template/CardBox.php" ?>
        </div>
    </main>
</body>

</html>