<html>
<head>
    <title>Resultat Conversio</title>
</head>
<body>
<?php
$euros = $_POST['euros'];
$dolars = $_POST['dolars'];

$canvi_eur_a_usd = 1.08;
$canvi_usd_a_eur = 0.92;

if ($euros != "") {
    $resultat_dolars = $euros * $canvi_eur_a_usd;
    echo $euros . " euros son " . $resultat_dolars . " dolars.<br>";
}

if ($dolars != "") {
    $resultat_euros = $dolars * $canvi_usd_a_eur;
    echo $dolars . " dolars son " . $resultat_euros . " euros.<br>";
}
?>
</body>
</html>
