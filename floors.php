<?php
  include 'naglowek.php';
?>
    <main>
        <h3>Komory główne</h3>
        <?php
            include 'zapytania.php';
            tabela_pietro();
        ?>
        <h3>Sekretne piętra</h3>
        <?php
            tabela_pietro_secret();
        ?>
    </main>
    <!--<footer>
        <a>Strona by Brajan Hylla & Joanna Muzyka</a>
    </footer>-->
</body>
</html>