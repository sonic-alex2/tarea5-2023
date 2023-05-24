<?php

class FiguraGeometricaFactoryImpl extends FiguraGeometricaFactory
{
    private static $instance;

    private function __construct()
    {
        // Constructor privado para evitar la creación directa de instancias
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function crearFigura($parametros)
    {
        $tipo = $parametros['tipo'];

        switch ($tipo) {
            case 'triangulo':
                return new Triangulo($parametros['base'], $parametros['altura']);
            case 'cuadrado':
                return new Cuadrado($parametros['lado']);
            case 'rombo':
                return new Rombo($parametros['diagonalMayor'], $parametros['diagonalMenor'], $parametros['lado']);
            case 'trapecio':
                return new Trapecio($parametros['baseMayor'], $parametros['baseMenor'], $parametros['lado1'], $parametros['lado2'], $parametros['altura']);
            case 'circulo':
                return new Circulo($parametros['radio']);
            case 'rectangulo':
                return new Rectangulo($parametros['base'], $parametros['altura']);
            // Implementaciones para las demás figuras geométricas
            default:
                throw new Exception("Tipo de figura geométrica no válido.");
        }
    }
}

?>
