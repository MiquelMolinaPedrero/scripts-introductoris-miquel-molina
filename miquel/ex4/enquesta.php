<html>
<head>
    <title>Resultat Enquesta</title>
</head>
<body>
<?php
if (isset($_POST['estil'])) {
    $estil = $_POST['estil'];
    echo "Has triat: " . $estil . "<br><br>";

    if ($estil == "rock") {
        echo "Molt bona elecció, ¡llarga vida al Rock 'n' Roll!";
    } elseif ($estil == "pop") {
        echo "De Michael Jackson a Taylor Swift, les cançons més enganxoses de totes!";
    } elseif ($estil == "jazz") {
        echo "Tens un gust musical molt elegant!";
    } elseif ($estil == "reggeton") {
        echo "Tití me preguntó si tengo muchas novias... ¡A perrear amb Bad Bunny!";
    }
} else {
    echo "No has seleccionat cap estil musical.<br><br>";
    echo "<a href='enquesta.html'>Tornar enrere</a>";
}
?>
</body>
</html>