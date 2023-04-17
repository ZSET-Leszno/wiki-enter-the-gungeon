<?php
  include 'naglowek.php';
?>
    <main>
      <div style="display: flex; flex-direction: column; align-items: center;" class="window_start">
      <div style='display:flex; flex-direction: row; justify-content: center' class='mb-2'>
                <span class="temat"> 
                    Postacie
                </span>
            </div>
        <span class="text_content"><b>
          Postacie grywalne, zwane także Giwerownikami (ang. Gungeoneer), to śmiałkowie, 
          którzy ośmielili się wkroczyć do Lochu Giwer, by dotrzeć do najgłębszej z komnat Gungeonu, w której spoczywa legendarna "Broń zdolna zabić przeszłość".
        </b></span>
      </div>
        <?php
            include "zapytania.php";
            tabela_postacie();
          ?>
    </main>
    <?php
        include 'footer.php';
    ?>
</body>
</html>