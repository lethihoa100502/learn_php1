<?php
class IntegerArray {
    private $array;

    public function __construct($array) {
        $this->array = $array;
    }

    public function calculateSum() {
        return array_sum($this->array);
    }

    public function calculateAverage() {
        $sum = $this->calculateSum();
        $count = count($this->array);
        return $sum / $count;
    }

    public function findMax() {
        return max($this->array);
    }
}
$array = [1,2,3,4];
$less3 = new IntegerArray($array);
echo "Total: ". $less3->calculateSum(). "<br />";
echo "Total: ". $less3->calculateAverage(). "<br />";
echo "Total: ". $less3->findMax();
echo "<br />";
?>