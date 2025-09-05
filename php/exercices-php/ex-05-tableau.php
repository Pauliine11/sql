<?php
    require_once 'partials/head.php';
?>
    <h1>Exercice Tableau</h1><br>
    <h2>Exercice 1</h2>
    <?php
        $films = ['Avatar', 'Dragon', 'Interstellar', 'Harry Potter', 'Princesse Mononoké'];
        var_dump($films);
    ?>

    <h2>Exercice 2</h2>
    <?php
    $identity = array(
        'prenom' => 'Lynn',
        'nom' => 'Okamura',
        'age' => 32
        );

        echo "<p>Mon prénom est : $identity[prenom]</p>";
        echo "<p>Mon nom de famille est : $identity[nom]</p>";
        echo '<p>Mon age est :' . $identity['age'] . '</p>';
    ?>

    <h2>Exercice 3</h2>
    <?php
        $villes = ['Helsinki', 'Paris', 'Tokyo', 'Cherbourg', 'Dallas'];
        echo '<p>Taille du tableau $villes :' . count($villes) . '</p>';
    ?>

    <h2>Exercice 4</h2>
    <?php
        $mois = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];

        for ($i = 0; $i < sizeof($mois); $i++) {
            echo "<p>$mois[$i]</p>";
        }
    ?>

    <h2>Exercice 5</h2>
    <?php
        $animaux = [
            "chien" => "aboiement",
            "chat" => "miaulement",
            "coq" => "cocorico"
        ];

        foreach ($animaux AS $animal => $bruit) {
            echo "<p>Le $animal fait un $bruit . </p>";
        }
    ?>
<?php
    require_once 'partials/footer.php';
?>