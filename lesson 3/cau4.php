<?php
function printNumbers($start, $end) {
    for ($i = $start; $i <= $end; $i++) {
        echo $i . " ";
    }
}

// Gọi hàm để in ra các số từ 1 đến 100
printNumbers(1, 100);
?>