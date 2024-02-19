<!doctype html>
<html lang="et">
    <head>
        <title>Harjutus 07</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    </head>
    <body>
        <div class="container">
        <h2>Tervitus</h2>
        <?php   
        /*  Harjutus 06
            Thorian Perk
            19.02.2024
        */
        function tervitab(){
            return "Tere päikesekesekene"; 
            }
            
            echo tervitab();
        ?>
        <h1 class="mb-4"></h1>
        <h2>Uudiskiri</h2>
        <?php 
        function uudiskiri() {
            echo '<form class="row g-3 p-4">';
            echo '  <div class="col-auto">';
            echo '      <label for="email" class="visually-hidden">Email</label>';
            echo '      <input type="email" class="form-control" id="email" placeholder="Email">';
            echo '  </div>';
            echo '  <div class="col-auto">';
            echo '      <button type="submit" class="btn btn-primary mb-3">Liitu uudiskirjaga</button>';
            echo '  </div>';
            echo '</form>';
        }
        echo uudiskiri();
        ?>
        <h1 class="mb-4"></h1>
        <h2>Kasutajanimi ja email</h2>
        <?php
        function kasutajanimi() {
            if (!empty($_GET['nimi'])) {
                $nimi = $_GET['nimi'];
            }

            //Väikesed tähed
            $vaike_nimi = strtolower($nimi);

            //Genereri email
            $email = $vaike_nimi . "@hkhk.edu.ee";

            //Genereeri 7 kohaline kood kood
            $kood = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789"), 0, 7);

            echo '<form action="#" method="get">';
            echo '  <label for="nimi">Sisesta kasutajanimi</label><br>';
            echo '  <input type="floatingInput" name="nimi" id="nimi"><br>';
            echo '  <label for="email">Email</label><br>';
            echo '  <input type="text" class="form-control" id="email" value="' . $email . '" readonly>';
            echo '  <label for="kood">Genereeritud kood</label><br>';
            echo '  <input type="text" class="form-control" id="kood" value="' . $kood . '" readonly><br>';
            echo '  <button type="submit" class="btn btn-primary my-2">Submit</button>';
            echo '</form>';
        }
        echo kasutajanimi();    
        ?>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>
