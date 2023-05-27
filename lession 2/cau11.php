<?php
function isArmstrongNumber($number) {
    $sum = 0;
    $temp = $number;
    $numDigits = strlen($number);

    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $numDigits);
        $temp = (int)($temp / 10);
    }

    if ($sum === $number) {
        return true;
    } else {
        return false;
    }
}

// Số cần kiểm tra
$number = 153;

if (isArmstrongNumber($number)) {
    echo $number . " là số Armstrong.";
} else {
    echo $number . " không phải là số Armstrong.";
}
?>

