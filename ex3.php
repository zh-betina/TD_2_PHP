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
        <h2>3</h2>
        <?php
            include "./Compte.php";

            function getXyears($initAmount, $interet, $years) {
                $tempAcct = new Compte($initAmount, $interet);
                for ($i = 0; $i < $years; $i++) {
                    $tempAcct->un_an();
                };
                return round($tempAcct->get_montant(), 2);
            }

            echo "<p>Compte avec 200 euros et 20% d'interet :</p>";
            $inTenYears = getXyears(200, 20, 10);
            echo "<p>Apres 10 ans il aura " . $inTenYears . " d'euros</p>";
            echo "<hr>";
            echo "<p>Compte avec 1000 euros et 2% d'interet :</p>";
            $inTenYears2 = getXyears(1000, 2, 10);
            echo "<p>Apres 10 ans il aura " . $inTenYears2 . " d'euros</p>";
        ?>        
    </main>
</body>

</html>