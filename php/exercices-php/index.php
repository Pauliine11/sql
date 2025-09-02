<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar et Footer</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header class="header">
        <a href="#" class="logo">PHP</a>
        <input type="checkbox" id="check">
        <label for="check" class="icons">
            <i class='bx  bx-menu' id="menu-icon" ></i> 
            <i class='bx  bx-x' id="close-icon" ></i> 
        </label>
        <nav class="navbar">
            <a href="#" style="--i:0;">Accueil</a>
            <a href="ex-00-bases.php" style="--i:1;" >Les bases</a>
            <a href="ex-01-constante.php" style="--i:2;">Constante</a>
            <a href="ex-02-concatenation.php" style="--i:3;">La concaténation</a>
            <a href="#" style="--i:4;">Exo 4</a>
        </nav>
    </header>
    <footer class="footer">
        <p>© 2025. Tous droits réservés. </p>
    </footer>
    <script src="assets/js/script.js"></script>
</body>
</html>