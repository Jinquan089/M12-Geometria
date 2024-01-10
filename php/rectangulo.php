<?php
include('./figura.php');
include('./interface.php');
class Rectangulo extends FiguraGeometrica implements PerimetroM {
    private $lado2;

    public function __construct($lado1, $lado2) {
        parent::__construct("Rectangulo", $lado1);
        $this->lado2 = $lado2;
    }

    // Getter y Setter para lado2
    public function getLado2() {
        return $this->lado2;
    }

    public function setLado2($lado2) {
        $this->lado2 = $lado2;
    }

    // Método para calcular el área
    public function area() {
        return $this->getLado1() * $this->lado2;
    }

    // Método de la interfaz PerimetroM para calcular el perímetro
    public function calcularPerimetro() {
        return 2 * ($this->getLado1() + $this->lado2);
    }

    // Método para obtener una representación en cadena de la instancia
    public function toString() {
        return "Rectángulo de tipo: {$this->getTipoFigura()}, Lado 1: {$this->getLado1()}, Lado 2: {$this->lado2}";
    }
}

// Ejemplo de uso
$rectangulo = new Rectangulo(5, 8);
$area = $rectangulo->area();
$perimetro = $rectangulo->calcularPerimetro();
echo $rectangulo->toString() . "\n";
echo "Área: $area\n";
echo "Perímetro: $perimetro";
?>
