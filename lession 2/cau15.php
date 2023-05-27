<?php
function reverseString($string) {
    $length = strlen($string);
    $reversedString = "";

    for ($i = $length - 1; $i >= 0; $i--) {
        $reversedString .= $string[$i];
    }

    return $reversedString;
}

// Chuỗi ban đầu
$string = "Hello, World!";

$reversedString = reverseString($string);

echo "Chuỗi sau khi đảo ngược: " . $reversedString;
?>






