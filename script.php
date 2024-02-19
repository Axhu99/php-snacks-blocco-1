<?php
$games = [
    'Game 1' => ['Olimpia Milano','Cantù',  '55-60'],
    'Game 2' => ['Olimpia Milano','Cantù',  '55-60'],
    'Game 3' => ['Olimpia Milano','Cantù',  '55-60'],
    'Game 4' => ['Olimpia Milano','Cantù',  '55-60'],
    'Game 5' => ['Olimpia Milano','Cantù',  '55-60'],
    'Game 6' => ['Olimpia Milano','Cantù',  '55-60']
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <!-- La mia idea e' di stampare una lista di partite nei vari GAME  -->
        <?php foreach ($games as $game => $members): ?>
            <li><?= $game; ?></li>
            <ul>
                <li>
                    <!-- Stampare squadra di casa, ospite e i punti  -->
                    <?php foreach ($members as $member): ?>
                    <?= $member ?>
                    <?php endforeach; ?>
                </li>
            </ul>
        <?php endforeach; ?>
    </ul>
</body>
</html>