<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice des bases de PHP</title>
</head>
<body>
    <h1>Exercice : Les bases</h1>
    <h2>Exercice 1</h2>
    <?php
        echo '<p>Hello World, Bienvenue sur mon premier script PHP</p>';
    ?>
    
    <h2>Exercice 2</h2>
    <?php
        echo '<p>Bonjour tout le monde !</p><br>';
        print '<p>Aujourd\'hui, nous sommes le 01/09</p><br>';    
    ?>
    
    <h2>Exercice 3</h2>
    <p>Bonjour, j'aime vraiment beaucoup les licornes.</p>
    <?php
        echo '<p>Ce texte est affiché depuis PHP</p>';
    ?>

    <h2>Exercice 4</h2>
    <?php
         // cet exercice utilise echo pour afficher un texte et print pour en afficher un autre
        
        /** La différence entre echo et print est minime,
         * 
         * echo accepte plusieurs arguments séparés par des virgules (exemple : echo "Coucou je m'appelle antoine","J'aimerais dire
         * quelques mots" et ne retourne rien)
         * 
         * print n'accepte qu'un argument (une erreur apparaitra si vous tentez de mettre une virgule après) et retourne toujours
         * true (ce qui fait qu'on peut l'utiliser en valeur de variable par exemple : $vraioufaux = print "ceci est un test", la
         * valeur de vraioufaux sera true (1));
         */ 
    ?>       

    <h2>Exercice 5</h2>
    <?php
       $personne = array(
            "Nom" => "Nylorion",
            "Age" => 32,
        );
        
        print_r($personne);
    ?>

    <h2>Exercice 6</h2>
    <?php
        $nombre = 56;
        $str = 'Voilà';

        var_dump($nombre);
        var_dump($str);
        
    ?>

    <h2>Exercice 7</h2>
    <?php
        echo '<p>Ceci est mon paragraphe <b>gras</b> en <i>italique</i> et <u>souligné</u></p>';
    ?> 

    <h2>Exercice 8</h2>
    <?php
    /* Ici une div est créée afin d'y ajouter des balises, à l'intérieur de celle-ci,
       il sera donc possible d'y mettre plusieurs valeurs.
    */
        echo "<div>
                <h1>Bienvenue</h1>
                <h2> sur mon application </h2>
            </div>";
    ?>
    

    <h2>Exercice 9</h2>
    <?php
        $date = date('d/m/Y');
    ?>

    <h2>Ceci est un H2</h2>
    <h3>Ceci est un H3</h3>
    <p>Ceci est un paragraphe <?php echo $date ?></p>

    <h2>Exercice 10</h2>
    <?php
        $message = 'Lorem ipsum alohomora de avadakedavra um wingardium et leviosa';
        echo '<h1>'. $message . '</h1>';
    ?>
</body>
</html>
    

