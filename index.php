<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Figuras Geométricas</title>
</head>
<body>
    <h1>Seleccione el tipo de figura:</h1>
    <form action="calcular.php" method="post">
        <label for="tipo_figura">Tipo de Figura:</label>
        <select name="tipo_figura" id="tipo_figura">
            <option value="Triangulo">Triángulo</option>
            <option value="Rectangulo">Rectángulo</option>
            <option value="Cuadrado">Cuadrado</option>
            <option value="Circulo">Círculo</option>
        </select>
        <br>
        <input type="submit" value="Siguiente">
    </form>
</body>
</html>
