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
            $zapytanie='SELECT * FROM itemy JOIN qualities ON itemy.quality=qualities.id_quality;';
            $wynik=mysqli_query($conn,$zapytanie);
            $ile_rekord=mysqli_num_rows($wynik);
            $licz=1;
        ?>
        <table>
            <tr style='border: 1px solid white; background-color: black; color: white; float: center; font-size: 50%;'>
                <td class=first_line>NAZWA PRZEDMIOTU</td>
                <td class=first_line>WPIS W AMMUNOMICONIE</td>
                <td class=first_line>WYGLĄD PRZEDMIOTU</td>
                <td class=first_line>JAKOŚĆ</td>
                <td class=first_line>TYP PRZEDMIOTU</td>
                <td class=first_line>OPIS</td>
                <td class=first_line>CENA SPRZEDAŻY DZIWAKOWI</td>            
            </tr>
            <?php
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
            ?>
    </main>
    <footer>
        <a>Strona by Brajan Hylla & Joanna Muzyka</a>
    </footer>
</body>
</html>