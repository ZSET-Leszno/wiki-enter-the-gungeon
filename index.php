<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="img/icon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="smartphone.css" media="screen and (maxwidth:1024px)">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
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
            <a class="link_" href="index.html">START</a>

            <a class="link_" href="postacie.php">POSTACIE</a>
            <a class="link_" href="bronie.php">BRONIE</a>
            <a class="link_" href="enemy.php">PRZECIWNICY</a>
            <a class="link_" href="floors.php">PIĘTRA</a>
            <a class="link_" href="itemy.php">ITEMY</a>
            <a class="link_" href="pickupy.php">PICKUPY</a>

            <a class="link_" href="log.php">LOG IN</a>
        </nav>
    </header>
    <main>
        <div id="karuzela">
            <h1>Enter the Gungeon Wiki</h1>
            <p>Witaj na naszej wiki!</p>
            <span>Znajdziesz tu wiele informacji na temat gry Enter the Gungeon</span>
            <div id="karuzela_obraz">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/karuzela/1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/karuzela/2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/karuzela/3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/karuzela/4.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/karuzela/5.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/karuzela/6.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/karuzela/7.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/karuzela/8.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/karuzela/9.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/karuzela/10.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/karuzela/11.jpg" class="d-block w-100" alt="...">
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <div id="kom_sekcja">
            <span>komentarze</span>
        </div>
        <div id="content">
            <a>WIKI</a>
            <div class="content_group">
                <div class="content_single">
                    <a class="naglowek" href="postacie.php">GIWEROWNICY</a>
                    <div class="content_content">
                        <img class="content_img" src="img/icon.jpg" alt="zdjęcie">
                    </div>
                </div>
                <div class="content_single">
                    <a class="naglowek" href="bronie.php">BRONIE</a>
                    <div class="content_content">
                        <img class="content_img" src="img/icon.jpg" alt="zdjęcie">
                    </div>
                </div>
                <div class="content_single">
                    <a class="naglowek" href="enemy.php">PRZECIWNICY</a>
                    <div class="content_content">
                        <img class="content_img" src="img/icon.jpg" alt="zdjęcie">
                    </div>
                </div>
            </div>
            <div class="content_group">
                <div class="content_single">
                    <a class="naglowek" href="floors.php">PIĘTRA</a>
                    <div class="content_content">
                        <img class="content_img" src="img/icon.jpg" alt="zdjęcie">
                    </div>
                </div>
                <div class="content_single">
                    <a class="naglowek" href="itemy.php">ITEMY</a>
                    <div class="content_content">
                        <img class="content_img" src="img/icon.jpg" alt="zdjęcie">
                    </div>
                </div>
                <div class="content_single">
                    <a class="naglowek" href="pickupy.php">PICKUP-y</a>
                    <div class="content_content">
                        <img class="content_img" src="img/icon.jpg" alt="zdjęcie">
                    </div>
                </div>
            </div>
        </div>
        <div id="dodatkowe">
            <a>dodatkowe</a>
        </div>
    </main>
    <footer>
        <a>Strona by Brajan Hylla & Joanna Muzyka</a>
    </footer>
</body>
</html>