<?php

include('./figura.php');
include('./interface.php');
class Triangulo extends FiguraGeometrica implements PerimetroM {
    private $lado2;

    public function __construct($lado1, $lado2) {
        parent::__construct("Triangulo", $lado1);
        $this->lado2 = $lado2;
    }

    public function getLado2() {
        return $this->lado2;
    }

    public function setLado2($lado2) {
        $this->lado2 = $lado2;
    }

    public function calcularLado3() {
        // Calcula el lado3 usando el teorema de Pitágoras
        return sqrt($this->getLado1()**2 + $this->lado2**2);
    }

    public function area() {
        // Calcula el área utilizando la fórmula de Herón
        $lado3 = $this->calcularLado3();
        // semiperímetro
        $s = ($this->getLado1() + $this->lado2 + $lado3) / 2;
        return sqrt($s * ($s - $this->getLado1()) * ($s - $this->lado2) * ($s - $lado3));
    }

    public function calcularPerimetro() {
        $lado3 = $this->calcularLado3();
        return $this->getLado1() + $this->lado2 + $lado3;
    }
}
