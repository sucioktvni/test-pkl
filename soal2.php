<?php

$soal = [
    ["h","e","l","l","o"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    <?php foreach($soal as $sis) : ?>
    <ul>
        <li>Input : ["h","e","l","l","o"]</li>
        <li>Output : <?=  $sis[4], $sis[3], $sis[2], $sis[1], $sis[0]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>