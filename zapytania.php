<?php
function tabela_bron(){
    include "config.php";
    $conn=mysqli_connect($lokacja_baza, $user_baza, $pass_baza, $name_baza);
    $zapytanie='SELECT * FROM bronie JOIN qualities ON bronie.quality=qualities.id;';
    $wynik=mysqli_query($conn,$zapytanie);
    $ile_rekord=mysqli_num_rows($wynik);
    $licz=1;

    echo "<table>
        <tr style='border: 1px solid white; background-color: black; color: white; float: center; font-size: 50%;'>
            <td class=first_line>NAZWA BRONI</td>
            <td class=first_line>WPIS W AMMUNOMICONIE</td>
            <td class=first_line>WYGLĄD BRONI</td>
            <td class=first_line>JAKOŚĆ</td>
            <td class=first_line>TYP BRONI</td>
            <td class=first_line>ROZMIAR MAGAZYNKU</td>
            <td class=first_line>MAKSYMALNA ILOŚĆ AMUNICJI</td>
            <td class=first_line>OBRAŻENIA</td>
            <td class=first_line>SZYBKOSTRZELNOŚĆ</td>
            <td class=first_line>ZASIĘG</td>
            <td class=first_line>RODZAJ OBRAŻEŃ</td>
            <td class=first_line>CENA SPRZEDAŻY DZIWAKOWI</td>            
        </tr>";
    
    while ($licz<=$ile_rekord){
        $pokaz=mysqli_fetch_array($wynik);
        if ($pokaz['exist_bron']=='0'){
            break;
        }
        elseif($pokaz['exist_bron']=='1'){
            echo '<tr><td>'.$pokaz[1].'</td><td>'.$pokaz[2].'</td><td>'.'<img src="data:image/png;base64,'.base64_encode($pokaz['icon_bron']).'">'.'</td><td>'.'<img src="data:image/png;base64,'.base64_encode($pokaz['image_quality']).'">'.'</td><td>'.$pokaz[5].'</td><td>'.$pokaz[6].'</td><td>'.$pokaz[7].'</td><td>'.$pokaz[8].'</td><td>'.$pokaz[9].'</td><td>'.$pokaz[10].'</td><td>'.$pokaz[11].'</td><td>'.$pokaz[12].'</td></tr>';
            $licz++;
        }
    }
    echo '</table>';
    
};
?>

<?php
function tabela_bron_2(){
    include "config.php";
    $conn=mysqli_connect($lokacja_baza, $user_baza, $pass_baza, $name_baza);
    $zapytanie='SELECT * FROM bronie JOIN qualities ON bronie.quality=qualities.id;';
    $wynik=mysqli_query($conn,$zapytanie);
    $ile_rekord=mysqli_num_rows($wynik);
    $licz=1;
    echo "<div class='row mb-3 mt-2'>";
    while ($licz<=$ile_rekord){
        /*if($licz==5){
            echo '</div>';
            echo "<div class='row mb-3 mt-2'>";
        }*/
        
        $pokaz=mysqli_fetch_array($wynik);
        if ($pokaz['exist_bron']=='0'){
            break;
        }
        elseif($pokaz['exist_bron']=='1'){
        echo "
            <div class='col-sm-3 text-center'>
                <button type='button' class='btn m-1 btn-dark' data-bs-toggle='modal' data-bs-target='#".$licz."'>"
                    //obrazek postaci
                    .'<img src="data:image/png;base64,'.base64_encode($pokaz['icon_bron']).'">'
                    //nazwa postaci
                    ."<h4>".$pokaz['name_bron']."</h4>".
                "</button>".

                //środek
                "<div class='modal fade mt-5' id=".$licz." tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                <div class='modal-dialog'>
                    <div class='modal-content'>
                    <div class='modal-header'>
                        <div class='mb-2'>"
                            .$pokaz['name_bron'].
                        "</div>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>".

                    "<div class='modal-body'>"

                    //obrazek broni
                    .'<img src="data:image/png;base64,'.base64_encode($pokaz['icon_bron']).'">'.
                    //opis broni
                    "<div class='mb-2'>Opis broni</div>".
                    "<div class='text-start'>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit alias libero inventore nam voluptates voluptas voluptate sapiente pariatur culpa iusto. Quisquam sunt possimus consequuntur, veniam deserunt dolorem odit nostrum nam!
                    </div>".
                    //bronie
                    "<div class='mb-2'>Statystyki</div>".
                    //statystyki
                    "<div class='text-start'>";
                    echo "<table>";
                    //<tr style='border: 1px solid white; float: center; font-size: 50%;'>

                    echo '<tr class="statsy_bron"><td>NAZWA BRONI</td><td>'.$pokaz[1].'</td></tr>';
                    echo '<tr class="statsy_bron"><td>WPIS W AMMUNOMICONIE</td><td>'.$pokaz[2].'</td></tr>';
                    echo '<tr class="statsy_bron"><td>JAKOŚĆ</td><td>'.'<img style="width: 10%;" src="data:image/png;base64,'.base64_encode($pokaz['image_quality']).'">'.'</td></tr>';
                    echo '<tr class="statsy_bron"><td>TYP BRONI</td><td>'.$pokaz[5].'</td></tr>';
                    echo '<tr class="statsy_bron"><td>ROZMIAR MAGAZYNKU</td><td>'.$pokaz[6].'</td></tr>';

                    echo '<tr class="statsy_bron"><td>MAKSYMALNA ILOŚĆ AMUNICJI</td><td>'.$pokaz[7].'</td></tr>';
                    echo '<tr class="statsy_bron"><td>OBRAŻENIA</td><td>'.$pokaz[8].'</td></tr>';
                    echo '<tr class="statsy_bron"><td>SZYBKOSTRZELNOŚĆ</td><td>'.$pokaz[9].'</td></tr>';
                    echo '<tr class="statsy_bron"><td>ZASIĘG</td><td>'.$pokaz[10].'</td></tr>';
                    echo '<tr class="statsy_bron"><td>RODZAJ OBRAŻEŃ</td><td>'.$pokaz[11].'</td></tr>';
                    echo '<tr class="statsy_bron"><td>CENA SPRZEDAŻY DZIWAKOWI</td><td>'.$pokaz[12].'</td></tr>';  
                    echo '</table>
                    </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>';

        $licz++;
    }
}
echo '<br>';
}
?>

