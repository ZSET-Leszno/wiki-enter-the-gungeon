<?php
  include 'naglowek.php';
  echo '<div style="display: flex; align-items: center">
            <input id="nazwa" type="text">
            <button style="height: 30px; width: 60px; border-radius: 5px;" onclick="search()">Szukaj</button>
        </div>';
?>
    <main>
        <?php
        include 'zapytania.php';
            tabela_bron();
        ?>
    </main>
    <footer>
        <a>Strona by Brajan Hylla & Joanna Muzyka</a><br>
        <a href="javascript:scroll(0,0);">Na górę</a>
    </footer>
</body>
</html>