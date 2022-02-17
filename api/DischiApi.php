<?php
// includo il database
include "../database/database.php";
// lo trasformo l'array $db del database in json
header("Content-Type: application/json");
echo json_encode($db);
?>