<?php

/**
 * Interfaz FiguraGeometrica.
 * Define los métodos para calcular el área y el perímetro de una figura geométrica.
 */
interface FiguraGeometrica
{
    /**
     * Método para calcular el área de la figura geométrica.
     * @return float El área de la figura geométrica.
     */
    public function calcularArea();

    /**
     * Método para calcular el perímetro de la figura geométrica.
     * @return float El perímetro de la figura geométrica.
     */
    public function calcularPerimetro();
}

?>