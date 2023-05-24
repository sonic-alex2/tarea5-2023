<?php
require_once 'FigurasGeometricas/FiguraGeometrica.php';
class Trapecio implements FiguraGeometrica
{
    private $baseMayor;
    private $baseMenor;
    private $lado1;
    private $lado2;
    private $altura;

    public function __construct($baseMayor, $baseMenor, $lado1, $lado2, $altura)
    {
        $this->baseMayor = $baseMayor;
        $this->baseMenor = $baseMenor;
        $this->lado1 = $lado1;
        $this->lado2 = $lado2;
        $this->altura = $altura;
    }

    public function calcularArea()
    {
        return (($this->baseMayor + $this->baseMenor) * $this->altura) / 2;
    }

    public function calcularPerimetro()
    {
        return $this->baseMayor + $this->baseMenor + $this->lado1 + $this->lado2;
    }
}
?>