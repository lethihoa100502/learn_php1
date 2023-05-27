<?php
function isPrime($number) {
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

function findPrimes($start, $end) {
    $primes = array();

    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }

    return $primes;
}

// Khoảng cần tìm số nguyên tố
$start = 1;
$end = 20;

$primeNumbers = findPrimes($start, $end);

echo "Các số nguyên tố từ " . $start . " đến " . $end . " là: ";
foreach ($primeNumbers as $prime) {
    echo $prime . " ";
}
?>

