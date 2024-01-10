<?php
class Circulo extends FiguraGeometrica implements PerimetroM {

    // Constructor que utiliza el constructor de la clase padre
    public function __construct($radio) {
        parent::__construct("Circulo", $radio);
    }

    // Métodos propios de getters y setters
    public function getRadio() {
        return $this->getLado1();
    }

    public function setRadio($radio) {
        $this->setLado1($radio);
    }

    // Método heredado para calcular el área
    public function area() {
        return pi() * ($this->getLado1() ** 2);
    }

    // Método de la interfaz PerimetroM para calcular el perímetro
    public function calcularPerimetro() {
        return 2 * pi() * $this->getLado1();
    }

    // Método para obtener una representación en cadena de la instancia
    public function toString() {
        return "Círculo de tipo: {$this->getTipoFigura()}, Radio: {$this->getLado1()}";
    }
}

// Ejemplo de uso
$circulo = new Circulo(5);
$area = $circulo->area();
$perimetro = $circulo->calcularPerimetro();
echo $circulo->toString() . "\n";
echo "Área: $area\n";
echo "Perímetro: $perimetro";
?>