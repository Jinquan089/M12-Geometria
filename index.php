<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Calculadora de Figuras Geométricas</title>
</head>
<body>
    <h1>Seleccione el tipo de figura:</h1>
    <form id="figuraForm" method="post">
        <label for="tipo_figura">Tipo de Figura:</label>
        <select name="tipo_figura" id="tipo_figura">
            <option value="" selected disabled></option>
            <option value="Triangulo">Triángulo</option>
            <option value="Rectangulo">Rectángulo</option>
            <option value="Cuadrado">Cuadrado</option>
            <option value="Circulo">Círculo</option>
        </select>
        <br>
        <div id="parametros"></div>
        <br>
        <input type="submit" value="Siguiente">
    </form>
    <p id="resultado"></p>
</body>
</html>

<script src="./ajax/script.js"></script>
