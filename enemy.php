<?php
  include 'naglowek.php';
?>
    <main>

        <div style="display: flex; flex-direction: column; align-items: center;" class="window_start">
            <div style='display:flex; flex-direction: row; justify-content: center' class='mb-2'>
                <span class="temat"> 
                    Przeciwnicy
                </span>
            </div>
            <span class="text_content"><b>
                W tej zakładce dowiecie się wszystkiego o przeciwnikach oraz bossach występujących w grz Enter the Gungeon, kliknij w jeden z poniższych przycisków, 
                żeby zdecydować co chcesz zobaczyć
            </b></span>
            <form method="post">
                <input type="submit" name="enemy" class="button" value="Przeciwnicy" />
                <input type="submit" name="boss" class="button" value="Bossowie" />
            </form>
        </div>

        <?php
        if(array_key_exists('enemy', $_POST)) {
            enemy();
        }
        else if(array_key_exists('boss', $_POST)) {
            boss();
        }
        else{
            filler();
        }
        
        function filler(){
            echo "</main>";
            echo "<div style='height: 300px;'></div>";
        }
        
        function enemy(){
            include 'zapytania.php';
            tabela_enemy();
            echo "</main>";
        }

        function boss(){
            $numer_boss=2;
            while($numer_boss<7){
                include "config.php";
                $conn=mysqli_connect($lokacja_baza, $user_baza, $pass_baza, $name_baza);
                $zapytanie='SELECT * FROM boss JOIN floors ON boss.floor=floors.id where floor='.$numer_boss.' AND type="normal";';
                $wynik=mysqli_query($conn,$zapytanie);
                $ile_rekord=mysqli_num_rows($wynik);
                $licz=1;
                echo '<div class="window_start">';

                if($numer_boss==2){
                    echo "<div class='mb-2'>
                            <span style='font-size: 25pt;'>
                                Twierdza Władcy Ołowiu
                            </span>
                            </div>";
                }
                if($numer_boss==3){
                    echo "<div class='mb-2'>
                    <span style='font-size: 25pt;'>
                        Właściwy Loch Giwer
                    </span>
                    </div>";

                }
                if($numer_boss==4){
                    echo "<div class='mb-2'>
                    <span style='font-size: 25pt;'>
                    Kopalnia Czarnego Prochu
                    </span>
                    </div>";
                }
                if($numer_boss==5){
                    echo "<div class='mb-2'>
                    <span style='font-size: 25pt;'>
                    Uroczysko
                    </span>
                    </div>";
                }
                if($numer_boss==6){
                    echo "<div class='mb-2'>
                    <span style='font-size: 25pt;'>
                    Kuźnia
                    </span>
                    </div>";
                }
                
                echo "<div style='padding: 0px; margin:0;' class='row mb-3 mt-2'>";
                while($licz<=$ile_rekord){
                    $pokaz=mysqli_fetch_array($wynik);

                        echo "
                        <div class='col-sm-4 text-center'>
                            <button style='padding: 0; margin:0; height:100%;' type='button' class='btn m-1 btn-dark w-75' data-bs-toggle='modal' data-bs-target='#".$licz.$pokaz['id']."'>
                            <div id='cale_te_boss'>
                            ".'<img style="max-height:80%; max-width: 80%;" src="data:image/png;base64,'.base64_encode($pokaz['icon_boss']).'">'."
                                <h2 style='width: 100%;'>".$pokaz['name_boss']."</h2>
                            <div>
                            </button>
                            
                            <div class='modal fade mt-5 text-dark-emphasis' data-bs-theme='dark' id='".$licz.$pokaz['id']."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            <div class='modal-dialog'>
                                <div class='modal-content'>
                                
                                <div id='cale_te'>
                                
                                    <div style='display: flex; justify-content: right;'>
                                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
            
                                    <div id='naglowek_okienko'>
                                        <div style='display: flex; flex-direction: column;'> 
                                            <div id='obrazek_okienko'>
                                                ".'<img style="width: 80%;" src="data:image/png;base64,'.base64_encode($pokaz['simple_boss']).'">'."
                                            </div>
                                            <div class='statsy'>
                                                <table style='width: 100%;'>
                                                    <tr class='statsy_bron'><td>HP</td><td style='width: 50%;'>".$pokaz['health']."</td></tr>
                                                </table>
                                            </div>
                                        </div>
                                        
                                        <div id='nazwa_okienko'>
            
                                            <div class='mb-2'>
                                                ".$pokaz['name_boss']."
                                            </div>
                                            <hr>
                                            <div class='mb-2'>
                                                ".$pokaz['cytat_boss']."
                                            </div>
                                        </div>
                                    </div>
            
                                        ".'<img style="padding: 4vh; width: 100%;" src="data:image/png;base64,'.base64_encode($pokaz['baner_boss']).'">'."
                                    
                                    
            
                                    <div class='modal-body'>
                                        <br>
                                        <div class='mb-2'>Lokacja</div>";
                                        if($pokaz['name_floor']=="Twierdza Władcy Ołowiu"){
                                            echo "<a class=link_ style='font-size: 70%;' href='http://localhost/moje%20pliki/projekt/wiki-enter-the-gungeon/floors.php#Twierdza%20Władcy%20Ołowiu'>
                                            Właściwy Loch Giwer</a>";
                                        }
                                        if($pokaz['name_floor']=="Właściwy Loch Giwer"){
                                            echo "<a class=link_ style='font-size: 70%;' href='http://localhost/moje%20pliki/projekt/wiki-enter-the-gungeon/floors.php#Właściwy%20Loch%20Giwer'>
                                            Właściwy Loch Giwer</a>";
                                        }
                                        if($pokaz['name_floor']=="Kopalnia Czarnego Prochu"){
                                            echo "<a class=link_ style='font-size: 70%;' href='http://localhost/moje%20pliki/projekt/wiki-enter-the-gungeon/floors.php#Kopalnia%20Czarnego%20Prochu'>
                                            Właściwy Loch Giwer</a>";
                                        }
                                        if($pokaz['name_floor']=="Uroczysko"){
                                            echo "<a class=link_ style='font-size: 70%;' href='http://localhost/moje%20pliki/projekt/wiki-enter-the-gungeon/floors.php#Uroczysko'>
                                            Właściwy Loch Giwer</a>";
                                        }
                                        if($pokaz['name_floor']=="Kuźnia"){
                                            echo "<a class=link_ style='font-size: 70%;' href='http://localhost/moje%20pliki/projekt/wiki-enter-the-gungeon/floors.php#Kuźnia'>
                                            Właściwy Loch Giwer</a>";
                                        }

                                        if($pokaz['name_floor']=="Ciemnica"){
                                            echo "<a class=link_ style='font-size: 70%;' href='http://localhost/moje%20pliki/projekt/wiki-enter-the-gungeon/floors.php#Ciemnica'>
                                            Właściwy Loch Giwer</a>";
                                        }
                                        if($pokaz['name_floor']=="Opactwo Prawdziwej Giwery"){
                                            echo "<a class=link_ style='font-size: 70%;' href='http://localhost/moje%20pliki/projekt/wiki-enter-the-gungeon/floors.php#Opactwo%20Prawdziwej%20Giwery'>
                                            Właściwy Loch Giwer</a>";
                                        }
                                        if($pokaz['name_floor']=="Leże Przedsiębiorczego Szczura"){
                                            echo "<a class=link_ style='font-size: 70%;' href='http://localhost/moje%20pliki/projekt/wiki-enter-the-gungeon/floors.php#Leże%20Przedsiębiorczego%20Szczura'>
                                            Właściwy Loch Giwer</a>";
                                        }
                                        if($pokaz['name_floor']=="Departament Losowości"){
                                            echo "<a class=link_ style='font-size: 70%;' href='http://localhost/moje%20pliki/projekt/wiki-enter-the-gungeon/floors.php#Departament%20Losowości'>
                                            Właściwy Loch Giwer</a>";
                                        }
                                        if($pokaz['name_floor']=="Piekło Pocisków"){
                                            echo "<a class=link_ style='font-size: 70%;' href='http://localhost/moje%20pliki/projekt/wiki-enter-the-gungeon/floors.php#Piekło%20Pocisków'>
                                            Właściwy Loch Giwer</a>";
                                        }

                                        echo "<br>
                                        <div class='mb-2'>Ammunomicon</div>
                                        <span style='font-size: 70%;'>
                                        ".$pokaz['opis']."
                                        </span>
                                        <br>
                                        <div class='mb-2'>Zachowanie</div>
                                        <span style='font-size: 70%;'>
                                        ".$pokaz['zachowanie']."
                                        </span>
                                        <br>
                                        <div class='mb-2'>Ciekawostki</div>
                                        <span style='font-size: 70%;'>
                                        ".$pokaz['ciekawostki']."
                                        </span>
                                        <br>
            
                                    </div>
            
                                    </div>
            
                                </div>
                            </div>
                        </div>
                    </div>";
            
                $licz++;
                }
                echo '</div></div>';
                $numer_boss++;
            }
            include "zapytania.php";
            echo '<div class="window_start">';
            echo "<div class='mb-2'><span style='font-size: 25pt;'>Sekretni Bossowie</span></div>";
            echo "<div style='padding: 0px; margin:0;' class='row mb-3 mt-2'>";
            tabela_boss_drzwi();
            echo "</div></div>";

        echo "</main>";
        }
        ?>

    
    <br><br><br><br><br>
    <?php
        include 'footer.php';
    ?>
</body>
</html>