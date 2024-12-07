<?php

require_once "soporte.php";

class dvd extends soporte {
    private string $idiomas;
    private string $formatoPantalla;

    public function __construct(string $titulo, int $numProducto, float $precio, string $idiomas, string $formatoPantalla) {
        parent::__construct($titulo, $numProducto, $precio);
        $this->idiomas = $idiomas;
        $this->formatoPantalla = $formatoPantalla;
    }

    public function muestraResumen(): string {
        return "DVD: {$this->titulo}, ID: {$this->numProducto}, Precio: {$this->precio}€, Idiomas: {$this->idiomas}, Formato: {$this->formatoPantalla}";
    }
}

