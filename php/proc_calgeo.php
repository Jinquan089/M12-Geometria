<?php
include("triangulo.php");
include("rectangulo.php");
include("cuadrado.php");
include("circulo.php");

if(isset($_POST['tipo_figura'])){
    $tipoFigura = $_POST['tipo_figura'];

    switch($tipoFigura){
        case 'Triangulo':
            $triangulo = new Triangulo($_POST["lado1"], $_POST["lado2"]);
            $lado3 = $triangulo->calcularLado3();
            $perimetro = $triangulo->calcularPerimetro();
            $area = $triangulo->area();
            echo "El lado3 del triángulo es: $lado3\n";
            echo "El perímetro del triángulo es: $perimetro\n";
            echo "El área del triángulo es: $area";            
            break;
        case 'Rectangulo':
            $rectangulo = new Rectangulo($_POST["lado1"], $_POST["lado2"]);
            $area = $rectangulo->area();
            $perimetro = $rectangulo->calcularPerimetro();
            echo $rectangulo->toString() . "\n";
            echo "Área: $area\n";
            echo "Perímetro: $perimetro";
            break;
        case 'Cuadrado':
            $cuadrado = new Cuadrado($_POST["lado1"]);
            $area = $cuadrado->area();
            $perimetro = $cuadrado->calcularPerimetro();
            echo $cuadrado->toString() . "\n";
            echo "Área: $area\n";
            echo "Perímetro: $perimetro";
            break;
        case 'Circulo':
            $circulo = new Circulo($_POST["lado1"]);
            $area = $circulo->area();
            $perimetro = $circulo->calcularPerimetro();
            echo $circulo->toString() . "\n";
            echo "Área: $area\n";
            echo "Perímetro: $perimetro";
            break;
        default:
            break;
    }
}