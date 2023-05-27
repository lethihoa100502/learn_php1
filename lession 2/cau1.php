<?php
function isEven($number) {
    if ($number % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

// Kiểm tra số 8
$number = 8;
if (isEven($number)) {
    echo $number . " là số chẵn.";
} else {
    echo $number . " không là số chẵn.";
}