<?php
    function tabela_postacie_2(){
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
        echo "<div style='display:flex; flex-direction:column;'>";
        echo "<div class='row mb-3 mt-2'>";
        while ($licz<=$ile_rekord){
            if($licz==4 || $licz==7){
                echo '</div>';
                echo "<div class='row mb-3 mt-2'>";
            }
            $pokaz=mysqli_fetch_array($wynik);

            echo "
                <div class='col-sm-3 text-center'>
                    <button type='button' class='btn m-1 btn-dark w-75' data-bs-toggle='modal' data-bs-target='#".$pokaz['name_gungeoneer'].$licz."'>"
                        //obrazek postaci
                        .'<img style="height:150px;" src="data:image/png;base64,'.base64_encode($pokaz[5]).'">'."<br>"
                        //nazwa postaci
                        ."<h4>".$pokaz['name_gungeoneer']."</h4>".
                    "</button>".

                    //środek
                    "<div class='modal fade mt-5' id=".$pokaz['name_gungeoneer'].$licz." tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                        <div class='modal-header'>
                            <div class='mb-2'>"
                                .$pokaz['name_gungeoneer'].
                            "</div>
                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                        </div>".

                        "<div class='modal-body'>"

                        //portret postaci
                        .'<img style="height:100px;" src="data:image/png;base64,'.base64_encode($pokaz[2]).'">'.
                        '<img style="height:100px;" src="data:image/png;base64,'.base64_encode($pokaz[3]).'">'
                        //opis postaci
                        ."<div class='mb-2'>Opis postaci</div>".
                        "<div class='text-start'>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit alias libero inventore nam voluptates voluptas voluptate sapiente pariatur culpa iusto. Quisquam sunt possimus consequuntur, veniam deserunt dolorem odit nostrum nam!
                        </div>".
                        //bronie
                        "<div class='mb-2'>Bronie startowe</div>"
                        //pierwsza broń
                        .'<img src="data:image/png;base64,'.base64_encode($pokaz[15]).'">'."<br>"."<a>bron 1</a>"."<br>";
                        //druga broń
                        if($pokaz[39]==1){
                            echo '<img src="data:image/png;base64,'.base64_encode($pokaz[29]).'">'."<br>"."<a>bron 2</a>"."<br>";
                        }
                        //losowa broń
                        elseif($pokaz[27]=='Losowa broń'){
                            echo '<img src="data:image/png;base64,'.base64_encode($pokaz[29]).'">'."<br>"."<a>bron 2</a>"."<br>";
                        }
                        //przedmioty
                        echo "<div class='mb-2'>Przedmioty startowe</div>";
                        //pierwszy przedmiot
                        echo '<td>'.'<img src="data:image/png;base64,'.base64_encode($pokaz[43]).'">'."<br>"."<a>przedmiot 1</a>"."<br>";
                        //drugi przedmiot
                        if($pokaz[55]==1){
                            echo '<img src="data:image/png;base64,'.base64_encode($pokaz[51]).'">'."<br>"."<a>przedmiot 2</a>"."<br>";
                            //trzeci przedmiot
                            if($pokaz[63]==1){
                                echo '<img src="data:image/png;base64,'.base64_encode($pokaz[59]).'">'."<br>"."<a>przedmiot 3</a>"."<br>";
                            }
                            //elseif($pokaz[63]==0){
                            //    echo "</td><tr>";
                            //}
                        }
                        //elseif($pokaz[55]==0){
                        //    echo "</td><tr>";
                        //}
                        echo
                        "</div>
                        </div>
                    </div>
                    </div>
                </div>";



            //obrazek/nazwa postaci
            //     echo "<tr><td>".'<img style="height:100px;" src="data:image/png;base64,'.base64_encode($pokaz[4]).'">'."</td><td>".
            //pierwsza broń
            //    '<img src="data:image/png;base64,'.base64_encode($pokaz[15]).'">';
            //druga broń
            //if($pokaz[39]==1){
            //    echo '<img src="data:image/png;base64,'.base64_encode($pokaz[29]).'">'."</td>";
            //}
            //elseif($pokaz[27]=='Losowa broń'){
            //    echo '<img src="data:image/png;base64,'.base64_encode($pokaz[29]).'">'."</td>";
            //}
            //else{
            //    echo "</td>";
            //}
            //pierwszy przedmiot
            //echo '<td>'.'<img src="data:image/png;base64,'.base64_encode($pokaz[43]).'">';
            //drugi przedmiot

            $licz++;
        }
        echo '</div>';
        echo '</div>';
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
        //SELECT name_gungeoneer, b1.icon_bron, b2.icon_bron FROM postacie JOIN bronie as b1 ON b1.id_bron=postacie.start_weapon JOIN bronie as b2 ON b2.id_bron=postacie.start_weapon_2;';
        

        $wynik=mysqli_query($conn,$zapytanie);
        
        $ile_rekord=mysqli_num_rows($wynik);
        $licz=1;

        echo "<table>
            <tr style='border: 1px solid white; background-color: black; color: white; float: center; font-size: 50%;'>
                <td class=first_line>POSTAĆ</td>
                <td class=first_line>BRONIE STARTOWE</td>
                <td class=first_line>PRZEDMIOTY STARTOWY</td>          
            </tr>";

        while ($licz<=$ile_rekord){
            $pokaz=mysqli_fetch_array($wynik);

            //obrazek/nazwa postaci
            echo "<tr><td>".'<img style="height:100px;" src="data:image/png;base64,'.base64_encode($pokaz[4]).'">'."</td><td>".
            //pierwsza broń
            '<img src="data:image/png;base64,'.base64_encode($pokaz[15]).'">';
            //druga broń
            if($pokaz[39]==1){
                echo '<img src="data:image/png;base64,'.base64_encode($pokaz[29]).'">'."</td>";
            }
            elseif($pokaz[27]=='Losowa broń'){
                echo '<img src="data:image/png;base64,'.base64_encode($pokaz[29]).'">'."</td>";
            }
            else{
                echo "</td>";
            }
            //przedmiot dla paradoxa
            echo '<td>'.'<img src="data:image/png;base64,'.base64_encode($pokaz[43]).'">';
            //drugi przedmiot
            if($pokaz[55]==1){
                echo '<img src="data:image/png;base64,'.base64_encode($pokaz[51]).'">';
                //trzeci przedmiot
                if($pokaz[63]==1){
                    echo '<img src="data:image/png;base64,'.base64_encode($pokaz[59]).'">'."</td></tr>";
                }
                elseif($pokaz[63]==0){
                    echo "</td><tr>";
                }
            }
            elseif($pokaz[55]==0){
                echo "</td><tr>";
            }

            

            //echo "<tr><td>".$pokaz[1]."</td><td>".'<img src="data:image/png;base64,'.base64_encode($pokaz['b1.icon_bron']).'">'."</td><td>".
            //'<img src="data:image/png;base64,'.base64_encode($pokaz['b2.icon_bron']).'">'."</td>"."</tr>";

            //echo "<tr><td>".$pokaz['name_gungeoneer']."</td><td>".'<img src="data:image/png;base64,'.base64_encode($pokaz['b1.icon_bron']).'">'."</td><td>".
            //'<img src="data:image/png;base64,'.base64_encode($pokaz['b2.icon_bron']).'">'."</td>"."</tr>";
            
            $licz++;
        }
        echo '</table>';
    }
