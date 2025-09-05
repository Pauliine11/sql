<?php
    require_once 'partials/head.php';
?>
    <h1>Exercices</h1><br>
    <h2>Exercice 1</h2>
    <?php 
        $nom = "Kira";
        $prenom = "Nami";

        echo "<p> $nom $prenom </p>";
    ?>

    <h2>Exercice 2</h2>
    <?php
        $phase1 = "Le ciel est";
        $phase2 = "bleu aujourd'hui.";

        echo "<p>$phase1 $phase2 </p>";
    ?>

    <h2>Exercice 3</h2>
    <?php
        $mot1 = "j'aime";
        $mot2 = "le";
        $mot3 = "PHP";

        echo "<p>$mot1 $mot2 $mot3</p>";
    ?>

    <h2>Exercice 4</h2>
    <?php
        $texte = "Je vais";
        $texte .= " à la plage.";
        echo "<p>$texte</p>";
    ?>

    <h2>Exercice 5</h2>
    <?php
        $citation = "Il a dit : \"Le PHP est fantastique\"";
        echo "<p>$citation</p>";
    ?>

    <h2>Exercice 6</h2>
    <?php
        $mot = "PHP";

        echo "<p>Le mot est : $mot</p>";
    ?>

    <h2>Exercice 7</h2>
    <?php
        $nom = "Bernard";

        echo "<p>Bonjour $nom, bienvenue sur nôtre site !</p>";        
    ?>

    <h2>Exercice 8</h2>
    <?php
        $citation = 'la vie est belle';
        $citation .= ', surtout quand on code en PHP !';

        echo "<p>$citation</p>";
    ?>

    <h2>Exercice 9</h2>
    <?php
        $a = 5;
        $b = 10;
        $total = $a + $b;

        echo "<p>La somme de $a et de $b est $total</p>";
    ?>
<?php
    require_once 'partials/footer.php';
?>