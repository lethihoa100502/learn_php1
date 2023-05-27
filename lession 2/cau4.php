<?php
function containsWord($string, $word) {
    $string = strtolower($string);
    $word = strtolower($word);

    if (strpos($string, $word) !== false) {
        return true;
    } else {
        return false;
    }
}

// Chuỗi cần kiểm tra
$string = "This is a sample string.";

// Từ cụ thể cần tìm
$word = "sample";

if (containsWord($string, $word)) {
    echo "Chuỗi chứa từ '" . $word . "'.";
} else {
    echo "Chuỗi không chứa từ '" . $word . "'.";
}
?>







