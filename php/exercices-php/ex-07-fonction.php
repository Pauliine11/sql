<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice fonction</title>
</head>
<body>
    <h1>Exercice fonction</h1><br>
    <h2>Exercice 1</h2>
    <?php
        function greet(){
            echo "<p>Hello world ! This is me !</p>";
        }
        greet();
    ?>

    <h2>Exercice 2</h2>
    <?php
        function greetUser($name){
            echo "<p>Hello Monsieur Booba !</p>";
        }
        greetUser('Booba');
    ?>

    <h2>Exercice 3</h2>
    <?php
        function sum($a, $b){
            $total = $a + $b;
            echo "<p>Le résultat est de : $total</p>" ;
        }
        sum(15, 85);
    ?>

    <h2>Exercice 4</h2>
    <?php
        function greetWithTime($name, $timeOfDay = "day"){
            echo "<p>Good $timeOfDay, $name!</p>";
        }
        greetWithTime("Loup-Blié");
    ?>
    
    <h2>Exercice 5</h2>
    <?php
        function checkEligibility($age, $hasLicense){
            if (($age >= 18) && ($hasLicense == true)) {
            echo "<p>Eligible</p>";
            } else {
                echo "<p>Not Eligible</p>";
            }
        }
        checkEligibility(18,false);
    ?>
</body>
</html>
        



