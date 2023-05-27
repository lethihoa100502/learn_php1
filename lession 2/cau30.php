<?php
function isSubstring($string, $substring) {
    $stringLength = strlen($string);
    $substringLength = strlen($substring);

    for ($i = 0; $i <= $stringLength - $substringLength; $i++) {
        $j = 0;

        while ($j < $substringLength && $string[$i + $j] == $substring[$j]) {
            $j++;
        }

        if ($j == $substringLength) {
            return true;
        }
    }

    return false;
}

// Chuỗi ban đầu
$string = "Hello, World!";
// Chuỗi con cần kiểm tra
$substring = "World";

if (isSubstring($string, $substring)) {
    echo "Chuỗi '$substring' là chuỗi con của '$string'.";
} else {
    echo "Chuỗi '$substring' không phải là chuỗi con của '$string'.";
}
?>



