<?php
class Fraction {
    private $numerator1;
    private $denominator1;
    private $numerator2;
    private $denominator2;

    public function __construct($numerator1, $denominator1, $numerator2, $denominator2) {
        $this->numerator1 = $numerator1;
        $this->denominator1 = $denominator1;
        $this->numerator2 = $numerator2;
        $this->denominator2 = $denominator2;
    }

    public function add() {
        $resultNumerator = ($this->numerator1 * $this->denominator2) + ($this->numerator2 * $this->denominator1);
        $resultDenominator = $this->denominator1 * $this->denominator2;
        return $resultNumerator. "/". $resultDenominator;
    }

    public function subtract() {
        $resultNumerator = ($this->numerator1 * $this->denominator2) - ($this->numerator2 * $this->denominator1);
        $resultDenominator = $this->denominator1 * $this->denominator2;
        return $resultNumerator. "/". $resultDenominator;
    }

    public function multiply() {
        $resultNumerator = $this->numerator1 * $this->numerator2;
        $resultDenominator = $this->denominator1 * $this->denominator2;
        return $resultNumerator. "/". $resultDenominator;
    }

    public function divide() {
        $resultNumerator = $this->numerator1 * $this->denominator2;
        $resultDenominator = $this->denominator1 * $this->numerator2;
        return $resultNumerator. "/". $resultDenominator;
    }
}
$numerator1 = 1;
$denominator1 = 2;
$numerator2 = 2;
$denominator2 = 3;
$less7 = new Fraction($numerator1, $denominator1, $numerator2, $denominator2);
echo "Add is: ". $less7->add(). "<br>";
echo "Subtract is: ". $less7->subtract(). "<br>";
echo "Multiply is: ". $less7->multiply(). "<br>";
echo "Divide is: ". $less7->divide(). "<br>";
?>