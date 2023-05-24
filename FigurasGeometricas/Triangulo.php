<?php

require_once 'FigurasGeometricas/FiguraGeometrica.php';

class Triangulo implements FiguraGeometrica
{
    private $base;
    private $altura;

    public function __construct($base, $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea()
    {
        return ($this->base * $this->altura) / 2;
    }

    public function calcularPerimetro()
    {
        $lado = sqrt(pow($this->base / 2, 2) + pow($this->altura, 2));
        $perimetro = 2 * $lado + $this->base;

        return $perimetro;
    }
}

?>