<?php
  include 'naglowek.php';
?>
    <main>
        <?php
        echo "
            <div class='col-sm-3 text-center'>
                <button type='button' class='btn m-1 btn-dark w-75' data-bs-toggle='modal' data-bs-target='#".$licz."'>
                    <img src='img/icon.jpg'>
                    <h4>".$pokaz['name_bron']."</h4>
                </button>


                <div class='modal fade mt-5 text-dark-emphasis' data-bs-theme='dark' id='".$licz."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <div id='naglowek_okienko'>
                                <div id='obrazek_okienko'>
                                    ".'<img src="data:image/png;base64,'.base64_encode($pokaz['icon_bron']).'">'."
                                </div>
                                <div id='nazwa_okienko'>
                                    <div id='exit_button;'>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
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
                                <span style='font-size: 70%;'>
                                    ".$pokaz['opis']."
                                </span>
                                
                                <div class='statsy'>
                                    <table>
                                        <tr class='statsy_bron'><td>JAKOŚĆ</td><td>".'<img style="width: 10%;" src="data:image/png;base64,'.base64_encode($pokaz['image_quality']).'">'."></td></tr>
                                        <tr class='statsy_bron'><td>TYP BRONI</td><td>".$pokaz['type_bron']."</td></tr>
                                        <tr class='statsy_bron'><td>ROZMIAR MAGAZYNKU</td><td>".$pokaz['magazine_size']."</td></tr>
                                        <tr class='statsy_bron'><td>MAKSYMALNA ILOŚĆ AMUNICJI</td><td>".$pokaz['max_ammo']."</td></tr>
                                        <tr class='statsy_bron'><td>OBRAŻENIA</td><td>".$pokaz['damage']."</td></tr>
                                        <tr class='statsy_bron'><td>SZYBKOSTRZELNOŚĆ</td><td>".$pokaz['fire_rate']."</td></tr>
                                        <tr class='statsy_bron'><td>ZASIĘG</td><td>".$pokaz['range_bron']."</td></tr>
                                        <tr class='statsy_bron'><td>RODZAJ OBRAŻEŃ</td><td>".$pokaz['damage_type']."</td></tr>
                                        <tr class='statsy_bron'><td>CENA SPRZEDAŻY DZIWAKOWI</td><td>".$pokaz['creep_sell_price']."</td></tr></table><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <br>";
        ?>


    </main>



    <footer>
        <a>Strona by Brajan Hylla & Joanna Muzyka</a>
    </footer>
</body>
</html>