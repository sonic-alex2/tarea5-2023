<?php
require_once 'FigurasGeometricas/FiguraGeometrica.php';
class Rombo implements FiguraGeometrica
{
    private $diagonalMayor;
    private $diagonalMenor;
    private $lado;

    public function __construct($diagonalMayor, $diagonalMenor, $lado)
    {
        $this->diagonalMayor = $diagonalMayor;
        $this->diagonalMenor = $diagonalMenor;
        $this->lado = $lado;
    }

    public function calcularArea()
    {
        return ($this->diagonalMayor * $this->diagonalMenor) / 2;
    }

    public function calcularPerimetro()
    {
        return 4 * $this->lado;
    }
}

?>