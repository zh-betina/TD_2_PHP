<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" rel="stylesheet">
    <title>TD_2_Php</title>
</head>

<body>
    <?php include "./nav.php" ?>
    <main>
        <h2>nombre.php</h2>
        <?php
        if (isset($_GET["nombre"])) {
            $nombreVal = $_GET["nombre"];
            if (gettype($nombreVal) === "integer" || gettype($nombreVal) === "double") {
                echo "<p class='success'>Le parametre nombre ($nombreVal) est du type " . gettype($nombreVal) . ", donc c'est un nombre</p>";
            } else {
                echo "<p class='err'>Le parametre nombre ($nombreVal) est du type " . gettype($nombreVal) . ", donc ce n'est pas un nombre</p>";
            }
        } else {
            echo "<p class='err'>Le parametre nombre n'était pas transmit</p>";
        }

        echo "<p class='success'>Conclusion 4.2. : les valeurs passés en paramètre url seront toujours du type string !</p>";
        echo "<p class='success'>Conclusion 5 : les valeurs introduites dans un input du type texte sera toujours du type string!</p>";
        ?>
        <a href="ex4.php"><button>Revenir</button></a>
    </main>
</body>

</html>