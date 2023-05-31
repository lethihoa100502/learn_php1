<?php
$year = date("Y"); // Lấy năm hiện tại

if ($year % 2 == 0) {
    echo "Năm $year là năm chẵn";
} else {
    echo "Năm $year là năm lẻ";
}
?>