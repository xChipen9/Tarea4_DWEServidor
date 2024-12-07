<?php

class cliente {
    private string $nombre; 
    private int $numero; 
    private int $maxAlquilerConcurrente; 
    private array $soportesAlquilados = []; 

    // Constructor
    public function __construct(string $nombre, int $numero, int $maxAlquilerConcurrente = 3) {
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->maxAlquilerConcurrente = $maxAlquilerConcurrente;
    }

    // Getter para el numero de cliente
    public function getNumero(): int {
        return $this->numero;
    }

    // Getter para nUmero de soportes alquilados
    public function getNumSoportesAlquilados(): int {
        return count($this->soportesAlquilados);
    }

    // mostrar resumen del cliente
    public function muestraResumen(): void {
        echo "<strong>Cliente:</strong> " . $this->nombre;
        echo "<br>Número de alquileres actuales: " . $this->getNumSoportesAlquilados();
        echo "<br>Máximo permitido: " . $this->maxAlquilerConcurrente;
        echo "<br>Alquileres activos:<br>";
        foreach ($this->soportesAlquilados as $soporte) {
            echo "- " . $soporte->titulo . "<br>";
        }
    }

    // alquilar un soporte
    public function alquilar(soporte $soporte): bool {
        if ($this->getNumSoportesAlquilados() >= $this->maxAlquilerConcurrente) {
            echo "<br>No se puede alquilar: Límite de alquileres alcanzado.";
            return false;
        }

        if (in_array($soporte, $this->soportesAlquilados, true)) {
            echo "<br>Este soporte ya está alquilado.";
            return false;
        }

        $this->soportesAlquilados[] = $soporte;
        echo "<br>Se ha alquilado: " . $soporte->titulo;
        return true;
    }

    // devolver un soporte
    public function devolver(soporte $soporte): bool {
        $clave = array_search($soporte, $this->soportesAlquilados, true);
        if ($clave === false) {
            echo "<br>No se puede devolver: Este soporte no está alquilado.";
            return false;
        }

        unset($this->soportesAlquilados[$clave]);
        $this->soportesAlquilados = array_values($this->soportesAlquilados); 
        echo "<br>Se ha devuelto: " . $soporte->titulo;
        return true;
    }
}
