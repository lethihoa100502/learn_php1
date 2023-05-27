<?php
function calculateSum($array) {
    $sum = 0;

    foreach ($array as $value) {
        $sum += $value;
    }

    return $sum;
}

// Mảng cần tính tổng
$array = array(1, 2, 3, 4, 5);

$sum = calculateSum($array);

echo "Tổng của các số trong mảng là: " . $sum;
?>

