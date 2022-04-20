<?php
$macam_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu" ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
    <?php arsort($macam_buah);
    foreach($macam_buah as $index => $buah): ?>
        <li>
            <?= "$index - $buah" ?>
        </li>
    <?php endforeach; ?>
    </ol>
    <hr>
    <ol>
    <?php sort($macam_buah);
    foreach($macam_buah as $index => $buah): ?>
        <li>
            <?= "$index - $buah" ?>
        </li>
    <?php endforeach; ?>
    </ol>
</body>
</html>