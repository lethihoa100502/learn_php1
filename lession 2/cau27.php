<?php
function findLargestNegative($array) {
    $largestNegative = null;

    foreach ($array as $value) {
        if ($value < 0 && ($largestNegative === null || $value > $largestNegative)) {
            $largestNegative = $value;
        }
    }

    return $largestNegative;
}

// Mảng ban đầu
$array = array(5, -3, 0, -7, 12, -9, -2);

$largestNegative = findLargestNegative($array);

if ($largestNegative !== null) {
    echo "Số âm lớn nhất trong mảng: " . $largestNegative;
} else {
    echo "Không có số âm trong mảng.";
}
?>


