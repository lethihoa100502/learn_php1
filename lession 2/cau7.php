<?php
function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Số nguyên dương cần tính giai thừa
$n = 5;

$result = factorial($n);

echo "Giai thừa của " . $n . " là: " . $result;
?>
