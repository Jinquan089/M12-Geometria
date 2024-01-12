<?php
include('./figura.php');
include('./interface.php');
class Cuadrado extends FiguraGeometrica implements PerimetroM {

    // Constructor que utiliza el constructor de la clase padre
    public function __construct($lado) {
        parent::__construct("Cuadrado", $lado);
    }

    // Métodos propios de getters y setters
    public function getLado() {
        return $this->getLado1();
    }

    public function setLado($lado) {
        $this->setLado1($lado);
    }

    // Método heredado para calcular el área
    public function area() {
        return $this->getLado1() ** 2;
    }

    // Método de la interfaz PerimetroM para calcular el perímetro
    public function calcularPerimetro() {
        return 4 * $this->getLado1();
    }

    // Método para obtener una representación en cadena de la instancia
    public function toString() {
        return "Cuadrado de tipo: {$this->getTipoFigura()}";
    }
}

// Ejemplo de uso

?>
