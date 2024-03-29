<?php
function tabela_bron(){
    include "config.php";
    $conn=mysqli_connect($lokacja_baza, $user_baza, $pass_baza, $name_baza);
    $licz=1;

    echo '<div style="display: flex; flex-direction: column; align-items: center;" class="window_start">
            <div style="display:flex; flex-direction: row; justify-content: center" class="mb-2">
                <span class="temat"> 
                    Bronie
                </span>
            </div>
                <span class="text_content"><b>
                    Jak sama nazwa wskazuje, najważsze w Lochu Giwer są właśnie giwery. W tej oto zakładce znajdziecie informacje na temat broni dostępnych w grze, 
                    w tym ich działanie oraz kilka ciekawostek.
                </b></span>
            <div style="display: flex; align-items: center;">
                <form action="" method="post">
                    <input name="nazwa" id="nazwa" type="text">
                    <button type="submit" class="button">Szukaj</button>
                </form>
            </div>
        </div>';

    if(isset($_POST['nazwa'])){
        $search=$_POST['nazwa'];
        $zapytanie='SELECT * FROM bronie JOIN qualities ON bronie.quality=qualities.id where name_bron like "%'.$search.'%";';
        $wynik=mysqli_query($conn,$zapytanie);
        $ile_rekord=mysqli_num_rows($wynik);
    }
    else{
        $zapytanie='SELECT * FROM bronie JOIN qualities ON bronie.quality=qualities.id;';
        $wynik=mysqli_query($conn,$zapytanie);
        $ile_rekord=mysqli_num_rows($wynik);
    }

    echo "<div style='padding: 0px; margin:0;' class='row mb-3 mt-2'>";
    while($licz<=$ile_rekord){
        $pokaz=mysqli_fetch_array($wynik);
        if ($pokaz['exist_bron']=='0'){
            break;
        }
        elseif($pokaz['exist_bron']=='1'){
            echo "
            <div style='margin-top: 1%; margin-bottom: 1%;' id='".$pokaz['name_bron']."' class='col-sm-3 text-center'>
                <button style='padding: 0; margin:0; height:100%; width:100%' type='button' class='btn m-1 btn-dark w-75' data-bs-toggle='modal' data-bs-target='#".$licz."'>
                <div id='cale_te_bron'>
                ".'<img src="data:image/png;base64,'.base64_encode($pokaz['icon_bron']).'">'."
                    <h2>".$pokaz['name_bron']."</h2>
                </div>
                </button>


                <div class='modal fade mt-5 text-dark-emphasis' data-bs-theme='dark' id='".$licz."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                        
                        <div id='cale_te'>
                        
                            <div style='display: flex; justify-content: right;'>
                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                            </div>

                            <div id='naglowek_okienko'>
                                <div id='obrazek_okienko'>
                                    ".'<img style="width: 180%;" src="data:image/png;base64,'.base64_encode($pokaz['icon_bron']).'">'."
                                </div>
                                
                                <div id='nazwa_okienko'>

                                    <div class='mb-2'>
                                        ".$pokaz['name_bron']."
                                    </div>
                                    <hr>
                                    <div class='mb-2'>
                                        ".$pokaz['cytat_bron']."
                                    </div>
                                </div>
                            </div>
                            

                            

                            <div class='modal-body'>
                                <br>
                                <div class='mb-2'>Ammunomicon</div>
                                <span style='font-size: 70%;'>
                                ".$pokaz['opis']."
                                </span>
                                <br>
                                <div class='mb-2'>Opis</div>
                                <span style='font-size: 70%;'>
                                ".$pokaz['opis_2']."
                                </span>
                                
                                <div class='statsy'>
                                    <table>
                                        <tr class='statsy_bron'><td>JAKOŚĆ</td><td>".'<img style="width: 15%;" src="data:image/png;base64,'.base64_encode($pokaz['image_quality']).'">'."</td></tr>
                                        <tr class='statsy_bron'><td>TYP BRONI</td><td>".$pokaz['type_bron']."</td></tr>
                                        <tr class='statsy_bron'><td>ROZMIAR MAGAZYNKU</td><td>".$pokaz['magazine_size']."</td></tr>
                                        <tr class='statsy_bron'><td>MAKSYMALNA ILOŚĆ AMUNICJI</td><td>".$pokaz['max_ammo']."</td></tr>
                                        <tr class='statsy_bron'><td>OBRAŻENIA</td><td>".$pokaz['damage']."</td></tr>
                                        <tr class='statsy_bron'><td>RODZAJ OBRAŻEŃ</td><td>".$pokaz['damage_type']."</td></tr>
                                        <tr class='statsy_bron'><td>SZYBKOSTRZELNOŚĆ</td><td>".$pokaz['fire_rate']."</td></tr>
                                        <tr class='statsy_bron'><td>ZASIĘG</td><td>".$pokaz['range_bron']."</td></tr>
                                        <tr class='statsy_bron'><td>CENA SPRZEDAŻY DZIWAKOWI</td><td>".$pokaz['creep_sell_price']."</td></tr></table><br>
                                </div>
                            </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>";

        $licz++;
    }
}
echo '<br>';
}
?>

