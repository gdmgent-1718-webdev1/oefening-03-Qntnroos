<?php
    $x = 10;
    $y =  7;
    $sum = $x + $y;
    $difference = $x - $y;
    $multiply = $x * $y;
    $divide = $x / $y;
    $rest = $x % $y;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oefening3 - Quinten Roos</title>
</head>
<body>
    <p><?= $x  ?> + <?= $y  ?> = <?= $sum ?></p>
    <p><?= $x  ?> - <?= $y  ?> = <?= $difference ?></p>
    <p><?= $x  ?> * <?= $y  ?> = <?= $multiply ?></p>
    <p><?= $x  ?> / <?= $y  ?> = <?= $divide ?></p>
    <p>De rest van <?= $x  ?> en <?= $y  ?>is <?= $rest ?></p>
</body>
</html>