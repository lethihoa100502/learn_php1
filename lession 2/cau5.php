<?php
function findMinMax($array) {
    $min = $array[0];
    $max = $array[0];

    foreach ($array as $value) {
        if ($value < $min) {
            $min = $value;
        }
        if ($value > $max) {
            $max = $value;
        }
    }

    return array('min' => $min, 'max' => $max);
}

// Mảng cần kiểm tra
$array = array(10, 5, 8, 3, 2, 9);

$result = findMinMax($array);

echo "Giá trị nhỏ nhất trong mảng là: " . $result['min'] . "\n";
echo "Giá trị lớn nhất trong mảng là: " . $result['max'] . "\n";
?>




