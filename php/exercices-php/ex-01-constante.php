<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Constante</title>
</head>
<body>
    <h1>Exercices</h1><br>

    <h2>Exercice 1</h2>
    <?php
        define('PI', 3.14159);
        echo '<p>' . PI . '</p>';
    ?> 
    
    <h2>Exercice 2</h2>
    <?php
        define('LARGEUR', 389);
        define('LONGUEUR', 899);

        $result = LARGEUR * LONGUEUR;
        echo '<p>' . $result . '</p>';
    ?>  

    <h2>Exercice 3</h2>
    <?php
        echo '<p>'.__FILE__.'</p>';
    ?>

    <h3>Exercice 4</h3>
    <?php
        define('PREFIXE', 'Bonjour');
        $x = "tout";
        $y = "le";
        $z = "monde";

        echo "<p>" . PREFIXE . " $x $y $z</p>";
    ?>

    <h2>Exercice 5</h2>
    <?php
        define('SUJET','la France');
        $capitale = 'Paris.';

        echo "<p>La capitale de" . SUJET . " est $capitale</p>";
    ?>

    <h2>Exercice 6</h2>
    <?php
        define ('TAUX_TVA', 0.2);
        $prixHT = 100;
        $prixTTC = $prixHT + ($prixHT * TAUX_TVA);
        echo "<p>Prix TTC : $prixTTC</p>";
    ?>

    <h2>Exercice 7</h2>
    <?php
        define('EURO_VERS_USD', 1.2);
        $euros = 50;
        $dollars = $euros * EURO_VERS_USD;
        echo "<p>$euros euros = $dollars USD</p>";
    ?>

    <h2>Exercice 8</h2>
    <?php
        define('SEUL', 10);
        $contenant = 52;
        echo "Le nombre : $contenant";
        if ($contenant > SEUL) {
            echo '<p>'. 'Le nombre est supérieur à' . ' ' . SEUL . '</p>';
        } else {
            echo '<p>'. 'Le nombre est inférieur à' . ' ' . SEUL . '</p>';
        };
    ?>

    <h2>Exercice 9</h2>
    <?php
        define('URL_SITE', 'https://developer.mozilla.org');
        $chemin = "/home";
        $urlComplete = URL_SITE . $chemin;
        echo "<a href= '$urlComplete'>Site</a>";
    ?>

    <h2>Exercice 10</h2>
    <?php
       define('AGE_LEGAL', 18);
        $age = rand(1,99);
        if ($age >= AGE_LEGAL) {
            echo "<p>La personne à $age donc elle est majeure</p>";
        } else {
            echo "<p>La personne à $age donc elle est mineure</p>";
        };
    ?>
</body>
</html>