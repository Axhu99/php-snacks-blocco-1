<?php
$matches = [
    [
        'home_team' => 'Acqua S.Bernardo Cantu',
        'away_team' => 'Oriora Pistoia',
        'ht_points' => 60,
        'away_points' => 45
    ],
    [
        'home_team' => 'Carugate',
        'away_team' => 'Cernusco',
        'ht_points' => 74,
        'away_points' => 20
    ],
    [
        'home_team' => 'Fortitudo Pompea Bologna',
        'away_team' => 'Dolomiti Energia Trentino',
        'ht_points' => 40,
        'away_points' => 62
    ],
    [
        'home_team' => 'Pallacanestro Trieste',
        'away_team' => 'Virtus Roma',
        'ht_points' => 33,
        'away_points' => 50
    ],
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
        <?php foreach ($match as $matches) : ?>

            <li>
                <!-- Stampare squadra di casa, ospite e i punti  -->
                <?= $match['home_team'] ?> - <?= $match['away_team'] ?> | <?= "{$match['ht_points']} - {$match['away_points']}" ?>
            </li>

        <?php endforeach; ?>
    </ul>
</body>

</html>