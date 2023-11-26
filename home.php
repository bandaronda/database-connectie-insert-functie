<?php
include 'db.php';

$database = new Database();

$database->voegGebruikerToe("johny", "zellehanded", 40);

$database->sluitVerbinding();
?>
