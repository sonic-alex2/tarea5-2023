<?php
require_once 'FigurasGeometricas/FiguraGeometrica.php';
class Cuadrado implements FiguraGeometrica
{
    private $lado;

    public function __construct($lado)
    {
        $this->lado = $lado;
    }

    public function calcularArea()
    {
        return $this->lado * $this->lado;
    }

    public function calcularPerimetro()
    {
        return 4 * $this->lado;
    }
}

?>