<?php
function findPerfectSquares($start, $end) {
    $perfectSquares = [];

    for ($i = $start; $i <= $end; $i++) {
        if (sqrt($i) == intval(sqrt($i))) {
            $perfectSquares[] = $i;
        }
    }

    return $perfectSquares;
}

$start = 1;
$end = 20;
$perfectSquares = findPerfectSquares($start, $end);

echo "Các số chính phương trong khoảng từ $start đến $end là: ";
foreach ($perfectSquares as $number) {
    echo $number . " ";
}
?>