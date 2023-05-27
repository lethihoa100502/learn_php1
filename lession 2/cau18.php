<?php
function countOccurrences($array, $element) {
    $count = 0;

    foreach ($array as $value) {
        if ($value == $element) {
            $count++;
        }
    }

    return $count;
}

// Mảng ban đầu
$array = array(1, 2, 3, 2, 4, 2, 5, 2);

// Phần tử cần đếm số lần xuất hiện
$element = 2;

$occurrences = countOccurrences($array, $element);

echo "Số lần xuất hiện của phần tử " . $element . " trong mảng: " . $occurrences;
?>

