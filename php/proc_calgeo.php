<?php
if(isset($_POST['tipo_figura'])){
    $tipoFigura = $_POST['tipo_figura'];
    switch($tipoFigura){
        case 'Triangulo':
            include("triangulo.php");
            $triangulo = new Triangulo($_POST["lado1"], $_POST["lado2"]);
            $lado3 = $triangulo->calcularLado3();
            $perimetro = $triangulo->calcularPerimetro();
            $area = $triangulo->area();
            echo $triangulo->toString() . "<br>";
            echo "El lado3 del triángulo es: $lado3<br>";
            echo "El perímetro del triángulo es: $perimetro<br>";
            echo "El área del triángulo es: $area";            
            break;
        case 'Rectangulo':
            include("rectangulo.php");
            $rectangulo = new Rectangulo($_POST["lado1"], $_POST["lado2"]);
            $area = $rectangulo->area();
            $perimetro = $rectangulo->calcularPerimetro();
            echo $rectangulo->toString() . "<br>";
            echo "Área: $area<br>";
            echo "Perímetro: $perimetro";
            break;
        case 'Cuadrado':
            include("cuadrado.php");
            $cuadrado = new Cuadrado($_POST["lado1"]);
            $area = $cuadrado->area();
            $perimetro = $cuadrado->calcularPerimetro();
            echo $cuadrado->toString() . "<br>";
            echo "Área: $area <br>";
            echo "Perímetro: $perimetro";
            break;
        case 'Circulo':
            include("circulo.php");
            $circulo = new Circulo($_POST["lado1"]);
            $area = $circulo->area();
            $perimetro = $circulo->calcularPerimetro();
            echo $circulo->toString() . "<br>";
            echo "Área: $area<br>";
            echo "Perímetro: $perimetro";
            break;
        default:
            break;
    }
}