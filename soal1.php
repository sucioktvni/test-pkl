<?php

$input = [
    [1,1,0,1,1,1],
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
    

    <?php foreach($input as $sis) : ?>
    <ul>
        
        <li>Input : [1,1,0,1,1,1]</li>
        <li>Output : <?= $sis[2]; ?></li>
        
    </ul>
    <?php endforeach; ?>
</body>
</html>



<?php

$input = [
    [1,0,0,1,0,1,1],
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
    

    <?php foreach($input as $sis) : ?>
    <ul>
        
        <li>Input : [1,0,0,1,0,1,1]</li>
        <li>Output : <?= $sis[3]; ?></li>
        
    </ul>
    <?php endforeach; ?>
</body>
</html>
