<!doctype html>
<html lang="et">
    <head>
        <title>Harjutus 09</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    </head>
    <body>
        <div class="container">
        <h1>Tekstifunktsioonid</h1>
        <h1 class="mb-4"></h1>
        <h2>hj .1</h2>
        <?php   
        /*  Harjutus 09
            Thorian Perk
            13.03.2024
        */

        $nimi = "";
        if (!empty($_GET['nimi'])) {
            $nimi = $_GET['nimi'];
        }

        $valjund = $nimi;

        echo '<form class="row g-3 p-4">';
        echo '  <div class="col-auto">';
        echo '      <label for="nimi">Sisesta nimi</label><br>';
        echo '      <input type="floatingInput" class="form-control" name="nimi" id="nimi"><br>';
        echo '      <label for="valjund">Väljund</label><br>';
        echo ucwords(strtolower('<input type="text" class="form-control" id="valjund" value="Tere, '.$valjund.'" readonly><br>'));
        echo '      <button type="submit" class="btn btn-primary my-2">Submit</button>';
        echo '  </div>';
        echo '</form>';
        ?>

        <h1 class="mb-4"></h1>
        <h2>hj .2</h2>
        <?php   
        /*
        function convertToAcronym($nimi1) {
            $std = explode(' ', strtoupper($nimi1));
            $acronyym = '';

            // Käib läbi iga sõna ja võtab esimese tähe
            foreach ($std as $st) {
                $acronyym .= substr($st, 0, 1) . '.';
            }

            return $acronyym;
        }
        $nimi1 = "";
        if (!empty($_GET['nimi1'])) {
            $nimi1 = $_GET['nimi1'];
        }

        $valjund1 = $nimi1;

        echo '<form class="row g-3 p-4">';
        echo '  <div class="col-auto">';
        echo '      <label for="nimi">Sisesta nimi</label><br>';
        echo '      <input type="floatingInput" class="form-control" name="nimi1" id="nimi1"><br>';
        echo '      <label for="valjund">Väljund</label><br>';
        echo convertToAcronym('<input type="text" class="form-control" id="valjund1" value="'.$valjund1.'"readonly><br>');
        echo '      <button type="submit" class="btn btn-primary my-2">Submit</button>';
        echo '  </div>';
        echo '</form>';
        */
        function convertToAcronym($text) {
            // Jagab teksti tähtede järgi
            $letters = str_split($text);
            $acronym = '';
        
            // Loob akronüümi iga tähe järgi
            foreach ($letters as $letter) {
                $acronym .= strtoupper($letter) . '.';
            }
        
            // Eemaldab viimase punkti
            $acronym = rtrim($acronym, '.');
        
            return $acronym;
        }
        
        // Testimiseks
        $text = "stalker";
        echo convertToAcronym($text); // väljund: S.T.A.L.K.E.R
        ?>


        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>