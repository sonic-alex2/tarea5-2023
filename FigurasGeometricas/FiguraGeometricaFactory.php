<?php

abstract class FiguraGeometricaFactory
{
    abstract public function crearFigura($parametros);

    public function calcularArea($parametros)
    {
        $figura = $this->crearFigura($parametros);
        return $figura->calcularArea();
    }

    public function calcularPerimetro($parametros)
    {
        $figura = $this->crearFigura($parametros);
        return $figura->calcularPerimetro();
    }
}

?>
