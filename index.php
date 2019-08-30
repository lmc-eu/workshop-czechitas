<?php

$nazevAkce = "Párty Czechitas";
$poradatel = "LMC";
$mistoKonani = "Praha";

$kapacita = 30;

$ucastnici = [
    "Petr",
    "Ondra",
    "Jirka",
];
$prihlaseno = count($ucastnici);

$zbyvaMist = $kapacita - $prihlaseno;

if ($prihlaseno == 0) {
    $prihlaseno = "Nikdo nepřijde :(";
}

if ($zbyvaMist <= 0) {
    $zbyvaMist = "Už není místo :(";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $nazevAkce; ?></title>
</head>
<body>
    <h1><?php echo $nazevAkce; ?></h1>

    <ul>
        <li>Pořadatel: <?php echo $poradatel; ?></li>
        <li>Místo konání: <?php echo $mistoKonani; ?></li>
        <li>Kapacita: <?php echo $kapacita; ?></li>
        <li>Přihlášeno účastníků: <?php echo $prihlaseno; ?></li>
        <li>Zbývá míst: <?php echo $zbyvaMist; ?></li>
    </ul>

    <h2>Přihlášení účastníci</h2>
    <ol>
        <?php
        foreach ($ucastnici as $ucastnik) {
            echo "<li>";
            echo $ucastnik;
            echo "</li>";
        }
        ?>
    </ol>
</body>
</html>