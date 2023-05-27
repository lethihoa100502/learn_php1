<?php
function sortArrayDescending($array) {
    rsort($array);
    return $array;
}

// Mảng ban đầu
$array = array(5, 2, 8, 1, 3);

$sortedArray = sortArrayDescending($array);

echo "Mảng sau khi sắp xếp giảm dần: ";
foreach ($sortedArray as $element) {
    echo $element . " ";
}
?>