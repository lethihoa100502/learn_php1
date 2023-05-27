<?php
function isPrimeNumber($number) {
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

$number = 17;

if (isPrimeNumber($number)) {
    echo $number . " là số nguyên tố.";
} else {
    echo $number . " không phải là số nguyên tố.";
}
?>
