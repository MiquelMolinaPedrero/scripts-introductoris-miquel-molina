<html>
<head>
    <title>Exercici 3</title>
</head>
<body>
<?php
date_default_timezone_set('Europe/Madrid');
$hora = date("H");

if ($hora >= 5 && $hora < 14) {
    echo "<h1>Bon dia</h1>";
} elseif ($hora >= 14 && $hora < 19) {
    echo "<h1>Bona tarda</h1>";
} else {
    echo "<h1>Bona nit</h1>";
}

echo "Hora actual del servidor: " . date("H:i:s");
?>
</body>
</html>