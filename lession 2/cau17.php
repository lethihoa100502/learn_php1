<?php
function isPalindrome($string) {
    $string = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $string));
    $reversedString = strrev($string);

    if ($string === $reversedString) {
        return true;
    } else {
        return false;
    }
}

// Chuỗi ban đầu
$string = "A man, a plan, a canal, Panama";

if (isPalindrome($string)) {
    echo "Chuỗi là Palindrome.";
} else {
    echo "Chuỗi không phải là Palindrome.";
}
?>

