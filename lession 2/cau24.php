<?php
function findLargestOdd($array) {
    $largestOdd = null;

    foreach ($array as $value) {
        if ($value % 2 !== 0 && ($largestOdd === null || $value > $largestOdd)) {
            $largestOdd = $value;
        }
    }

    return $largestOdd;
}

// Mảng ban đầu
$array = array(2, 4, 7, 5, 9, 3, 6);

$largestOdd = findLargestOdd($array);

if ($largestOdd !== null) {
    echo "Số lẻ lớn nhất trong mảng: " . $largestOdd;
} else {
    echo "Không có số lẻ trong mảng.";
}
?>
