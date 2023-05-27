<?php
function findSecondLargest($array) {
    $largest = $array[0];
    $secondLargest = $array[0];

    foreach ($array as $value) {
        if ($value > $largest) {
            $secondLargest = $largest;
            $largest = $value;
        } elseif ($value > $secondLargest && $value < $largest) {
            $secondLargest = $value;
        }
    }

    return $secondLargest;
}

// Mảng ban đầu
$array = array(5, 2, 8, 1, 9, 4, 7);

$secondLargest = findSecondLargest($array);

echo "Số lớn thứ hai trong mảng: " . $secondLargest;
?>

