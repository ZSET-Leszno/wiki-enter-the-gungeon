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
        <p><b>
            Pickup-y lub "przedmioty zużywalne" są bardzo ważnym aspektem wielu gier type Roque-like, w tym także "Enter the Gungegon". 
            W Lochu Giwer dzielą się one na waluty, przedmioty odnawiające punkty życia, klucze oraz amunicję. 
            Zwykle otrzymać je można po oczyszczeniu pokoju z przeciwników, lecz kilka z nich możemy także kupić w sklepie lub otrzymać ze skrzyni lub poprzez pokonanie bossa. 
        </b></p>
        <a class='.link_' href="#waluty">Waluty</a>
        <a class='.link_' href="#kredyty">Kredyty</a>
        <a class='.link_' href="#klucze">Klucze</a>
        <br><br>

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
        <br><br>


        <div class='mb-2'>
            <span id="kredyty" style='font-size: 45px;'> 
                Kredyty Hegemonii
            </span>
        </div>
        <p><b>
            Kolejną walutą występującą w Lochu Giwer są Kredyty Helixa. Jest to środek zapłaty akceptowalny w całym kosmosie.
        </b></p>
        <?php
            tabela_kredyty();
        ?>
        <br><br>

        <div style='display:flex; flex-direction: row; justify-content: center' class='mb-2'>
            <span id="klucze" style='font-size: 60px;'> 
                Klucze
            </span>
        </div>
        <?php
            tabela_klucze();
        ?>



        </div>



    </main>
    <!--<footer>
        <a>Strona by Brajan Hylla & Joanna Muzyka</a>
    </footer>-->
</body>
</html>