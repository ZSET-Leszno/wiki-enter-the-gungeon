<?php
  include 'naglowek.php';
?>
    <main>

        <div style="display: flex; flex-direction: column; align-items: center;" class="boss_window">

            <h1><b>Przeciwnicy</b></h1>
            <span><b>W tej zakładce dowiecie się wszystkiego o przeciwnikach oraz bossach występujących w grz Enter the Gungeon, kliknij w jeden z poniższych przycisków, 
                żeby zdecydować co chcesz zobaczyć</b></span>
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

        function enemy(){
            include 'zapytania.php';
            tabela_enemy();

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
                echo '<div class="boss_window">';

                if($numer_boss==2){
                    echo "<div class='mb-2'>
                            <span style='font-size: 5vh;'>
                                Twierdza Władcy Ołowiu
                            </span>
                            </div>";
                    //echo "<span>Twierdza Władcy Ołowiu</span>";
                }
                if($numer_boss==3){
                    echo "<span>Właściwy Loch Giwer</span>";
                }
                if($numer_boss==4){
                    echo "<span>Kopalnia Czarnego Prochu</span>";
                }
                if($numer_boss==5){
                    echo "<span>Uroczysko</span>";
                }
                if($numer_boss==6){
                    echo "<span>Kuźnia</span>";
                }
                
                echo "<div style='padding: 0px; margin:0;' class='row mb-3 mt-2'>";
                while($licz<=$ile_rekord){
                    $pokaz=mysqli_fetch_array($wynik);
                    echo "
                    <div class='col-sm-4 text-center'>
                        <button style='padding: 0; margin:0; height:30vh' type='button' class='btn m-1 btn-dark w-75' data-bs-toggle='modal' data-bs-target='#".$licz.$pokaz['id']."'>
                        <div id='cale_te_boss'>
                        ".'<img style="height: 18vh; width: fit;" src="data:image/png;base64,'.base64_encode($pokaz['icon_boss']).'">'."
                            <h2>".$pokaz['name_boss']."</h2>
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
                                        <div class='mb-2'>Lokacja</div>
                                        <span style='font-size: 70%;'>
                                        ".$pokaz['name_floor']."
                                        </span>
                                        <br>
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
            echo '<div class="boss_window">';
            echo "<span>Sekretni Bossowie</span>";
            echo "<div style='padding: 0px; margin:0;' class='row mb-3 mt-2'>";
            tabela_boss_drzwi();
            echo "</div></div>";


        }
        ?>

    </main>
    <br><br><br>
    <footer style="position: fixed;">
        <a>Strona by Brajan Hylla & Joanna Muzyka</a>
    </footer>
</body>
</html>