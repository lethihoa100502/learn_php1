<?php
function insertElement($array, $element, $position) {
    $length = count($array);

    if ($position < 0 || $position > $length) {
        echo "Vị trí chèn không hợp lệ.";
        return $array;
    }

    $result = array();

    for ($i = 0; $i < $length; $i++) {
        if ($i == $position) {
            $result[] = $element;
        }
        $result[] = $array[$i];
    }

    if ($position == $length) {
        $result[] = $element;
    }

    return $result;
}

// Mảng ban đầu
$array = array(1, 2, 3, 4, 5);

// Phần tử cần chèn
$element = 10;

// Vị trí chèn
$position = 2;

$result = insertElement($array, $element, $position);

echo "Mảng sau khi chèn phần tử: ";
foreach ($result as $value) {
    echo $value . " ";
}
?>
