<?php
// importo il database dischi
// in questo file lo sfrutterò come componente per stampare i dischi
include __DIR__ . "/../database/database.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpcards</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- per ogni disco presente nel database -->
    <!-- creo una classe card a cui do una img e un area di testo -->
    <!-- ad img e area di testo passo i valori tramite il php -->
    <?php foreach ($db as $disc) { ?>
        <div class="card">
            <img src="<?php echo $disc['poster'] ?>" alt="<?php echo $disc['title'] ?>">
            <div class="textbox">
                <h2><?php echo $disc['title'] ?></h2>
                <div class="author-year">
                    <h3><?php echo $disc['author'] ?></h3>
                    <h4><?php echo $disc['year'] ?></h4>
                </div>
            </div>
        </div>
    <?php } ?>
</body>

</html>