<?php
    function tabela_postacie(){
        include "config.php";
        $conn=mysqli_connect($lokacja_baza, $user_baza, $pass_baza, $name_baza);
        $zapytanie='SELECT * FROM postacie 
        JOIN bronie as b1 ON b1.id=postacie.start_weapon 
        JOIN bronie as b2 ON b2.id=postacie.start_weapon_2
        JOIN itemy as i1 ON i1.id=postacie.start_item
        JOIN itemy as i2 ON i2.id=postacie.start_item_2
        JOIN itemy as i3 ON i3.id=postacie.start_item_3
        ;';

        $wynik=mysqli_query($conn,$zapytanie);
        $ile_rekord=mysqli_num_rows($wynik);
        $licz=1;
        echo "<div style='padding: 0px; margin:0;' class='row mb-3 mt-2'>";
        while ($licz<=$ile_rekord){
            if($licz==4 || $licz==7){

                echo '</div>';
                echo "<div style='padding: 0px; margin:0;' class='row mb-3 mt-2'>";
            }
            $pokaz=mysqli_fetch_array($wynik);

            echo "
                <div style='margin-top: 1%; margin-bottom: 1%;' class='col-sm-3 text-center'>
                    <button style='padding: 0; margin:0; height:100%' type='button' class='btn m-1 btn-dark w-75' data-bs-toggle='modal' data-bs-target='#".$licz."'>".
                        "<div id='cale_te_postacie'>"
                        .'<img style="height:150px;" src="data:image/png;base64,'.base64_encode($pokaz['baner_gungeoneer']).'">'     
                        ."<h2>".$pokaz['name_gungeoneer']."</h2>".
                        "</div>
                    </button>".

                    //środek
                    "<div style='--bs-modal-width: 700px;' class='modal fade mt-5 text-dark-emphasis' data-bs-theme='dark' id='".$licz."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                        
                        <div id='cale_te'>
                        
                            <div style='display: flex; justify-content: right;'>
                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                            </div>

                            <div id='naglowek_okienko'>
                                <div style='display: flex; flex-direction: column;'> 
                                    <div id='obrazek_okienko'>
                                        ".'<img style="height: 15vh;" src="data:image/png;base64,'.base64_encode($pokaz['portret_gungeoneer']).'">'."
                                    </div>
                                </div>
                                
                                <div id='nazwa_okienko'>
                                    <div class='mb-2'>
                                        <span style='font-size: 5vh;'>
                                            ".$pokaz['name_gungeoneer']."
                                        </span>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <br>
                            
                            <div class='mb-2'>Wygląd postaci</div>"
                            .'<table><tr><td><h4>Podstawowy</h4></td><td><h4>Alternatywny</h4></td></tr>
                            <tr><td><img style="width: 40%;" src="data:image/png;base64,'.base64_encode($pokaz['icon_gungeoneer']).'"></td><td><img style="width: 40%;" src="data:image/png;base64,'.base64_encode($pokaz['alt_gungeoneer']).'"></td></tr></table>'.

                        //bronie
                        "<br>".
                        "<div class='mb-2'>Bronie startowe</div>"
                        //pierwsza broń
                        .'<table><tr><td><img  src="data:image/png;base64,'.base64_encode($pokaz[17]).'">'."</td><td>"."<h4>".$pokaz[13]."</h4>"."</td></tr>";
                        //druga broń
                        if($pokaz[43]==1){
                            echo '<tr><td><img src="data:image/png;base64,'.base64_encode($pokaz[33]).'">'."</td><td>"."<h4>".$pokaz[29]."</h4>"."</td></tr></table><br>";
                        }
                        //losowa broń
                        elseif($pokaz[29]=='Losowa broń'){
                            echo '<tr><td><img src="data:image/png;base64,'.base64_encode($pokaz[33]).'">'."</td><td>"."<h4>".$pokaz[29]."</h4>"."</td></tr></table><br>";
                        }
                        else{
                            echo "</table><br>";
                        }
                        
                        //przedmioty
                        echo "<div class='mb-2'>Przedmioty startowe</div>";
                        //pierwszy przedmiot
                        echo 
                        '<table><tr><td>
                        <img src="data:image/png;base64,'.base64_encode($pokaz[49]).'">'."</td><td>"."<h4>".$pokaz[45]."</h4>"."</td></tr>";
                        //drugi przedmiot
                        if($pokaz[63]==1){
                            echo '<tr><td><img src="data:image/png;base64,'.base64_encode($pokaz[59]).'">'."</td><td>"."<h4>".$pokaz[55]."</h4>"."</td></tr>";
                            //trzeci przedmiot
                            if($pokaz[73]==1){
                                echo '<tr><td><img src="data:image/png;base64,'.base64_encode($pokaz[69]).'">'."</td><td>"."<h4>".$pokaz[65]."</h4>"."</td></tr></table><br>";
                            }
                            else{
                                echo "</table>";
                            }
                        }
                        else{
                            echo "</table>";
                        }
                        echo
                        "<br><br></div>
                        </div>
                    </div>
                    </div>
                </div>";

            $licz++;
        }
        echo '</div>';
        echo '</div>';
    }
