<?php

require_once "soporte.php";

class cintaVideo extends soporte {
    private int $duracion; 

    public function __construct(string $titulo, int $numProducto, float $precio, int $duracion) {
        parent::__construct($titulo, $numProducto, $precio);
        $this->duracion = $duracion;
    }

    public function muestraResumen(): string {
        return "Cinta de Video: {$this->titulo}, ID: {$this->numProducto}, Precio: {$this->precio}€, Duración: {$this->duracion} min";
    }
}

       