<?php

//se genera una clase para que funcione como implementadora de la fabrica
class FiguraGeometricaFactoryImpl extends FiguraGeometricaFactory
{
    private static $instance;

    private function __construct()
    {
        // Constructor privado para evitar la creación directa de instancias
    }

    // Método para obtener la instancia única de la clase
    public static function getInstance()
    {
        // Verificar si la instancia aún no ha sido creada
        if (!self::$instance) {
            // Si no existe una instancia, crear una nueva
            self::$instance = new self();
        }
        // Devolver la instancia existente o recién creada
        return self::$instance;
    }

    /**
    * Método para crear una figura geométrica basado en los parámetros proporcionados.
    * @param array $parametros Los parámetros de la figura geométrica.
    * @return FiguraGeometrica La instancia de la figura geométrica creada.
    * @throws Exception Si se proporciona un tipo de figura geométrica no válido.
    */
    public function crearFigura($parametros)
    {
        // Obtener el tipo de figura del arreglo de parámetros
        $tipo = $parametros['tipo'];

        // Crear la figura geométrica según el tipo proporcionado
        switch ($tipo) {
            case 'triangulo':
                // Crear un objeto Triangulo con los parámetros específicos
                return new Triangulo($parametros['base'], $parametros['altura']);
            case 'cuadrado':
                // Crear un objeto Cuadrado con el parámetro de lado
                return new Cuadrado($parametros['lado']);
            case 'rombo':
                // Crear un objeto Rombo con los parámetros de diagonales y lado
                return new Rombo($parametros['diagonalMayor'], $parametros['diagonalMenor'], $parametros['lado']);
            case 'trapecio':
                // Crear un objeto Trapecio con los parámetros de bases, lados y altura
                return new Trapecio($parametros['baseMayor'], $parametros['baseMenor'], $parametros['lado1'], $parametros['lado2'], $parametros['altura']);
            case 'circulo':
                // Crear un objeto Circulo con el parámetro de radio
                return new Circulo($parametros['radio']);
            case 'rectangulo':
                // Crear un objeto Rectangulo con los parámetros de base y altura
                return new Rectangulo($parametros['base'], $parametros['altura']);
            // Agregar casos para las demás figuras geométricas aquí, si es necesario
            default:
                // Si se proporciona un tipo de figura no válido, lanzar una excepción
                throw new Exception("Tipo de figura geométrica no válido.");
        }
    }
}

?>
