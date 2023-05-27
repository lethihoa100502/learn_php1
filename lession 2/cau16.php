<?php
function countElements($array) {
    return count($array);
}

// Mảng ban đầu
$array = array(1, 2, 3, 4, 5);

$count = countElements($array);

echo "Số lượng phần tử trong mảng: " . $count;
?>