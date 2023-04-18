<?php
  include 'naglowek.php';
?>
    <main>
        <div class="window_start">

        <div style='display:flex; flex-direction: row; justify-content: center' class='mb-2'>
            <span class="temat"> 
                Pickup-y
            </span>
        </div>
        <div style="display: flex; align-items: center; justify-content: center;">
            <div class="spis">
                <a class='spis_2' style="height: 100%;" href="#waluty">Waluty</a>
                <hr style="width: 100%; border-top: 4px solid #eed3fe; opacity: 1;">
                <a class='spis_2' href="#klucze">Klucze</a>
                <hr style="width: 100%; border-top: 4px solid #eed3fe; opacity: 1;">
                <a class='spis_2' href="#serduszka">Serduszka</a>
                <hr style="width: 100%; border-top: 4px solid #eed3fe; opacity: 1;">
                <a class='spis_2' href="#pancerz">Pancerz</a>
                <hr style="width: 100%; border-top: 4px solid #eed3fe; opacity: 1;">
                <a class='spis_2' href="#slepaki">Ślepaki</a>
                <hr style="width: 100%; border-top: 4px solid #eed3fe; opacity: 1;">
                <a class='spis_2' href="#amunicja">Amunicja</a>
            </div>
        <span style="padding-left: 2%;" class="text_content"><b>
            Pickup-y lub "przedmioty zużywalne" są bardzo ważnym aspektem wielu gier type Roque-like, w tym także "Enter the Gungegon". 
            W Lochu Giwer dzielą się one na waluty, przedmioty odnawiające punkty życia, klucze oraz amunicję. 
            Zwykle otrzymać je można po oczyszczeniu pokoju z przeciwników, lecz kilka z nich możemy także kupić w sklepie lub otrzymać ze skrzyni lub poprzez pokonanie bossa. 
        </b></span>

        </div>

        <br><hr style="border: 3px solid #0f0028;"><br>

        <div style='display:flex; flex-direction: row; justify-content: center' class='mb-2'>
            <span id="waluty" class="temat"> 
                Waluty
            </span>
        </div>

        <div class='mb-2'>
            <span class="temat_2"> 
                Łuski
            </span>
        </div>
        <p class="text_content"><b>
            Główną formą waluty w grze są łuski występujące w trzech różnych wariantach. Możemy je otrzymać za zabijanie przeciwników, za ukończenie pokoju lub też poprzez otworzenie skrzyni.
        </b></p>
        <?php
            include 'zapytania.php';
            tabela_monety();
        ?>
        <br><hr style="border: 3px solid #0f0028;"><br>


        <div class='mb-2'>
            <span class="temat_2"> 
                Kredyty Hegemonii
            </span>
        </div>
        <?php
            tabela_kredyty();
        ?>
        <p class="text_content"><b>
            Kolejną walutą występującą w Lochu Giwer są Kredyty Helixa. Jest to środek zapłaty akceptowalny w całym kosmosie.
        </b></p>

        <br><hr style="border: 3px solid #0f0028;"><br>

        <div style='display:flex; flex-direction: row; justify-content: center' class='mb-2'>
            <span id="klucze" class="temat"> 
                Klucze
            </span>
        </div>
        <?php
            tabela_klucze();
        ?>

        <br><hr style="border: 3px solid #0f0028;"><br>

        <div style='display:flex; flex-direction: row; justify-content: center' class='mb-2'>
            <span id="serduszka" class="temat"> 
                Serca
            </span>
        </div>
        <?php
            tabela_serca();
        ?>

        <br><hr style="border: 3px solid #0f0028;"><br>

        <div style='display:flex; flex-direction: row; justify-content: center' class='mb-2'>
            <span id="pancerz" class="temat"> 
                Pancerz
            </span>
        </div>
        <?php
            tabela_pancerz();
        ?>

        <br><hr style="border: 3px solid #0f0028;"><br>

        <div style='display:flex; flex-direction: row; justify-content: center' class='mb-2'>
            <span id="slepaki" class="temat"> 
                Ślepak
            </span>
        </div>
        <?php
            tabela_slepak();
        ?>

        <br><hr style="border: 3px solid #0f0028;"><br>

        <div style='display:flex; flex-direction: row; justify-content: center' class='mb-2'>
            <span id="amunicja" class="temat"> 
                Amunicja
            </span>
        </div>
        <?php
            tabela_amunicja();
        ?>


        </div>






    </main>
    <?php
        include 'footer.php';
    ?>
</body>
</html>