?>

<?php
    function tabela_itemy(){
        include "config.php";
        $conn=mysqli_connect($lokacja_baza, $user_baza, $pass_baza, $name_baza);
        $zapytanie='SELECT * FROM itemy JOIN qualities ON itemy.quality=qualities.id;';
        $wynik=mysqli_query($conn,$zapytanie);
        $ile_rekord=mysqli_num_rows($wynik);
        $licz=1;

        echo "<table>
            <tr style='border: 1px solid white; background-color: black; color: white; float: center; font-size: 50%;'>
                <td class=first_line>NAZWA PRZEDMIOTU</td>
                <td class=first_line>WPIS W AMMUNOMICONIE</td>
                <td class=first_line>WYGLĄD PRZEDMIOTU</td>
                <td class=first_line>JAKOŚĆ</td>
                <td class=first_line>TYP PRZEDMIOTU</td>
                <td class=first_line>OPIS</td>
                <td class=first_line>CENA SPRZEDAŻY DZIWAKOWI</td>            
            </tr>";

        while ($licz<=$ile_rekord){
                $pokaz=mysqli_fetch_array($wynik);
                if ($pokaz['exist_item']=='0'){
                    break;
                }
                else{
                    echo '<tr><td>'.$pokaz[1].'</td><td>'.$pokaz[2].'</td><td>'.'<img src="data:image/png;base64,'.base64_encode($pokaz['icon_item']).'">'.'</td><td>'.'<img src="data:image/png;base64,'.base64_encode($pokaz['image_quality']).'">'.'</td><td>'.$pokaz[5].'</td><td>'.$pokaz[6].'</td><td>'.$pokaz[7].'</td></tr>';
                    $licz++;
                }
            }
        echo '</table>';
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

        echo "<table>
            <tr style='border: 1px solid white; background-color: black; color: white; float: center; font-size: 50%;'>
                <td class=first_line>BANER</td>
                <td class=first_line>NAZWA</td>
                <td class=first_line>IKONKA</td>
                <td class=first_line>BAZOWE ZDROWIE</td>          
            </tr>";

        while ($licz<=$ile_rekord){
            $pokaz=mysqli_fetch_array($wynik);
            echo '<tr><td>'.'<img style="height:200px;" src="data:image/png;base64,'.base64_encode($pokaz['baner_enemy']).'">'.'</td>'.
            '<td>'.$pokaz['name_enemy'].'</td>'.
            '<td>'.'<img src="data:image/png;base64,'.base64_encode($pokaz['icon_enemy']).'">'.'</td>'.
            '<td>'.$pokaz['basehealth_enemy'].'</td></tr>';
            $licz++;
            }
        echo '</table>';
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
            echo $licz."  -  ".$pokaz['name_floor'].'<br>';
            $licz++;
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
            if($licz==5){
                $licz++;
            }
            else{
                $licz=$licz+0.5;
            }
            
            echo $licz."  -  ".$pokaz['name_floor'].'<br>';
            $licz=$licz+0.5;
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
                echo '<img style="height:30px;" src="data:image/png;base64,'.base64_encode($pokaz['icon_pickup']).'">'.'('.$pokaz['name_pickup'].') jest wart 1 Łuskę.'.'<br>';
                $licz++;
            }
            elseif($pokaz['name_pickup']=='Srebrna łuska'){
                echo '<img style="height:30px;" src="data:image/png;base64,'.base64_encode($pokaz['icon_pickup']).'">'.'('.$pokaz['name_pickup'].') jest wart 5 Łusek.'.'<br>';
                $licz++;
            }
            elseif($pokaz['name_pickup']=='Złota łuska'){
                echo '<img style="height:30px;" src="data:image/png;base64,'.base64_encode($pokaz['icon_pickup']).'">'.'('.$pokaz['name_pickup'].') jest wart 50 Łusek.'.'<br>';
                $licz++;
            }
        }
        
    }
?>

<?php
function test(){
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
      }
}
?>