?>




<?php
    function tabela_itemy(){
        include "config.php";
        $conn=mysqli_connect($lokacja_baza, $user_baza, $pass_baza, $name_baza);
        $licz=1;

        echo '<div style="display: flex; flex-direction: column; align-items: center;" class="window_start">
            <div style="display:flex; flex-direction: row; justify-content: center" class="mb-2">
                <span class="temat"> 
                    Przedmioty
                </span>
            </div>
            <span class="text_content"><b>
                W grze spotkać możemy wiele przedmiotów, które w wyjątkowy sposób zmieniają rozgrywkę, często zmieniając statystyki, 
                nadając wyjątkowe efekty, wystrzeliwanym przez naszą postać, pociskom i wiele, wiele więcej.
            </b></span>
            <div style="display: flex; align-items: center;">
                <form action="" method="post">
                    <input name="nazwa" id="nazwa" type="text">
                    <button type="submit" class="button">Szukaj</button>
                </form>
            </div>
        </div>';

        if(isset($_POST['nazwa'])){
            $search=$_POST['nazwa'];
            $zapytanie='SELECT * FROM itemy JOIN qualities ON itemy.quality=qualities.id where name_item like "%'.$search.'%";';
            $wynik=mysqli_query($conn,$zapytanie);
            $ile_rekord=mysqli_num_rows($wynik);
        }
        else{
            $zapytanie='SELECT * FROM itemy JOIN qualities ON itemy.quality=qualities.id;';
            $wynik=mysqli_query($conn,$zapytanie);
            $ile_rekord=mysqli_num_rows($wynik);
        }

        echo "<div style='padding: 0px; margin:0;' class='row mb-3 mt-2'>";
        while ($licz<=$ile_rekord){
                $pokaz=mysqli_fetch_array($wynik);
                if ($pokaz['exist_item']=='0'){
                    break;
                }
                elseif ($pokaz['exist_item']=='1'){
                    echo "
                    <div style='margin-top: 1%; margin-bottom: 1%;' id='".$pokaz['name_item']."' class='col-sm-3 text-center'>
                        <button style='padding: 0; margin:0; height:100%;' type='button' class='btn m-1 btn-dark w-75' data-bs-toggle='modal' data-bs-target='#".$licz."'>
                            <div id='cale_te_item'>
                                ".'<img src="data:image/png;base64,'.base64_encode($pokaz['icon_item']).'">'."
                                <h2>".$pokaz['name_item']."</h2>
                            </div>
                        </button>
            
                        <div class='modal fade mt-5 text-dark-emphasis' data-bs-theme='dark' id='".$licz."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            <div class='modal-dialog'>
                                <div class='modal-content'>
                                
                                <div id='cale_te'>
                                
                                    <div style='display: flex; justify-content: right;'>
                                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
        
                                        <div id='naglowek_okienko'>
                                            <div id='obrazek_okienko'>
                                                ".'<img style="width: 180%;" src="data:image/png;base64,'.base64_encode($pokaz['icon_item']).'">'."
                                            </div>
                                            
                                            <div id='nazwa_okienko'>
            
                                                <div class='mb-2'>
                                                    ".$pokaz['name_item']."
                                                </div>
                                                <hr>
                                                <div class='mb-2'>
                                                    ".$pokaz['cytat_item']."
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class='modal-body'>
                                            <br>
                                            <span style='font-size: 70%;'>
                                            ".$pokaz['opis']."
                                            </span>
                                            <br><br>
                                            <span style='font-size: 70%;'>
                                            ".$pokaz['opis_2']."
                                            </span>
                                            <br>
                                            
                                            <div class='statsy'>
                                                <table>
                                                    <tr class='statsy_bron'><td>JAKOŚĆ</td><td>".'<img style="width: 15%;" src="data:image/png;base64,'.base64_encode($pokaz['image_quality']).'">'."</td></tr>
                                                    <tr class='statsy_bron'><td>TYP PRZEDMIOTU</td><td>".$pokaz['type_item']."</td></tr>
                                                    <tr class='statsy_bron'><td>CENA SPRZEDAŻY DZIWAKOWI</td><td>".$pokaz['creep_sell_price']."</td></tr></table><br>
                                            </div>
                                        </div>
            
                                        </div>
            
                                    </div>
                                </div>
                            </div>
                        </div>";
                    $licz++;
                }
            }
    }
