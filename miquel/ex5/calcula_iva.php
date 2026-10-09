<html>
<head>
    <title>Resultat IVA</title>
</head>
<body>
<?php
$preu = $_POST['preu'];
$tipus_iva = $_POST['tipus_iva'];

$import_iva = $preu * ($tipus_iva / 100);
$preu_total = $preu + $import_iva;

echo "Preu base: " . $preu . " euros<br>";
echo "IVA aplicat: " . $tipus_iva . "%<br>";
echo "Import de l'IVA: " . $import_iva . " euros<br>";
echo "<b>Preu total amb IVA: " . $preu_total . " euros</b>";
?>
</body>
</html>