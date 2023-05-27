<?php
function findGCD($num1, $num2) {
    while ($num2 != 0) {
        $temp = $num1 % $num2;
        $num1 = $num2;
        $num2 = $temp;
    }
    return $num1;
}

function findLCM($num1, $num2) {
    $gcd = findGCD($num1, $num2);
    $lcm = ($num1 * $num2) / $gcd;
    return $lcm;
}

$num1 = 24;
$num2 = 36;

$gcd = findGCD($num1, $num2);
$lcm = findLCM($num1, $num2);

echo "Ước số chung lớn nhất của " . $num1 . " và " . $num2 . " là: " . $gcd . "<br>";
echo "Bội số chung nhỏ nhất của " . $num1 . " và " . $num2 . " là: " . $lcm;
?>

