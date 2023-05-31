<?php
function printYears($years) {
    foreach ($years as $year) {
        echo $year . " ";
    }
}

$nam = array(1990, 1991, 1992, 1993, 1994, 1995);

// Gọi hàm để in ra các năm trong mảng $nam
printYears($nam);
?>