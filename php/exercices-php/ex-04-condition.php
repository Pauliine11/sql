<?php
    require_once 'partials/head.php';
?>
    <h1>Exercice Condition</h1><br>
    <h2>Exercice 1</h2>
    <?php
        $age = 156;
        if(($age >= 0) && ($age <= 120) && (is_int($age))){
            echo "<p>L'age est valide</p>";
        }else{
            echo "<p>L'age n'est pas valide</p>";
        }
        var_dump(is_int($age));
    ?>

    <h2>Exercice 2</h2>
    <?php
        $jour= 9;

        switch ($jour) {
            case 1 : 
                echo '<p>Lundi </p>';
            break;
            
            case 2 :
                echo '<p>Mardi</p>';
            break;  
        
            case 3 :
                echo 'Mercredi</p>';
            break;
            
            case 4 : 
                echo '<p>Jeudi</p>';
            break;
            
            case 5 :
                echo '<p>Vendredi</p>';
            break;  
        
            case 6 :
                echo '<p>Samedi</p>';
            break;

            case 7 :
                echo '<p>Dimanche</p>';
            break;
        
            default:
                echo '<p>Jour invalide</p>';
            break;    
        }
    ?>

    <h2>Exercice 3</h2>
    <?php
        $varA = 1;
        $varB = '2';

        if ($varA == $varB){
            echo '<p>$varA est égal à $varB en valeur uniquement </p>';
        } else { 
            echo'<p>$varA est pas égal à $varB en valeur uniquement </p>';
        }


        if ($varA === $varB) {
            echo '<p>$varA est égal à $varB en valeur ET en type</p>';
        } else {
            echo '<p>$varA est différent de $varB en valeur ou en type</p>';
        }
    ?>

    <h2>Exercice 4</h2>
    <?php
        $var;

        if (isset($var)){
            echo "<p> La variable est définie et vaut : $var</p>";
        }else{
            echo "<p>La variable n'est pas définie</p>";
        }
    ?>

    <h2>Exercice 5</h2>
    <?php
        $nom;

        if(empty($nom)){
            echo "<p>Veuillez indiquer vôtre nom</p>";
        } else{
            echo "<p>Merci $nom</p>";
        }
    ?>

    <h2>Exercice 6</h2>
    <?php
        $digital = true;
        $mdp = true;

        if ($digital XOR $mdp){
            echo "<p>Tu peux te connecter</p>";
        }else{
            echo "<p>Tu ne peux pas te connecter</p>";
        }
    ?>
<?php
    require_once 'partials/footer.php';
?>
        
   

