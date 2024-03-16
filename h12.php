<!doctype html>
<html lang="et">
    <head>
        <title>Harjutus 12</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    </head>
    <body>
        <div class="container">
        <h1>CSV</h1>
        <h1 class="mb-4"></h1>
        <h2>Auto sõiduaeg</h2>
        <?php   
        /*  Harjutus 12
            Thorian Perk
            16.03.2024
        */
        

        ?>
        <h1 class="mb-4"></h1>
        <h2>Töötajad</h2>
        <?php   
        $allikas = 'tootajad.csv';
        $minu_csv = fopen($allikas, 'r') or die('Ei leia faili!');
        $jrk = 1;
        while(!feof($minu_csv)){
            $rida = fgetcsv($minu_csv, filesize($allikas),';');
            
            // Check if $rida is an array before counting its elements
            if (is_array($rida)) {
                $arv = count($rida); //rea väljade arv
                echo $jrk.'. '; //järjekorra number
                $jrk++;
                for($i = 0; $i<$arv; $i++){
                    echo $rida[$i].' ';	
                }
                echo '<br>';
            }
        }
        fclose($minu_csv);
        ?>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>