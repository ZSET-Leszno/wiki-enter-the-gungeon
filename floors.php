<?php
  include 'naglowek.php';
?>
    <main>
    <div class="window_start">
        <div style='display:flex; flex-direction: row; justify-content: center' class='mb-2'>
            <span style='font-size: 70px;'> 
                Piętra
            </span>
        </div>
        <div style="display: flex; flex-direction: row; align-items: center; justify-content: center;">';
            <div class="spis">
                <?php
                    include 'zapytania.php';
                    echo "<div class='mb-2'>
                        <a style='font-size: 45px;'> 
                            Główne piętra
                        </a>
                    </div>";
                    tabela_pietro();
                ?>
            </div>
            <div class="spis">
                <?php
                    echo "<div class='mb-2'>
                        <a style='font-size: 45px;'> 
                            Sekretne piętra
                        </a>
                    </div>";
                    tabela_pietro_secret();
                ?>
            </div>
        </div>

        <p style="width: 70%; padding-left: 5%;"><b>
            The Gungeon is a constantly evolving bullet hell fortress on the planet Gunymede that elegantly blends meticulously hand-designed rooms within a procedurally-generated labyrinth bent on destroying all that enter its walls. But beware – the Gungeon responds to even the most modest victory against its sentries and traps by raising the stakes and the challenges found within!
        </b></p>

    </div>
    </main>
    <?php
        include 'footer.php';
    ?>
</body>
</html>