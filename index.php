<?php

$nazevParty = "Párty Czechitas";

$poradatel = "Ondra, Petr, Jirka";
$lokace = "Praha";

$kapacita = 30;

$ucastnici = [
    "Petr",
    "Ondra",
    "Jirka",
];
$pocetUcastniku = count($ucastnici);

$zbyvaMist = $kapacita - $pocetUcastniku;

if ($pocetUcastniku == 0) {
    $pocetUcastniku = "Nikdo nepřijde :-(";
}

if ($zbyvaMist <= 0) {
    $zbyvaMist = "Už není místo :-(";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $nazevParty; ?></title>
</head>
<body>
    <h1><?php echo $nazevParty; ?></h1>

    <ul>
        <li>Pořadatel: <?php echo $poradatel; ?></li>
        <li>Lokalita: <?php echo $lokace; ?></li>
        <li>Kapacita: <?php echo $kapacita; ?></li>
        <li>Počet účastníků: <?php echo $pocetUcastniku; ?></li>
        <li>Zbývá míst: <?php echo $zbyvaMist; ?></li>
    </ul>
</body>
</html>