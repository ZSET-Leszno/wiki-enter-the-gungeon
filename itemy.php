<?php
  include 'naglowek.php';
?>
    <main>
        <div style="display: flex; flex-direction: column; align-items: center;" class="window_start">
            <div style='display:flex; flex-direction: row; justify-content: center' class='mb-2'>
                <span style='font-size: 70px;'> 
                    Przedmioty
                </span>
            </div>
            <span><b>
                W grze spotkać możemy wiele przedmiotów, które w wyjątkowy sposób zmieniają rozgrywkę, często zmieniając statystyki, 
                nadając wyjątkowe efekty, wystrzeliwanym przez naszą postać, pociskom i wiele, wiele więcej.
            </b></span>
        </div>
        <?php
            include 'zapytania.php';
            tabela_itemy();
        ?>
    </main>
    <?php
        include 'footer.php';
    ?>
</body>
</html>