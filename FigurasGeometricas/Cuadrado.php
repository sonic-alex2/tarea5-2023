<?php
//se genera una clase para cuadro.
require_once 'FigurasGeometricas/FiguraGeometrica.php';

/**
 * Clase Cuadrado que implementa la interfaz FiguraGeometrica.
 * Representa un cuadrado y proporciona métodos para calcular su área y perímetro.
 */
class Cuadrado implements FiguraGeometrica
{
    private $lado; // Longitud del lado del cuadrado

    /**
     * Constructor de la clase Cuadrado.
     * @param float $lado La longitud del lado del cuadrado.
     */
    public function __construct($lado)
    {
        $this->lado = $lado;
    }

    /**
     * Método para calcular el área del cuadrado.
     * @return float El área del cuadrado.
     */
    public function calcularArea()
    {
        return $this->lado * $this->lado;
    }

    /**
     * Método para calcular el perímetro del cuadrado.
     * @return float El perímetro del cuadrado.
     */
    public function calcularPerimetro()
    {
        return 4 * $this->lado;
    }
}

?>