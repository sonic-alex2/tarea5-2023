<?php
require_once 'FigurasGeometricas/FiguraGeometrica.php';
class Circulo implements FiguraGeometrica
{
    private $radio;

    public function __construct($radio)
    {
        $this->radio = $radio;
    }

    public function calcularArea()
    {
        return pi() * pow($this->radio, 2);
    }

    public function calcularPerimetro()
    {
        return 2 * pi() * $this->radio;
    }
}
?>