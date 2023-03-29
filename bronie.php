<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="img/icon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="smartphone.css" media="screen and (maxwidth:1024px)">
    <link rel="stylesheet" href="style.css">
    <title>Pocket Ammunicon</title>
</head>
<body>
    <header>
        <div id="logo">
            <img id="logo_img" src="img/logo.png" alt="logo">
        </div>
        <div id="title">
            <a >Enter the gungeon WIKI "Pocket Ammunicon" by Brajan Hylla & Joanna Muzyka</a>
        </div>
        <nav>
            <a id="link_" href="index.html">START</a>
            <a id="link_" href="log.php">LOG IN</a>
        </nav>
    </header>
    <main>
        <?php
            include 'zapytania.php';
            tabela_bron();
        ?>
    </main>
    <footer>
        <a>Strona by Brajan Hylla & Joanna Muzyka</a>
    </footer>
</body>
</html>