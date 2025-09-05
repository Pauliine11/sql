<?php
    require_once 'partials/head.php';
?>
    <h1>Exercice date</h1>
    <h2>Exercice 1</h2>
    <?php
        echo date('d/m/Y H:i:s');
    ?>  

    <h2>Exercice 2</h2>
    <?php
        $maDate = '2024-08-08';
        $date = strtotime($maDate);
        $nouvelleDate = date('d/m/Y', $date);

        echo "<p> $nouvelleDate </p>";
    ?>

    <h2>Exercice 3</h2>
    <?php
        $datedenaissance = '15-02-1990';
        $datestromate = strtotime($datedenaissance);

        $today = time();

        //calcul
        $age = date('Y', $today) - date('Y', $datestromate);
        echo "<p>Tu as $age ans.</p>"; 

        function annive ($dateAnive){
            $now = time();// le nombre de secondes depuis 1970 à maintenant;
            $dateUser = strtotime($dateAnive);// le nombre de secondes depuis 1970 à la dtae de naissance donnée
            return date('Y', $now) - date('Y', $dateUser); // Le calcul de l'année actuelle - année de naissance
        }

        $annive = annive('23-08-2000');
        echo "<p>Mohamed à $annive !</p>";
    ?>

    <h2>Exercice 4</h2>
    <?php
        function valideDate($date){
            $test = strtotime($date);
            if(!$test){
                echo "<p>Date invalide !</p>";
            }else{
                echo "<p>Date valide !</p>";
            }
        }

        valideDate('20-09-2025');
        valideDate('33/09/2025');
    ?>
<?php
    require_once 'partials/footer.php';
?>