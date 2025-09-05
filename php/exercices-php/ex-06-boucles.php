<?php
    require_once 'partials/head.php';
?>
    <h1>Exercice Boucles</h1>
    <h2>Exercice 1</h2>
    <?php
        $i = 0;

        while($i <= 20){
            $i++;
            if ($i % 2 == 0){
            echo "<p>$i</p>";
            }
        }
    ?>

    <h2>Exercice 2</h2>
    <?php
        echo "<ul>";
        $year = 2000;
        $thisYear = date('Y');
        while($year <= $thisYear){
            echo "<li>$year</li>";
            $year++;
        }
        echo "</ul>";
    ?>

    <h2>Exercice 3</h2>
    <?php
        $j = 0;
        do{
            echo "<p>$j</p>";
            $j += 3;
        }while($j < 30);

        /*
        $number = 1;
        do{
            if($number % 3 == 0){
                echo "<p>$number</p>";
            }
            $number++;
        }while($number <= 30);
        */
    ?>

    <h2>Exercice 4</h2>
    <?php
        $informations = [
            "prénom" => "Nyl",
            "nom" => "Orion",
            "email" => "NylOrion@konoha.shinobi",
            "age" => 156
        ];

        foreach ($informations as $key => $value) {
            if ($key == "email") {
                echo "<a href='mailto:$value'>$value</a>";
            } else {
                echo "<p>$value</p>";
            }
        }

        /*foreach($personnal_info as $info => $value){
            if(str_contains($personnal_info[$info],'@'))
                echo "<a href='#'>$value<a>";
            else{
                echo "<p>$personnal_info[$info]</p>";
            }
        }*/
     ?>

     <h2>Exercice 5</h2>
     <?php
        echo "<table border='2'>";
        for ($row = 0; $row < 10; $row++) {
            echo "<tr>";
            for ($col = 0; $col < 10; $col++) {
                $nbr = rand(1, 100);
                if ($nbr % 2 == 0) {
                    echo "<td style='background-color: lightgreen;'>$nbr</td>";
                } else {
                    echo "<td>$nbr</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>

    <h2>Exercice 6</h2>
    <?php
        $personnes = [
            0 => [
                'prenom 1' => 'Alicin',
                'nom'    => 'borderland',
                'age' => 22
            ],
            1 => [
                'prenom 2' => 'Bob',
                'nom'    => 'Marley',
                'age' => 32
            ],
            2 => [
                'prenom 3' => 'Oclaire',
                'nom'    => 'Delune',
                'age' => 42
            ]
        ];

        echo "<ol>";
        foreach($personnes as $key => $value){
            echo "<li>Personne n° $key </li>";

            echo "<ul>";
            foreach($value as $k => $v){
                echo "<li>$k : $v </li>";
            }
            echo "</ul>";
        }
        echo "</ol>";
    ?>        
<?php
    require_once 'partials/footer.php';
?>   

