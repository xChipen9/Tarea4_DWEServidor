<?php

include "juego.php";

// Crear objeto
$miJuego = new juego("The Last of Us Part II", 26, 49.99, "PS4", 1, 1);

// Mostrar informacion
echo "<strong>" . $miJuego->titulo . "</strong>";
echo "<br>Precio: " . $miJuego->getPrecio() . " euros";
echo "<br>Precio IVA incluido: " . $miJuego->getPrecioConIVA() . " euros";
$miJuego->muestraResumen();



