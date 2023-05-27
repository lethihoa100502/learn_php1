<?php
function findElementPosition($array, $element) {
    $positions = array();

    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == $element) {
            $positions[] = $i;
        }
    }

    return $positions;
}

// Mảng ban đầu
$array = array(1, 2, 3, 4, 2, 5, 2);

// Phần tử cần tìm vị trí
$element = 2;

$result = findElementPosition($array, $element);

if (count($result) > 0) {
    echo "Vị trí của phần tử " . $element . " trong mảng là: ";
    foreach ($result as $position) {
        echo $position . " ";
    }
} else {
    echo "Phần tử " . $element . " không có trong mảng.";
}
?>
