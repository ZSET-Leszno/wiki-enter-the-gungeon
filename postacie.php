<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="img/icon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="smartphone.css" media="screen and (maxwidth:1024px)">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
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
            <a class="link_" href="index.html">START</a>

            <a class="link_" href="postacie.php">POSTACIE</a>
            <a class="link_" href="bronie.php">BRONIE</a>
            <a class="link_" href="enemy.php">PRZECIWNICY</a>
            <a class="link_" href="floors.php">PIĘTRA</a>
            <a class="link_" href="itemy.php">ITEMY</a>
            <a class="link_" href="pickupy.php">PICKUPY</a>

            <a class="link_" href="log.php">LOG IN</a>
        </nav>
    </header>
    <main>

    <!--<div class="col-sm-3 text-center">
            <button type="button" class="btn m-1 btn-dark w-50" data-bs-toggle="modal" data-bs-target="#film1">
                <img class="img-fluid" src="img/icon.jpg" alt="obrazek">
                <br>
                <h4>NAZWA</h4>
            </button>
            <div class="modal fade mt-5" id="film1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        lorem ipsum
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <img src="img/icon.jpg" alt="obrazek">
                  <div class="modal-body">
                    <h3>Opis</h3>
                    <div class="text-start">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit alias libero inventore nam voluptates voluptas voluptate sapiente pariatur culpa iusto. Quisquam sunt possimus consequuntur, veniam deserunt dolorem odit nostrum nam!
                    </div>
                    <h5>lorem</h5>
                    <div class="mb-2">ipsum</div>

                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">ipsum</button>
                    </div>
                    <small class="text-muted">lorem ipsum</small>
                  </div>
                </div>
              </div>
            </div>
        </div>-->
    
        <?php
            include "zapytania.php";
            tabela_postacie_2();
            ?>
    </main>
    <footer>
        <a>Strona by Brajan Hylla & Joanna Muzyka</a>
    </footer>
</body>
</html>