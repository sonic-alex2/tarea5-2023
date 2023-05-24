<?php
//se genera una clase para trapecio.
require_once 'FigurasGeometricas/FiguraGeometrica.php';

/**
 * Clase Trapecio que implementa la interfaz FiguraGeometrica.
 * Representa un trapecio y proporciona métodos para calcular su área y perímetro.
 */
class Trapecio implements FiguraGeometrica
{
    private $baseMayor; // Base mayor del trapecio
    private $baseMenor; // Base menor del trapecio
    private $lado1; // Lado 1 del trapecio
    private $lado2; // Lado 2 del trapecio
    private $altura; // Altura del trapecio

    /**
     * Constructor de la clase Trapecio.
     * @param float $baseMayor La base mayor del trapecio.
     * @param float $baseMenor La base menor del trapecio.
     * @param float $lado1 El lado 1 del trapecio.
     * @param float $lado2 El lado 2 del trapecio.
     * @param float $altura La altura del trapecio.
     */
    public function __construct($baseMayor, $baseMenor, $lado1, $lado2, $altura)
    {
        $this->baseMayor = $baseMayor;
        $this->baseMenor = $baseMenor;
        $this->lado1 = $lado1;
        $this->lado2 = $lado2;
        $this->altura = $altura;
    }

    /**
     * Método para calcular el área del trapecio.
     * @return float El área del trapecio.
     */
    public function calcularArea()
    {
        return (($this->baseMayor + $this->baseMenor) * $this->altura) / 2;
    }

    /**
     * Método para calcular el perímetro del trapecio.
     * @return float El perímetro del trapecio.
     */
    public function calcularPerimetro()
    {
        return $this->baseMayor + $this->baseMenor + $this->lado1 + $this->lado2;
    }
}
?>