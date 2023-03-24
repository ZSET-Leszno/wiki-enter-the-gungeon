<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="img/icon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="smartphone.css" media="screen and (maxwidth:1024px)">
    <link rel="stylesheet" href="style.css">
    <title>Pocket Ammunicon</title>
</head>
<body>
    <header>
        <div id="logo">
            <img id="logo_img" src="img/logo.png" alt="logo">
        </div>
        <div id="title">
            <a >Enter the gungeon WIKI "Pocket Ammunicon" by Brajan Hylla & Joanna Muzyka</a>
        </div>
        <nav>
            <a id="link_" href="index.html">START</a>
            <a id="link_" href="logowanie.php">LOG IN</a>
        </nav>
    </header>
    <main>
        <?php
            $conn=mysqli_connect('localhost', 'root', '', 'etgwiki');
            $zapytanie='SELECT * FROM bronie JOIN qualities ON bronie.quality=qualities.id_quality;';
            $wynik=mysqli_query($conn,$zapytanie);
            $ile_rekord=mysqli_num_rows($wynik);
            $licz=1;
        ?>
        <table>
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
            </tr>
            <?php
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
            ?>
    </main>
    <footer>
        <a>Strona by Brajan Hylla & Joanna Muzyka</a>
    </footer>
</body>
</html>