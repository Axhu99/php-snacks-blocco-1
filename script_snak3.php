<?php

$paragraph = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam dignissimos libero rerum quidem illum eius quas, quaerat dolores sed voluptatibus quasi atque recusandae quisquam qui ducimus architecto tenetur? Perferendis, harum!
Temporibus aliquam maxime beatae eaque neque laboriosam! Numquam eveniet nulla asperiores vel velit iste officiis praesentium. Eum reprehenderit, vero ut voluptatum atque perspiciatis dolores nemo eligendi sed rerum corrupti officia.
Unde corporis sint suscipit autem maiores eum voluptates est aliquam, eveniet dignissimos architecto! Quibusdam quaerat molestiae dolores. Voluptate consequatur veniam ab maxime consectetur quisquam autem inventore quas molestiae delectus? Quae.
Est, vitae et? Nostrum facere minima ipsam, at, similique praesentium cum, voluptatibus aliquid dolor voluptatum est! Asperiores similique recusandae maiores vel, ducimus natus veniam consectetur nobis rerum quibusdam beatae quia?
Fugit numquam, culpa minus voluptas totam officiis at vel saepe delectus, nesciunt cumque ex magnam cupiditate aut. Deleniti et placeat delectus perferendis deserunt ab blanditiis optio esse consequuntur. Vero, culpa.";

$paragraphs = preg_split('/(.|?)/', $paragraphs); /* Per dividere con ogni separatore */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Titolo</h2>
    <article>
        <?php foreach ($paragraphs as $paragraph) : ?>
            <p><?= $paragraph ?></p>
        <?php endforeach ?>
    </article>
</body>

</html>