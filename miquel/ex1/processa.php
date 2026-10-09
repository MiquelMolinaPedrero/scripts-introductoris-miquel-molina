<html>
<head>
    <title>Resultat Exercici 1</title>
</head>
<body>
<?php
$nom = $_POST['nom'];
$cognoms = $_POST['cognoms'];
$email = $_POST['email'];
$missatge = $_POST['missatge'];

echo "Missatge rebut, " . $nom . ". Gràcies per contactar. Et respondrem a " . $email;
?>
</body>
</html>