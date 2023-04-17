<?php
  include 'naglowek.php';
?>
    <main style="display: flex; justify-content: center;">
        <div id="karuzela">
            <h2><b>Enter the Gungeon Wiki</b></h2>
            <p class="text_content"><b>Witaj na naszej wiki!</b></p>
            <span class="text_content"><b>Znajdziesz tu wiele informacji na temat gry Enter the Gungeon</b></span>
            <div>
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

        <!--<div id="kom_sekcja">
            <span><b>komentarze</b></span>
        </div>
        <div id="content">
            <a><b>WIKI</b></a>
            <div class="content_group">
                <a class="content_single" href="postacie.php">
                    <span class="naglowek">GIWEROWNICY</span>
                        <div class="content_content">
                            <img class="content_img" src="img/icon.jpg" alt="zdjęcie">
                    </div>
                </a>
                <a class="content_single" href="bronie.php">
                    <span class="naglowek">BRONIE</span>
                        <div class="content_content">
                            <img class="content_img" src="img/icon.jpg" alt="zdjęcie">
                    </div>
                </a>
                <a class="content_single" href="enemy.php">
                    <span class="naglowek">PRZECIWNICY</span>
                        <div class="content_content">
                            <img class="content_img" src="img/icon.jpg" alt="zdjęcie">
                    </div>
                </a>
            </div>

            <div class="content_group">
                <a class="content_single" href="floors.php">
                    <span class="naglowek">PIĘTRA</span>
                        <div class="content_content">
                            <img class="content_img" src="img/icon.jpg" alt="zdjęcie">
                    </div>
                </a>
                <a class="content_single" href="itemy.php">
                    <span class="naglowek">PRZEDMIOTY</span>
                        <div class="content_content">
                            <img class="content_img" src="img/icon.jpg" alt="zdjęcie">
                    </div>
                </a>
                <a class="content_single" href="pickupy.php">
                    <span class="naglowek">PICKUPY</span>
                        <div class="content_content">
                            <img class="content_img" src="img/icon.jpg" alt="zdjęcie">
                    </div>
                </a>
            </div>
        </div>
        <div id="dodatkowe">
            <a><b>dodatkowe</b></a>
        </div>-->
    </main>
    <?php
        include 'footer.php';
    ?>
</body>
</html>