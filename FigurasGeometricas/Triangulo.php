<?php

//se genera una clase para tringulo.
require_once 'FigurasGeometricas/FiguraGeometrica.php';

/**
 * Clase Triangulo que implementa la interfaz FiguraGeometrica.
 * Representa un triángulo y proporciona métodos para calcular su área y perímetro.
 */
class Triangulo implements FiguraGeometrica
{
    private $base; // Base del triángulo
    private $altura; // Altura del triángulo

    /**
     * Constructor de la clase Triangulo.
     * @param float $base La base del triángulo.
     * @param float $altura La altura del triángulo.
     */
    public function __construct($base, $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }

    /**
     * Método para calcular el área del triángulo.
     * @return float El área del triángulo.
     */
    public function calcularArea()
    {
        return ($this->base * $this->altura) / 2;
    }

    /**
     * Método para calcular el perímetro del triángulo.
     * @return float El perímetro del triángulo.
     */
    public function calcularPerimetro()
    {
        $lado = sqrt(pow($this->base / 2, 2) + pow($this->altura, 2));
        $perimetro = 2 * $lado + $this->base;

        return $perimetro;
    }
}

?>