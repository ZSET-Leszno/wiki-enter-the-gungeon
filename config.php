<?php
function tabela_bron(){
    $conn=mysqli_connect('localhost', 'root', '', 'etgwiki');
    $zapytanie='SELECT * FROM bronie JOIN qualities ON bronie.quality=qualities.id_quality;';
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
    function tabela_postacie(){
        $conn=mysqli_connect('localhost', 'root', '', 'etgwiki');
        $zapytanie='SELECT * FROM postacie JOIN bronie ON bronie.id_bron=postacie.start_weapon;';
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
            //echo '<tr><td>'.'<img src="data:image/png;base64,'.base64_encode($pokaz['portret_gungeoneer']).'">'.'<br>'.$pokaz['name_gungeoneer'].'</td><td>'.'<img src="data:image/png;base64,'.base64_encode($pokaz['icon_item']).'">'.'</td><td>'.'<img src="data:image/png;base64,'.base64_encode($pokaz['image_quality']).'">'.'</td><td>'.$pokaz[5].'</td><td>'.$pokaz[6].'</td><td>'.$pokaz[7].'</td></tr>';

            echo $pokaz['name_gungeoneer'].'<br>'.'<img src="data:image/png;base64,'.base64_encode($pokaz['icon_bron']).'">'.'<br>';
            $licz++;
        }
        echo '</table>';
    }
?>

<?php
    function tabela_itemy(){
        $conn=mysqli_connect('localhost', 'root', '', 'etgwiki');
        $zapytanie='SELECT * FROM itemy JOIN qualities ON itemy.quality=qualities.id_quality;';
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
function test(){
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
      }
}
?>