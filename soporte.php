<?php

abstract class soporte {
    public string $titulo;
    public int $numProducto;
    protected float $precio;

    public function __construct(string $titulo, int $numProducto, float $precio) {
        $this->titulo = $titulo;
        $this->numProducto = $numProducto;
        $this->precio = $precio;
    }

    public function getPrecio(): float {
        return $this->precio;
    }

    public function getPrecioConIVA(): float {
        return $this->precio * 1.21;
    }

    public function getNumero(): int {
        return $this->numProducto;
    }

    public function getTitulo(): string {
        return $this->titulo;
    }

    abstract public function muestraResumen(): string;
}
