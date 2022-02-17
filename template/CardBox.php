<?php
// importo il database dischi
// in questo file lo sfrutterò come componente per stampare i dischi
include __DIR__ . "/../database/database.php";
?>
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