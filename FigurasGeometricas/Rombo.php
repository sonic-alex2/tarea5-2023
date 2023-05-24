<?php
//se genera una clase para rombo.
require_once 'FigurasGeometricas/FiguraGeometrica.php';

/**
 * Clase Rombo que implementa la interfaz FiguraGeometrica.
 * Representa un rombo y proporciona métodos para calcular su área y perímetro.
 */
class Rombo implements FiguraGeometrica
{
    private $diagonalMayor; // Diagonal mayor del rombo
    private $diagonalMenor; // Diagonal menor del rombo
    private $lado; // Lado del rombo

    /**
     * Constructor de la clase Rombo.
     * @param float $diagonalMayor La diagonal mayor del rombo.
     * @param float $diagonalMenor La diagonal menor del rombo.
     * @param float $lado El lado del rombo.
     */
    public function __construct($diagonalMayor, $diagonalMenor, $lado)
    {
        $this->diagonalMayor = $diagonalMayor;
        $this->diagonalMenor = $diagonalMenor;
        $this->lado = $lado;
    }

    /**
     * Método para calcular el área del rombo.
     * @return float El área del rombo.
     */
    public function calcularArea()
    {
        return ($this->diagonalMayor * $this->diagonalMenor) / 2;
    }

    /**
     * Método para calcular el perímetro del rombo.
     * @return float El perímetro del rombo.
     */
    public function calcularPerimetro()
    {
        return 4 * $this->lado;
    }
}

?>