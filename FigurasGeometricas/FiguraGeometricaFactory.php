<?php

/**
 * Clase abstracta FiguraGeometricaFactory.
 * Define métodos para crear figuras geométricas y calcular su área y perímetro.
 */
abstract class FiguraGeometricaFactory
{
    /**
     * Método abstracto para crear una figura geométrica.
     * @param array $parametros Los parámetros de la figura geométrica.
     * @return FiguraGeometrica La instancia de la figura geométrica creada.
     */
    abstract public function crearFigura($parametros);

    /**
     * Método para calcular el área de una figura geométrica.
     * @param array $parametros Los parámetros de la figura geométrica.
     * @return float El área de la figura geométrica.
     */
    public function calcularArea($parametros)
    {
        // Crear la figura geométrica utilizando el método crearFigura()
        $figura = $this->crearFigura($parametros);
        
        // Calcular el área de la figura utilizando el método calcularArea() de la instancia
        return $figura->calcularArea();
    }

    /**
     * Método para calcular el perímetro de una figura geométrica.
     * @param array $parametros Los parámetros de la figura geométrica.
     * @return float El perímetro de la figura geométrica.
     */
    public function calcularPerimetro($parametros)
    {
        // Crear la figura geométrica utilizando el método crearFigura()
        $figura = $this->crearFigura($parametros);
        
        // Calcular el perímetro de la figura utilizando el método calcularPerimetro() de la instancia
        return $figura->calcularPerimetro();
    }
}

?>
