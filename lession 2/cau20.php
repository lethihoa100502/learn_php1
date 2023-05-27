<?php
function addElementToBeginning($array, $element) {
    array_unshift($array, $element);
    return $array;
}

// Mảng ban đầu
$array = array(2, 3, 4, 5);

// Phần tử cần thêm vào đầu mảng
$element = 1;

$modifiedArray = addElementToBeginning($array, $element);

echo "Mảng sau khi thêm phần tử vào đầu: ";
foreach ($modifiedArray as $element) {
    echo $element . " ";
}
?>
