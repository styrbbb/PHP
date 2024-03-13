<!doctype html>
<html lang="et">
    <head>
        <title>Harjutus 08</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    </head>
    <body>
        <div class="container">
        <h2>Kuupäev ja kellaaeg</h2>
        <?php   
        /*  Harjutus 08
            Thorian Perk
            10.03.2024
        */
        $sd = strtotime("20.03.2023 17:31");

        $date = date("d.m.Y H:i", $sd);

        //Väljastab tulemuse
        echo $date;

        ?>
        <h1 class="mb-4"></h1>
        <h2>Kasutaja vanus</h2>
        <?php 
        function kasutaja_vanus($sunniaasta) {
            $praegune_aasta = date("Y");
            
            $vanus = $praegune_aasta - $sunniaasta;

            return $vanus;
        }

        $sunniaasta = 2006; // Muutke seda vastavalt kasutaja sünniaastale

        $vanus = kasutaja_vanus($sunniaasta);

        //Väljastab tulemuse
        echo "Kasutaja vanus on: ".$vanus." aastat";
        ?>
        <h1 class="mb-4"></h1>
        <h2>Kooliasta lõpp</h2>
        <?php 
        
        ?>

        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>