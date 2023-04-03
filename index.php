<?php
    include "zapytania.php";
    naglowek();
?>

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