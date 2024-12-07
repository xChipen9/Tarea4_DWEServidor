<?php

include_once "cintaVideo.php";
include_once "dvd.php";
include_once "juego.php";
include_once "cliente.php";

// Crear objetos
$cinta1 = new cintaVideo("El Rey León", 101, 4.5, 90);
$dvd1 = new dvd("Avatar", 102, 12, "es,en,fr", "16:9");
$juego1 = new juego("Mario Kart", 103, 49.99, "Switch", 1, 4);

// Crear un cliente
$cliente = new cliente("Peter Parker", 1, 2); 

// Intentar alquilar soportes
$cliente->alquilar($cinta1);
$cliente->alquilar($dvd1);
$cliente->alquilar($juego1); 

echo "<br><br>--- Alquileres actuales ---<br>";
$cliente->muestraResumen();

// Intentar devolver un soporte
$cliente->devolver($cinta1);

echo "<br><br>--- Después de devolver ---<br>";
$cliente->muestraResumen();
