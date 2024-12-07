<?php

require_once "cintaVideo.php";
require_once "dvd.php";
require_once "juego.php";
require_once "cliente.php"; 

class videoclub {
    private string $nombre;
    private array $productos = [];
    private array $socios = [];
    private int $contadorProductos = 0;
    private int $contadorSocios = 0;

    public function __construct(string $nombre) {
        $this->nombre = $nombre;
    }

    private function incluirProducto(soporte $producto): void {
        $this->contadorProductos++;
        $producto->numProducto = $this->contadorProductos;
        $this->productos[$this->contadorProductos] = $producto;
    }

    public function incluirCintaVideo(string $titulo, float $precio, int $duracion): void {
        $this->incluirProducto(new cintaVideo($titulo, $this->contadorProductos + 1, $precio, $duracion));
    }

    public function incluirDvd(string $titulo, float $precio, string $idiomas, string $formatoPantalla): void {
        $this->incluirProducto(new dvd($titulo, $this->contadorProductos + 1, $precio, $idiomas, $formatoPantalla));
    }

    public function incluirJuego(string $titulo, float $precio, string $consola, int $minJugadores, int $maxJugadores): void {
        $this->incluirProducto(new juego($titulo, $this->contadorProductos + 1, $precio, $consola, $minJugadores, $maxJugadores));
    }

    public function listarProductos(): void {
        echo "<strong>Lista de Productos:</strong><br>";
        foreach ($this->productos as $producto) {
            echo $producto->muestraResumen() . "<br>";
        }
    }

    public function incluirSocio(string $nombre, int $maxAlquilerConcurrente = 3): void {
        $this->contadorSocios++;
        $socio = new cliente($nombre, $this->contadorSocios, $maxAlquilerConcurrente);
        $this->socios[$this->contadorSocios] = $socio;
        echo "<br>Nuevo socio incluido: " . $nombre . " (ID: " . $this->contadorSocios . ")";
    }
}
