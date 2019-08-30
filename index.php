<?php

$nazevAkce = "Párty Czechitas";
$poradatel = "LMC";
$mistoKonani = "Praha";

$kapacita = 30;
$prihlaseno = 5;
$zbyvaMist = $kapacita - $prihlaseno;

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
</body>
</html>