?>

<?php
    function tabela_enemy(){
        include "config.php";
        $conn=mysqli_connect($lokacja_baza, $user_baza, $pass_baza, $name_baza);
        $zapytanie='SELECT * FROM enemy;';
        $wynik=mysqli_query($conn,$zapytanie);
        $ile_rekord=mysqli_num_rows($wynik);
        $licz=1;

        echo "<div style='padding: 0px; margin:0;' class='row mb-3 mt-2'>";
        while ($licz<=$ile_rekord){
            $pokaz=mysqli_fetch_array($wynik);
            echo "
            <div style='margin-top: 1%; margin-bottom: 1%;' class='col-sm-3 text-center'>
                <button style='padding: 0; margin:0; height:100%;' type='button' class='btn m-1 btn-dark w-75' data-bs-toggle='modal' data-bs-target='#".$licz."'>
                <div id='cale_te_enemy'>
                ".'<img src="data:image/png;base64,'.base64_encode($pokaz['icon_enemy']).'">'."
                    <h2>".$pokaz['name_enemy']."</h2>
                <div>
                </button>


                <div class='modal fade mt-5 text-dark-emphasis' data-bs-theme='dark' id='".$licz."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                        
                        <div id='cale_te'>
                        
                            <div style='display: flex; justify-content: right;'>
                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                            </div>

                            <div id='naglowek_okienko'>
                                <div style='display: flex; flex-direction: column;'> 
                                    <div id='obrazek_okienko'>
                                        ".'<img style="width: 180%;" src="data:image/png;base64,'.base64_encode($pokaz['icon_enemy']).'">'."
                                    </div>
                                    <div class='statsy'>
                                        <table style='width: 100%;'>
                                            <tr class='statsy_bron'><td>HP</td><td style='width: 50%;'>".$pokaz['basehealth_enemy']."</td></tr>
                                        </table>
                                    </div>
                                </div>
                                
                                <div id='nazwa_okienko'>

                                    <div class='mb-2'>
                                        ".$pokaz['name_enemy']."
                                    </div>
                                    <hr>
                                    <div class='mb-2'>
                                        ".$pokaz['cytat_enemy']."
                                    </div>
                                </div>
                            </div>

                                ".'<img style="padding: 4vh; width: 100%;" src="data:image/png;base64,'.base64_encode($pokaz['baner_enemy']).'">'."
                            
                            

                            <div class='modal-body'>
                                <br>
                                <span style='font-size: 70%;'>
                                ".$pokaz['opis']."
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
        }
 
?>

<?php
    function tabela_boss_drzwi(){
        include "config.php";
        $conn=mysqli_connect($lokacja_baza, $user_baza, $pass_baza, $name_baza);
        $zapytanie='SELECT * FROM boss where type="door";';
        $wynik=mysqli_query($conn,$zapytanie);
        $pokaz=mysqli_fetch_array($wynik);
        
        echo "
            <div margin-top: 1%; margin-bottom: 1%; class='col-sm-4 text-center'>
                <button style='padding: 0; margin:0; height: 100%' type='button' class='btn m-1 btn-dark w-75' data-bs-toggle='modal' data-bs-target='#".$pokaz['id']."'>
                <div id='cale_te_boss'>
                ".'<img style="height: 18vh; width: fit;" src="data:image/png;base64,'.base64_encode($pokaz['icon_boss']).'">'."
                    <h2>".$pokaz['name_boss']."</h2>
                <div>
                </button>
    
    
                <div class='modal fade mt-5 text-dark-emphasis' data-bs-theme='dark' id='".$pokaz['id']."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                        
                        <div id='cale_te'>
                        
                            <div style='display: flex; justify-content: right;'>
                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                            </div>
    
                            <div id='naglowek_okienko'>
                                <div style='display: flex; flex-direction: column;'> 
                                    <div id='obrazek_okienko'>
                                        ".'<img style="width: 180%;" src="data:image/png;base64,'.base64_encode($pokaz['simple_boss']).'">'."
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
                                
                                <a class=link_ style='font-size: 70%;' href='http://localhost/moje%20pliki/projekt/wiki-enter-the-gungeon/floors.php#Właściwy%20Loch%20Giwer'> Właściwy Loch Giwer</a>
                                <a class=link_ style='font-size: 70%;' href='http://localhost/moje%20pliki/projekt/wiki-enter-the-gungeon/floors.php#Kopalnia%20Czarnego%20Prochu'> Kopalnia Czarnego Prochu</a>
                                <a class=link_ style='font-size: 70%;' href='http://localhost/moje%20pliki/projekt/wiki-enter-the-gungeon/floors.php#Uroczysko'> Uroczysko</a>
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
            </div>
            </div>
            </div>";
    }

?>

<?php
    function tabela_pietro(){
        include "config.php";
        $conn=mysqli_connect($lokacja_baza, $user_baza, $pass_baza, $name_baza);
        $zapytanie='SELECT * FROM floors where type_floor like "Komora";';
        $wynik=mysqli_query($conn,$zapytanie);
        $ile_rekord=mysqli_num_rows($wynik);
        $licz=1;

        while ($licz<=$ile_rekord){
            $pokaz=mysqli_fetch_array($wynik);
            echo "<a class='spis_2' href='#".$pokaz['name_floor']."'>".$pokaz['name_floor'].'</a>';
            if($licz<$ile_rekord){
                echo '<hr style="width: 80%; border-top: 4px solid #eed3fe; opacity: 1;">';
                $licz++;
            }
            else{
                $licz++;
            }
            }
    }    
?>

<?php
    function tabela_pietro_secret(){
        include "config.php";
        $conn=mysqli_connect($lokacja_baza, $user_baza, $pass_baza, $name_baza);
        $zapytanie='SELECT * FROM floors where type_floor like "Sekretne piętro";';
        $wynik=mysqli_query($conn,$zapytanie);
        $ile_rekord=mysqli_num_rows($wynik);
        $licz=1;

        while ($licz<=$ile_rekord){
            $pokaz=mysqli_fetch_array($wynik);
            echo "<a class='spis_2' href='#".$pokaz['name_floor']."'>".$pokaz['name_floor'].'</a>';
            if($licz<$ile_rekord){
                echo '<hr style="width: 80%; border-top: 4px solid #eed3fe; opacity: 1;">';
                $licz++;
            }
            else{
                $licz++;
            }
            }
    }    
?>







<?php
    function tabela_monety(){
        include "config.php";
        $conn=mysqli_connect($lokacja_baza, $user_baza, $pass_baza, $name_baza);
        $zapytanie='SELECT * FROM pickupy where name_pickup like "%łuska";';
        $wynik=mysqli_query($conn,$zapytanie);
        $ile_rekord=mysqli_num_rows($wynik);
        $licz=1;

        while ($licz<=$ile_rekord){
            $pokaz=mysqli_fetch_array($wynik);
            if($pokaz['name_pickup']=='Brązowa łuska'){
                echo '<img style="height:40px;" src="data:image/png;base64,'.base64_encode($pokaz['icon_pickup']).'">'.'<span class="text_content"> - ('.$pokaz['name_pickup'].') jest warta 1 Łuskę.'.'</span><br>';
                $licz++;
            }
            elseif($pokaz['name_pickup']=='Srebrna łuska'){
                echo '<img style="height:40px;" src="data:image/png;base64,'.base64_encode($pokaz['icon_pickup']).'">'.'<span class="text_content"> - ('.$pokaz['name_pickup'].') jest warta 5 Łusek.'.'</span><br>';
                $licz++;
            }
            elseif($pokaz['name_pickup']=='Złota łuska'){
                echo '<img style="height:40px;" src="data:image/png;base64,'.base64_encode($pokaz['icon_pickup']).'">'.'<span class="text_content"> - ('.$pokaz['name_pickup'].') jest warta 50 Łusek.'.'</span><br>';
                $licz++;
            }
        }
        
    }
?>
<?php
    function tabela_kredyty(){
        include "config.php";
        $conn=mysqli_connect($lokacja_baza, $user_baza, $pass_baza, $name_baza);
        $zapytanie='SELECT * FROM pickupy where name_pickup like "Kredyty%";';
        $wynik=mysqli_query($conn,$zapytanie);
        $pokaz=mysqli_fetch_array($wynik);
        echo '<p><img style="height:40px;" src="data:image/png;base64,'.base64_encode($pokaz['icon_pickup']).'"><p>';
        }
?>
<?php
    function tabela_klucze(){
        include "config.php";
        $conn=mysqli_connect($lokacja_baza, $user_baza, $pass_baza, $name_baza);
        $zapytanie='SELECT * FROM pickupy where name_pickup like "%klucz%";';
        $wynik=mysqli_query($conn,$zapytanie);
        $ile_rekord=mysqli_num_rows($wynik);
        $licz=1;

        while ($licz<=$ile_rekord){
            $pokaz=mysqli_fetch_array($wynik);
            if($pokaz['name_pickup']=='Klucz'){
                echo '<p><img style="height:40px;" src="data:image/png;base64,'.base64_encode($pokaz['icon_pickup']).'"></p>'.
                    '<p class="text_content"><b>
                        Keys are used to open locked chests and doors, as well as the trapdoor to the Oubliette and the trapdoor to the passageway to the Resourceful Rats Lair.
                        Every Shop apart from the Forges shop will always have at least one key for sale.
                        Flynt uses keys instead of coins in exchange for his items.
                    </b></p><br><br>';
                $licz++;
            }
            elseif($pokaz['name_pickup']=='Klucz do celi'){
                echo "<div class='mb-2'>
                <span class='temat_2'>".
                    $pokaz['name_pickup']
                ."</span>
            </div>";
            echo '<p><img style="height:40px;" src="data:image/png;base64,'.base64_encode($pokaz['icon_pickup']).'"></p>'.
                '<p class="text_content"><b>
                    Cell keys are used to open cells to free NPCs. On any floor with a cell, a cell key will drop from a random enemy on the floor (including the boss). 
                    They cannot be used as regular keys. Cell keys are automatically collected by the player if they attempt to leave them behind.
                </b></p><br><br>';
                $licz++;
            }
            elseif($pokaz['name_pickup']=='Szczurzy klucz'){
                echo "<div class='mb-2'>
                <span class='temat_2'>".
                    $pokaz['name_pickup']
                ."</span>
            </div>";
                echo '<p><img style="height:40px;" src="data:image/png;base64,'.base64_encode($pokaz['icon_pickup']).'"></p>'.
                '<p class="text_content"><b>
                    Rat keys are used to open Rat Chests and certain doors. They are obtained from the third phase of the Resourceful Rat fight. 
                    They cannot be used as regular keys. Rat Keys are automatically collected by the player if they attempt to leave them behind.
                </b></p>';
                $licz++;
            }
        }
        
    }
?>

<?php
function tabela_serca(){
        include "config.php";
        $conn=mysqli_connect($lokacja_baza, $user_baza, $pass_baza, $name_baza);
        $zapytanie='SELECT * FROM pickupy where name_pickup like "%serc%";';
        $wynik=mysqli_query($conn,$zapytanie);
        $ile_rekord=mysqli_num_rows($wynik);
        $licz=1;
        echo "<p>";
        while ($licz<=$ile_rekord){
            $pokaz=mysqli_fetch_array($wynik);
            echo '<img style="height:40px;" src="data:image/png;base64,'.base64_encode($pokaz['icon_pickup']).'">';
            $licz++;
        }
        
            echo '</p><p class="text_content"><b>
                        Keys are used to open locked chests and doors, as well as the trapdoor to the Oubliette and the trapdoor to the passageway to the Resourceful Rats Lair.
                        Every Shop apart from the Forges shop will always have at least one key for sale.
                        Flynt uses keys instead of coins in exchange for his items.
                    </b></p>';
 
            
        }
?>

<?php
function tabela_pancerz(){
        include "config.php";
        $conn=mysqli_connect($lokacja_baza, $user_baza, $pass_baza, $name_baza);
        $zapytanie='SELECT * FROM pickupy where name_pickup like "pancerz";';
        $wynik=mysqli_query($conn,$zapytanie);
        $licz=1;
        echo "<p>";
        $pokaz=mysqli_fetch_array($wynik);
        echo '<img style="height:40px;" src="data:image/png;base64,'.base64_encode($pokaz['icon_pickup']).'">';
        echo '</p><p class="text_content"><b>
            Keys are used to open locked chests and doors, as well as the trapdoor to the Oubliette and the trapdoor to the passageway to the Resourceful Rats Lair.
            Every Shop apart from the Forges shop will always have at least one key for sale.
            Flynt uses keys instead of coins in exchange for his items.
        </b></p>'; 
    }
?>

<?php
    function tabela_slepak(){
        include "config.php";
        $conn=mysqli_connect($lokacja_baza, $user_baza, $pass_baza, $name_baza);
        $zapytanie='SELECT * FROM pickupy where name_pickup like "ślepak";';
        $wynik=mysqli_query($conn,$zapytanie);
        $pokaz=mysqli_fetch_array($wynik);
        echo '<p><img style="height:40px;" src="data:image/png;base64,'.base64_encode($pokaz['icon_pickup']).'"></p>
        <p class="text_content"><b>
            Keys are used to open locked chests and doors, as well as the trapdoor to the Oubliette and the trapdoor to the passageway to the Resourceful Rats Lair.
            Every Shop apart from the Forges shop will always have at least one key for sale.
            Flynt uses keys instead of coins in exchange for his items.
        </b></p>';
        }
?>


<?php
    function tabela_amunicja(){
        include "config.php";
        $conn=mysqli_connect($lokacja_baza, $user_baza, $pass_baza, $name_baza);
        $zapytanie='SELECT * FROM pickupy where name_pickup like "Pudełko z %";';
        $wynik=mysqli_query($conn,$zapytanie);
        $ile_rekord=mysqli_num_rows($wynik);
        $licz=1;

        while ($licz<=$ile_rekord){
            $pokaz=mysqli_fetch_array($wynik);
            if($pokaz['name_pickup']=='Pudełko z amunicją'){
                echo "<div class='mb-2'>
                <span class='temat_2'>Pudełko z amunicją</span>
            </div>";
                echo '<p><img style="height:40px;" src="data:image/png;base64,'.base64_encode($pokaz['icon_pickup']).'"></p>
                    <p class="text_content"><b>
                        Keys are used to open locked chests and doors, as well as the trapdoor to the Oubliette and the trapdoor to the passageway to the Resourceful Rats Lair.
                        Every Shop apart from the Forges shop will always have at least one key for sale.
                        Flynt uses keys instead of coins in exchange for his items.
                    </b></p><br><br>';
                $licz++;
            }
            elseif($pokaz['name_pickup']=='Pudełko z amunicją_2'){
                echo "<div class='mb-2'>
                <span class='temat_2'>Pudełko z wymieszaną amunicją</span>
            </div>";
            echo '<p><img style="height:40px;" src="data:image/png;base64,'.base64_encode($pokaz['icon_pickup']).'"></p>'.
                '<p class="text_content"><b>
                    Cell keys are used to open cells to free NPCs. On any floor with a cell, a cell key will drop from a random enemy on the floor (including the boss). 
                    They cannot be used as regular keys. Cell keys are automatically collected by the player if they attempt to leave them behind.
                </b></p><br><br>';
                $licz++;
            }
        }
    }
?>