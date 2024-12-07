<?php

require_once "soporte.php";

class juego extends soporte {
    private string $consola;
    private int $minJugadores;
    private int $maxJugadores;

    public function __construct(string $titulo, int $numProducto, float $precio, string $consola, int $minJugadores, int $maxJugadores) {
        parent::__construct($titulo, $numProducto, $precio);
        $this->consola = $consola;
        $this->minJugadores = $minJugadores;
        $this->maxJugadores = $maxJugadores;
    }

    public function muestraResumen(): string {
        return "Juego: {$this->titulo}, ID: {$this->numProducto}, Precio: {$this->precio}€, Consola: {$this->consola}, Jugadores: {$this->minJugadores}-{$this->maxJugadores}";
    }
}
