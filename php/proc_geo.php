<?php
if(isset($_POST['tipo_figura'])){
    $tipoFigura = $_POST['tipo_figura'];

    switch($tipoFigura){
        case 'Triangulo':
            echo '<label for="lado1">Lado 1:</label><input type="text" name="lado1" id="lado1"><br>';
            echo '<label for="lado2">Lado 2:</label><input type="text" name="lado2" id="lado2"><br>';
            break;
        case 'Rectangulo':
            echo '<label for="lado1">Lado 1:</label><input type="text" name="lado1" id="lado1"><br>';
            echo '<label for="lado2">Lado 2:</label><input type="text" name="lado2" id="lado2"><br>';
            break;
        case 'Cuadrado':
            echo '<label for="lado">Lado:</label><input type="text" name="lado1" id="lado1"><br>';
            break;
        case 'Circulo':
            echo '<label for="radio">Radio:</label><input type="text" name="lado1" id="lado1"><br>';
            break;
        default:
            break;
    }
}
?>
