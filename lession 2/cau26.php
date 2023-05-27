<?php
function findLargestPositive($array) {
    $largestPositive = null;

    foreach ($array as $value) {
        if ($value > 0 && ($largestPositive === null || $value > $largestPositive)) {
            $largestPositive = $value;
        }
    }

    return $largestPositive;
}

// Mảng ban đầu
$array = array(-3, 0, 5, -7, 12, 9, -2);

$largestPositive = findLargestPositive($array);

if ($largestPositive !== null) {
    echo "Số dương lớn nhất trong mảng: " . $largestPositive;
} else {
    echo "Không có số dương trong mảng.";
}
?>




