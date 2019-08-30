<?php
$nazevParty = "Czechitas";
$poradatel = "Ondra, Petr, Jirka";
$misto = "Praha";
$kapacita = 30;
$pocetUcastniku = 5;
$volnaKapacita = $kapacita - $pocetUcastniku;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Party <?php echo $nazevParty; ?></title>
</head>
<body>
    <h1>Party <?php echo $nazevParty; ?></h1>

    <ul>
        <li>Pořadatel: <?php echo $poradatel; ?></li>
        <li>Místo: <?php echo $misto; ?></li>
        <li>Počet míst: <?php echo $kapacita; ?></li>
        <li>Zbývá míst: <?php echo $volnaKapacita; ?></li>
        <li>Příjde: <?php echo $pocetUcastniku; ?></li>
    </ul>
</body>
</html>