<?php 

    $Macammacamperangkatkeraskomputer = ['Motherboard', 'Processor', 'Hard Disk', 'PC Coller', 'VGA Card', 'SSD'];

    array_push($Macammacamperangkatkeraskomputer, 'Card Reader', 'Modem');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4b</title>
</head>
<body>
    <h2>Macam-macam perangkat keras komputer</h2>
    <ol>
        <?php for($x = 0; $x <= 5; $x++) { ?>
            <li><?= $Macammacamperangkatkeraskomputer[$x] ?></li>
        <?php } ?>
    </ol>
    <h2>Macam-macam perangkat keras komputer baru</h2>
    <ol>
        <?php 
            sort($Macammacamperangkatkeraskomputer); //
            for($x = 0; $x < count($Macammacamperangkatkeraskomputer); $x++) { ?>
                <li><?= $Macammacamperangkatkeraskomputer[$x]; ?></li>
        <?php } ?>
    </ol>

</body>
</html