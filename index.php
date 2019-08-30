<?php

$nazevParty = "Hard";
$poradatel = "Petr";
$misto = "Praha";
$kapacita = 30;

$ucastnici = explode("\n", file_get_contents("ucastnici.txt"));

if (isset($_GET["pridej"])) {
    $novyUcastnik = $_GET["pridej"];
    $ucastnici[] = $novyUcastnik;

    file_put_contents("ucastnici.txt", implode("\n", $ucastnici));

    header("Location: /");
    exit;
}

$pocetUcastniku = count($ucastnici);
$volnaKapacita = $kapacita - $pocetUcastniku;

if ($pocetUcastniku == 0) {
    $pocetUcastniku = "Nikdo nepřijde :-(";
}

if ($volnaKapacita <= 0) {
    $volnaKapacita = "Kapacita je vyčerpána";
}

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
        <li>Čas: 31. 8. 2019</li>
        <li>Místo: <?php echo $misto; ?></li>
        <li>Počet míst: <?php echo $kapacita; ?></li>
        <li>Zbývá míst: <?php echo $volnaKapacita; ?></li>
        <li>Příjde: <?php echo $pocetUcastniku; ?></li>
    </ul>

    <h2>Účastníci</h2>
    <ol>
        <?php
        foreach ($ucastnici as $ucastnik) {
            ?>
            <li>
                <?php echo $ucastnik; ?>
            </li>
            <?php
        }
        ?>
    </ol>

    <form>
        <input type="text" name="pridej">
        <input type="submit" value="Přidat">
    </form>
</body>
</html>