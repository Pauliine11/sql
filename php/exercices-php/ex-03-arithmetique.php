<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Arithmétique</title>
</head>
<body>
    <h1>Exercice Arithmétique</h1><br>
    <h2>Exercice 1</h2>
    <?php
        $a = 89;
        $b = 23;

        $total = $a + $b;
        echo "<p>a + b = $total</p>";
        
        $total = $a - $b;
        echo "<p>a - b = = $total</p>";

        $total = $a * $b;
        echo "<p>a x b = = $total</p>";

        $total = $a / $b;
        echo "<p>a / b = = $total</p>";

        $total = $a % $b;
        echo "<p>Le modulo de ma variable a et ma variable b = $total</p>"   
    ?>

    <h2>Exercice 2</h2>
    <?php
        $a = 89;
        $b = 23; 

        $a += $b;
        echo "<p>Le total de ma variable c'est = $a</p>";

        $a -= $b;
        echo "<p>Le total de ma variable c'est = $a</p>";

        $a *= $b;
        echo "<p>Le total de ma variable c'est = $a</p>";

        $a /= $b;
        echo "<p>Le total de ma variable c'est = $a</p>";

        $a %= $b;
        echo "<p>Le total de ma variable c'est = $a</p>";
    ?>

    <h2>Exercice 3</h2>
    <?php
        $counter = 10;
        $counter++;
        echo "<p>Voici mon résultat avec l'incrémentation : $counter</p>";

        $counter = 10;

        --$counter;
        echo "<p>Voici mon résultat réinitialiser : $counter</p>";
    ?>

    <h2>Exercice 4</h2>
    <?php
        $num = 10;
        ++$num;
        echo "<p>Voici mon résultat avec l'incrémentation : $num</p>";

        $num = 10;

        $num--;
        echo "<p>Voici mon résultat : $num</p>";
    ?>

    <h2>Exercice 5</h2>
    <?php
        $age = 32;
        ++$age;
        echo "<p>Voici mon résultat avec l'incrémentation : $age</p>";
        $age--;
        echo "<p>Voici mon résultat avec l'incrémentation : $age</p>";

    ?>

    <h2>Exercice 6</h2>
    <?php
        $quantity = 5;
        $quantity += 3;
        echo "<p>Voici mon résultat : $quantity</p>";
        $quantity -= 2;
        echo "<p>Voici mon résultat : $quantity</p>";
    ?>
    
    <h2>Exercice 7</h2>
    <?php
        $score = 50;
        $score += 10;
        echo "<p>Voici mon résultat : $score</p>";
        $score -= 5;
        echo "<p>Voici mon résultat : $score</p>";
    ?>
</body>
</html>    
    
