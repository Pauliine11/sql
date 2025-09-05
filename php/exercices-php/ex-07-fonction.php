<?php
    require_once 'partials/head.php';
?>
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
            echo "<p>Hello Monsieur $name !</p>";
        }
        greetUser('Booba');
    ?>

    <h2>Exercice 3</h2>
    <?php
        function sum($a, $b){
            $total = $a + $b;
            return $total;
        }
        $result = sum(15, 85);
        echo "<p>mon resultat : $result</p>";
    ?>

    <h2>Exercice 4</h2>
    <?php
        function greetWithTime($name, $timeOfDay = "day"){
            return "Good $timeOfDay, $name";
        }
        $maPhrase = greetWithTime("Loup-Blié");
        echo "<p>$maPhrase</p>";
        
    ?>
    
    <h2>Exercice 5</h2>
    <?php
        function checkEligibility($age, $hasLicense){

            if (($age >= 18) && ($hasLicense == true)) {
                return "Eligible";
            } else {
                return "Not Eligible";
            }

        }

        $eligibility = checkEligibility(18,false);
        echo "<p>$eligibility</p>";
    ?>
<?php
    require_once 'partials/footer.php';
?>      

        



