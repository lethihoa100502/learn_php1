<?php
function removeDuplicates($array) {
    return array_values(array_unique($array));
}

// Mảng ban đầu có các phần tử trùng lặp
$array = array(1, 2, 3, 2, 4, 3, 5, 1, 6);

$result = removeDuplicates($array);

echo "Mảng sau khi loại bỏ các phần tử trùng lặp: ";
foreach ($result as $value) {
    echo $value . " ";
}
?>
