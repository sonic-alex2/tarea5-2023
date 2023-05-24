<?php
//se genera una clase para rectangulo.
require_once 'FigurasGeometricas/FiguraGeometrica.php';

/**
 * Clase Rectangulo que implementa la interfaz FiguraGeometrica.
 * Representa un rectángulo y proporciona métodos para calcular su área y perímetro.
 */
class Rectangulo implements FiguraGeometrica
{
    private $base; // Base del rectángulo
    private $altura; // Altura del rectángulo

    /**
     * Constructor de la clase Rectangulo.
     * @param float $base La base del rectángulo.
     * @param float $altura La altura del rectángulo.
     */
    public function __construct($base, $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }

    /**
     * Método para calcular el área del rectángulo.
     * @return float El área del rectángulo.
     */
    public function calcularArea()
    {
        return $this->base * $this->altura;
    }

    /**
     * Método para calcular el perímetro del rectángulo.
     * @return float El perímetro del rectángulo.
     */
    public function calcularPerimetro()
    {
        return 2 * ($this->base + $this->altura);
    }
}
?>