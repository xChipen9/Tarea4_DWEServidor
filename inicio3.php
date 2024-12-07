<?php

require_once "videoClub.php";

$videoclub = new videoClub("Videoclub Extremo");

$videoclub->incluirCintaVideo("El Rey León", 4.5, 90);
$videoclub->incluirDvd("Avatar", 12.0, "es,en,fr", "16:9");
$videoclub->incluirJuego("Mario Kart", 49.99, "Switch", 1, 4);
$videoclub->incluirJuego("The Last of Us Part II", 49.99, "PS4", 1, 1);

$videoclub->listarProductos();
