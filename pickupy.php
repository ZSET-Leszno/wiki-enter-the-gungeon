<?php
  include 'naglowek.php';
?>
    <main>
        <div class="boss_window">

        <div style='display:flex; flex-direction: row; justify-content: center' class='mb-2'>
            <span style='font-size: 70px;'> 
                Pickup-y
            </span>
        </div>
        <div style="display: flex; align-items: center; justify-content: center;">
            <div class="spis">
                <a class='link_' style="height: 100%;" href="#waluty">Waluty</a>
                <hr style="width: 100%; border-top: 4px solid #eed3fe; opacity: 1;">
                <a class='link_' href="#klucze">Klucze</a>
                <hr style="width: 100%; border-top: 4px solid #eed3fe; opacity: 1;">
                <a class='link_' href="#serduszka">Serduszka</a>
                <hr style="width: 100%; border-top: 4px solid #eed3fe; opacity: 1;">
                <a class='link_' href="#pancerz">Pancerz</a>
                <hr style="width: 100%; border-top: 4px solid #eed3fe; opacity: 1;">
                <a class='link_' href="#slepaki">Ślepaki</a>
                <hr style="width: 100%; border-top: 4px solid #eed3fe; opacity: 1;">
                <a class='link_' href="#amunicja">Amunicja</a>
            </div>
        <p style="width: 70%; padding-left: 5%;"><b>
            Pickup-y lub "przedmioty zużywalne" są bardzo ważnym aspektem wielu gier type Roque-like, w tym także "Enter the Gungegon". 
            W Lochu Giwer dzielą się one na waluty, przedmioty odnawiające punkty życia, klucze oraz amunicję. 
            Zwykle otrzymać je można po oczyszczeniu pokoju z przeciwników, lecz kilka z nich możemy także kupić w sklepie lub otrzymać ze skrzyni lub poprzez pokonanie bossa. 
        </b></p>

        </div>

        <br><hr style="border: 3px solid #0f0028;"><br>

        <div style='display:flex; flex-direction: row; justify-content: center' class='mb-2'>
            <span id="waluty" style='font-size: 60px;'> 
                Waluty
            </span>
        </div>

        <div class='mb-2'>
            <span style='font-size: 45px;'> 
                Łuski
            </span>
        </div>
        <p><b>
            Główną formą waluty w grze są łuski występujące w trzech różnych wariantach. Możemy je otrzymać za zabijanie przeciwników, za ukończenie pokoju lub też poprzez otworzenie skrzyni.
        </b></p>
        <?php
            include 'zapytania.php';
            tabela_monety();
        ?>
        <br><hr style="border: 3px solid #0f0028;"><br>


        <div class='mb-2'>
            <span style='font-size: 45px;'> 
                Kredyty Hegemonii
            </span>
        </div>
        <?php
            tabela_kredyty();
        ?>
        <p><b>
            Kolejną walutą występującą w Lochu Giwer są Kredyty Helixa. Jest to środek zapłaty akceptowalny w całym kosmosie.
        </b></p>

        <br><hr style="border: 3px solid #0f0028;"><br>

        <div style='display:flex; flex-direction: row; justify-content: center' class='mb-2'>
            <span id="klucze" style='font-size: 60px;'> 
                Klucze
            </span>
        </div>
        <?php
            tabela_klucze();
        ?>

        <br><hr style="border: 3px solid #0f0028;"><br>

        <div style='display:flex; flex-direction: row; justify-content: center' class='mb-2'>
            <span id="serduszka" style='font-size: 60px;'> 
                Serca
            </span>
        </div>
        <?php
            tabela_serca();
        ?>

        <br><hr style="border: 3px solid #0f0028;"><br>

        <div style='display:flex; flex-direction: row; justify-content: center' class='mb-2'>
            <span id="pancerz" style='font-size: 60px;'> 
                Pancerz
            </span>
        </div>
        <?php
            tabela_pancerz();
        ?>

        <br><hr style="border: 3px solid #0f0028;"><br>

        <div style='display:flex; flex-direction: row; justify-content: center' class='mb-2'>
            <span id="slepaki" style='font-size: 60px;'> 
                Ślepak
            </span>
        </div>
        <?php
            tabela_slepak();
        ?>

        <br><hr style="border: 3px solid #0f0028;"><br>

        <div style='display:flex; flex-direction: row; justify-content: center' class='mb-2'>
            <span id="amunicja" style='font-size: 60px;'> 
                Amunicja
            </span>
        </div>
        <?php
            tabela_amunicja();
        ?>


        </div>






    </main>
    <!--<footer>
        <a>Strona by Brajan Hylla & Joanna Muzyka</a>
    </footer>-->
</body>
</html>