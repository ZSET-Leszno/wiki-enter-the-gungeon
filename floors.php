<?php
  include 'naglowek.php';
?>
    <main>
    <div class="window_start">
        <div style='display:flex; flex-direction: row; justify-content: center' class='mb-2'>
            <span class="temat"> 
                Piętra
            </span>
        </div>
        <div id="dodatkowy">
            <div class="spis_3">
                <?php
                    include 'zapytania.php';
                    echo "<div class='mb-2'>
                        <span class='temat'> 
                            Główne piętra
                        </span>
                    </div>";
                    tabela_pietro();
                ?>
            </div>
            <div class="spis_3">
                <?php
                    echo "<div class='mb-2'>
                        <span class='temat'> 
                            Sekretne piętra
                        </span>
                    </div>";
                    tabela_pietro_secret();
                ?>
            </div>
        </div>

        <p class="text_content"><b>
            The Gungeon is a constantly evolving bullet hell fortress on the planet Gunymede that elegantly blends meticulously hand-designed rooms within a procedurally-generated labyrinth bent on destroying all that enter its walls. But beware – the Gungeon responds to even the most modest victory against its sentries and traps by raising the stakes and the challenges found within!
        </b></p>
    </div>

    <div class="window_start">
        <div style='display:flex; flex-direction: row; justify-content: center' class='mb-2'>
            <span class="temat"> 
                Główne piętra
            </span>
        </div>

        <div id="Twierdza Władcy Ołowiu" class='mb-2'>
            <span class="temat_2"> 
                Twierdza Władcy Ołowiu
            </span>
        </div>
        <p class="text_content"><b>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae sit culpa qui nobis, rerum nemo non autem eligendi repellendus sed libero veritatis omnis vitae doloribus, asperiores distinctio deserunt officia voluptas.
        </b></p><br>
        <div id="Właściwy Loch Giwer" class='mb-2'>
            <span class="temat_2"> 
                Właściwy Loch Giwer
            </span>
        </div>
        <p class="text_content"><b>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum velit eaque sit reiciendis aspernatur voluptatum quaerat quia doloribus, a mollitia illum ut, rem deserunt animi libero iste nesciunt aliquam commodi?
        </b></p><br>
        <div id="Kopalnia Czarnego Prochu" class='mb-2'>
            <span class="temat_2"> 
                Kopalnia Czarnego Prochu
            </span>
        </div>
        <p class="text_content"><b>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, nemo ducimus harum enim aspernatur sed facere at. Minus, iusto quaerat illo doloremque necessitatibus aspernatur. Ipsum recusandae facilis dignissimos assumenda debitis!
        </b></p><br>
        <div id="Uroczysko" class='mb-2'>
            <span class="temat_2"> 
                Uroczysko
            </span>
        </div>
        <p class="text_content"><b>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti inventore harum molestiae veritatis amet voluptatum, quae omnis quis suscipit mollitia perferendis facilis ipsa. Pariatur natus magni facere ducimus aperiam. Dicta!
        </b></p><br>
        <div id="Kuźnia" class='mb-2'>
            <span class="temat_2"> 
                Kuźnia
            </span>
        </div>
        <p class="text_content"><b>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum ratione voluptas unde eligendi. Libero sit earum magni quas doloribus ab, veritatis cum accusantium facere consequuntur, nam incidunt assumenda quaerat. Eius.
        </b></p><br>
    </div>


    <div class="window_start">
        <div style='display:flex; flex-direction: row; justify-content: center' class='mb-2'>
            <span class="temat"> 
                Sekretne piętra
            </span>
        </div>

        <div id="Ciemnica" class='mb-2'>
            <span class="temat_2"> 
                Ciemnica
            </span>
        </div>
        <p class="text_content"><b>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum velit eaque sit reiciendis aspernatur voluptatum quaerat quia doloribus, a mollitia illum ut, rem deserunt animi libero iste nesciunt aliquam commodi?
        </b></p><br>
        <div id="Opactwo Prawdziwej Giwery" class='mb-2'>
            <span class="temat_2"> 
                Opactwo Prawdziwej Giwery
            </span>
        </div>
        <p class="text_content"><b>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, nemo ducimus harum enim aspernatur sed facere at. Minus, iusto quaerat illo doloremque necessitatibus aspernatur. Ipsum recusandae facilis dignissimos assumenda debitis!
        </b></p><br>
        <div id="Leże Przedsiębiorczego Szczura" class='mb-2'>
            <span class="temat_2"> 
                Leże Przedsiębiorczego Szczura
            </span>
        </div>
        <p class="text_content"><b>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti inventore harum molestiae veritatis amet voluptatum, quae omnis quis suscipit mollitia perferendis facilis ipsa. Pariatur natus magni facere ducimus aperiam. Dicta!
        </b></p><br>
        <div id="Departament Losowości" class='mb-2'>
            <span class="temat_2"> 
                Departament Losowości
            </span>
        </div>
        <p class="text_content"><b>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum ratione voluptas unde eligendi. Libero sit earum magni quas doloribus ab, veritatis cum accusantium facere consequuntur, nam incidunt assumenda quaerat. Eius.
        </b></p><br>
        <div id="Piekło Pocisków" class='mb-2'>
            <span class="temat_2"> 
                Piekło Pocisków
            </span>
        </div>
        <p class="text_content"><b>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae sit culpa qui nobis, rerum nemo non autem eligendi repellendus sed libero veritatis omnis vitae doloribus, asperiores distinctio deserunt officia voluptas.
        </b></p><br>
    </div>

    </main>
    <?php
        include 'footer.php';
    ?>
</body>
</html>