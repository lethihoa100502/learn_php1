<?php
function generateFibonacci($n) {
    $fibonacci = array();

    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    for ($i = 2; $i <= $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

function printFibonacciInRange($start, $end) {
    $fibonacci = generateFibonacci($end);

    foreach ($fibonacci as $value) {
        if ($value >= $start && $value <= $end) {
            echo $value . " ";
        }
    }
}

// Khoảng cần in số Fibonacci
$start = 1;
$end = 100;

echo "Các số Fibonacci từ " . $start . " đến " . $end . " là: ";
printFibonacciInRange($start, $end);
?>



