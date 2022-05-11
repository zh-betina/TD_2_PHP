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
        <h2>2</h2>
        <?php
            $joueurs = [
                ['nom' => 'Mehwish', 'score' => 150],
                ['nom' => 'Laurent', 'score' => 120],
                ['nom' => 'Ines', 'score' => 98],
                ['nom' => 'Sondes', 'score' => 153],
                ['nom' => 'Davide', 'score' => 118]
            ];

            function createTable($table) {
                echo '<table>';
                foreach($table as $key => $value) {
                    echo "<tr>";
                    foreach($value as $key => $value_value) {
                        echo "<td>$value_value</td>";
                    }
                    echo "</tr>";
                }
                echo '</table>';
            }

            createTable($joueurs);
        ?>
    </main>
</body>

</html>