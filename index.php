<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Figuras Geometricas</title>
</head>
<body>
<div class="container">
    <!-- se crean los formularios -->
    <div class="formularios">
        <div class="form">
            <h2>Triángulo</h2>
            <form action="index.php" method="POST">
                <label for="basetri">Base:</label>
                <input type="number" name="basetri" required>
                <br>
                <label for="alturatri">Altura:</label>
                <input type="number" name="alturatri" required>
                <br>
                <input type="submit" value="Calcular">
            </form>
        </div>
        <div class="form">
            <h2>Cuadro</h2>
            <form action="index.php" method="POST">
                <label for="ladocua">Lado:</label>
                <input type="number" name="ladocua" required>
                <br>
                <input type="submit" value="Calcular">
            </form>
        </div>
        <div class="form">
            <h2>Circulo</h2>
            <form action="index.php" method="POST">
                <label for="radiocir">Radio:</label>
                <input type="number" name="radiocir" required>
                <br>
                <input type="submit" value="Calcular">
            </form>
        </div>
        <div class="form">
            <h2>Rectangulo</h2>
            <form action="index.php" method="POST">
                <label for="baserec">Base:</label>
                <input type="number" name="baserec" required>
                <br>
                <label for="alturarec">Altura:</label>
                <input type="number" name="alturarec" required>
                <br>
                <input type="submit" value="Calcular">
            </form>
        </div>
        <div class="form">
            <h2>Rombo</h2>
            <form action="index.php" method="POST">
                <label for="diagonalMayor">Diagonal Mayor:</label>
                <input type="number" name="diagonalMayor" required>
                <br>
                <label for="diagonalMenor">Diagonal Menor:</label>
                <input type="number" name="diagonalMenor" required>
                <br>
                <label for="ladorom">Lado:</label>
                <input type="number" name="ladorom" required>
                <br>
                <input type="submit" value="Calcular">
            </form>
        </div>
        <div class="form">
            <h2>Trapecio</h2>
            <form action="index.php" method="POST">
                <label for="baseMayor">Base Mayor:</label>
                <input type="number" name="baseMayor" required>
                <br>
                <label for="baseMenor">Base Menor:</label>
                <input type="number" name="baseMenor" required>
                <br>
                <label for="lado1">Lado 1:</label>
                <input type="number" name="lado1" required>
                <br>
                <label for="lado2">Lado 2:</label>
                <input type="number" name="lado2" required>
                <br>
                <label for="altura">Altura:</label>
                <input type="number" name="altura" required>
                <br>
                <input type="submit" value="Calcular">
            </form>
        </div>
    </div>

    <!-- Se imprimen los resultados -->
    <div class="result">
        <?php
            require_once 'FigurasGeometricas/FiguraGeometrica.php';
            require_once 'FigurasGeometricas/Triangulo.php';
            require_once 'FigurasGeometricas/Cuadrado.php';
            require_once 'FigurasGeometricas/Rombo.php';
            require_once 'FigurasGeometricas/Trapecio.php';
            require_once 'FigurasGeometricas/Circulo.php';
            require_once 'FigurasGeometricas/Rectangulo.php';
            require_once 'FigurasGeometricas/FiguraGeometricaFactory.php';
            require_once 'FigurasGeometricas/FiguraGeometricaFactoryImpl.php';

            $factory = FiguraGeometricaFactoryImpl::getInstance();

            // se valida si hay algo en el metodo post.
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                
                //se confirma si se envia algo con los campos del formulario triangulo
                if (isset($_POST['basetri']) && isset($_POST['alturatri'])) {
                    $basetri = $_POST['basetri'];
                    $alturatri = $_POST['alturatri'];
                    //como se crea la fabrica arriba, se puede usar mas rapido la creacion.
                    $triangulo = $factory->crearFigura(['tipo' => 'triangulo', 'base' => $basetri, 'altura' => $alturatri]);
                    echo "Área del triángulo: " . $triangulo->calcularArea() . "\n";
                    echo "Perímetro del triángulo: " . $triangulo->calcularPerimetro() . "<br>";
                } else {
                    echo 'No hay datos de triangulo <br>';
                }
                
                //se confirma si se envia algo con los campos del formulario cuadro
                if (isset($_POST['ladocua'])) {
                    $ladocua = $_POST['ladocua'];
                    //como se crea la fabrica arriba, se puede usar mas rapido la creacion.
                    $cuadrado = $factory->crearFigura(['tipo' => 'cuadrado', 'lado' => $ladocua]);
                    echo "Área del cuadrado: " . $cuadrado->calcularArea() . "\n";
                    echo "Perímetro del cuadrado: " . $cuadrado->calcularPerimetro() . "<br>";
                } else {
                    echo 'No hay datos de cuadro<br>';
                }

                //se confirma si se envia algo con los campos del formulario circulo
                if (isset($_POST['radiocir'])) {
                    $radiocir = $_POST['radiocir'];
                    //como se crea la fabrica arriba, se puede usar mas rapido la creacion.
                    $circulo= $factory->crearFigura(['tipo' => 'circulo', 'radio' => $radiocir]);
                    echo "Área del circulo: " . $circulo->calcularArea() . "\n";
                    echo "Perímetro del circulo: " . $circulo->calcularPerimetro() . "<br>";
                } else {
                    echo 'No hay datos de circulo<br>';
                }

                //se confirma si se envia algo con los campos del formulario rectangulo
                if (isset($_POST['baserec']) && isset($_POST['alturarec'])) {
                    $baserec = $_POST['baserec'];
                    $alturarec = $_POST['alturarec'];
                    //como se crea la fabrica arriba, se puede usar mas rapido la creacion.
                    $rectangulo= $factory->crearFigura(['tipo' => 'rectangulo', 'base' => $baserec,'altura'=>$alturarec]);
                    echo "Área del rectangulo: " . $rectangulo->calcularArea() . "\n";
                    echo "Perímetro del rectangulo: " . $rectangulo->calcularPerimetro() . "<br>";
                } else {
                    echo 'No hay datos de rectangulo <br>';
                }

                //se confirma si se envia algo con los campos del formulario rombo
                if (isset($_POST['diagonalMayor']) && isset($_POST['diagonalMenor']) && isset($_POST['ladorom'])) {
                    $diagonalMayor = $_POST['diagonalMayor'];
                    $diagonalMenor = $_POST['diagonalMenor'];
                    $ladorom = $_POST['ladorom'];
                    //como se crea la fabrica arriba, se puede usar mas rapido la creacion.
                    $rombo= $factory->crearFigura(['tipo' => 'rombo', 'diagonalMayor' => $diagonalMayor,'diagonalMenor'=>$diagonalMenor, 'lado'=>$ladorom]);
                    echo "Área del rombo: " . $rombo->calcularArea() . "\n";
                    echo "Perímetro del rombo: " . $rombo->calcularPerimetro() . "<br>";
                } else {
                    echo 'No hay datos de rombo <br>';
                }
                
                //se confirma si se envia algo con los campos del formulario trapecio
                if (isset($_POST['baseMayor']) && isset($_POST['baseMenor']) && isset($_POST['lado1']) && isset($_POST['lado2'])&& isset($_POST['altura'])) {
                    $baseMayor = $_POST['baseMayor'];
                    $baseMenor = $_POST['baseMenor'];
                    $lado1 = $_POST['lado1'];
                    $lado2 = $_POST['lado2'];
                    $altura = $_POST['altura'];
                    //como se crea la fabrica arriba, se puede usar mas rapido la creacion.
                    $trapecio= $factory->crearFigura(['tipo' => 'trapecio', 'baseMayor' => $baseMayor,'baseMenor'=>$baseMenor,'lado1'=>$lado1,'lado2'=>$lado2, 'altura'=>$altura]);
                    echo "Área del trapecio: " . $trapecio->calcularArea() . "\n";
                    echo "Perímetro del trapecio: " . $trapecio->calcularPerimetro() . "<br>";
                } else {
                    echo 'No hay datos de trapecio <br>';
                }
            }
        ?>
    </div>
</div>
</body>
</html>