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
        <h2>1.1</h2>
        <?php
        $tab = [2 => 'test', 0 => 'nombre'];
        if (in_array(2, $tab))
            echo '<p> in_array: 2 est dans le tableau </p>';
        if (in_array('nombre', $tab))
            echo '<p> in_array: nombre est dans le tableau </p>';
        ?>
        <p>Le premier <u>if</u> ne trouve pas le <u>2</u> puisque 
        <u>in_array</u> cherche parmis les valeurs, non pas parmis les clés</p>
        <hr>
        <h2>1.2</h2>
        <p>Le remplacement n'est pas possible, puisque le résultat ne remplira
            pas la condition <u>if</u>. Il nous faut un retour du type boolean.
            <u>search_array</u> retourne la clé correspondant à la valeur trouvée.</p>
        </p>
    </main>
</body>

</html>