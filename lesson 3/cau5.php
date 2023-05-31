<!DOCTYPE html>
<html>
<head>
    <title>Dãy số từ 1 đến 100</title>
    <style>
        .even {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            echo '<span class="even">' . $i . '</span> ';
        } else {
            echo $i . ' ';
        }
    }
    ?>
</body>
</html>






