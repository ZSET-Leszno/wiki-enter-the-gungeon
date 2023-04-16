<?php
  include 'naglowek.php';
  echo '<div style="display: flex; align-items: center">
            <input id="nazwa" type="text">
            <button style="height: 40px; width: 80px; border-radius: 5px;" class="button" onclick="search()">Szukaj</button></div>';

            //function search(){
                //<form action="welcome.php" method="post">
            //}
            //echo "<button style='padding: 0; margin:0; height:14vh' type='button' class='btn m-1 btn-dark w-75' data-bs-toggle='modal' data-bs-target='#".$pokaz['name_bron']."'>Szukaj</button>
        
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