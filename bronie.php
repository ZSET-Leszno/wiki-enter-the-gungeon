<?php
  include 'naglowek.php';
?>
    <main>
        <div style="display: flex; flex-direction: column; align-items: center;" class="window_start">
        <div style='display:flex; flex-direction: row; justify-content: center' class='mb-2'>
                <span style='font-size: 70px;'> 
                    Bronie
                </span>
            </div>
            <span><b>
                Jak sama nazwa wskazuje, najważsze w Lochu Giwer są właśnie giwery. W tej oto zakładce znajdziecie informacje na temat broni dostępnych w grze, 
                w tym ich działanie oraz kilka ciekawostek.
            </b></span>
            <?php
                echo '<div style="display: flex; align-items: center">
                        <input id="nazwa" type="text">
                        <button class="button" onclick="search()">Szukaj</button>
                    </div>';

            //function search(){
                //<form action="welcome.php" method="post">
            //}
            //echo "<button style='padding: 0; margin:0; height:14vh' type='button' class='btn m-1 btn-dark w-75' data-bs-toggle='modal' data-bs-target='#".$pokaz['name_bron']."'>Szukaj</button>
        
            ?> 
        </div>

        <?php
            include 'zapytania.php';
            tabela_bron();
        ?>
    </main>
    <?php
        include 'footer.php';
    ?>
</body>
</html>