<?php 
$binatang = ['🦤','🦒','🐕‍🦺','🐒','🦈'];
$makanan = ['🍟','🌭','🍿','🧀','🍜']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Latihan2</title>
</head>
<body>
    <h1>Daftar binatang</h1>
    <ul>
        <?php foreach($binatang as $b) { ?>
        <li><?php echo $b; ?></li>
        <?php } ?>
    </ul>
    <h1>Daftar makanan</h2>
    <ul>
        <?php foreach($makanan as $m) {?>
        <li><?php echo $m; ?></li>
        <?php } ?>    
    </ul>
</body>
</html>