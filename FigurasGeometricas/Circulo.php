<?php
//se genera una clase para circulo.
require_once 'FigurasGeometricas/FiguraGeometrica.php';
/**
 * Clase Circulo que implementa la interfaz FiguraGeometrica.
 * Representa un círculo y proporciona métodos para calcular su área y perímetro.
 */
class Circulo implements FiguraGeometrica
{
    private $radio; // Radio del círculo

    /**
     * Constructor de la clase Circulo.
     * @param float $radio El radio del círculo.
     */
    public function __construct($radio)
    {
        $this->radio = $radio;
    }

    /**
     * Método para calcular el área del círculo.
     * @return float El área del círculo.
     */
    public function calcularArea()
    {
        return pi() * pow($this->radio, 2);
    }

    /**
     * Método para calcular el perímetro del círculo.
     * @return float El perímetro del círculo.
     */
    public function calcularPerimetro()
    {
        return 2 * pi() * $this->radio;
    }
}
?>