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

        $sunniaasta = 2006; //Muutke seda vastavalt kasutaja sünniaastale

        $vanus = kasutaja_vanus($sunniaasta);

        //Väljastab tulemuse
        echo "Kasutaja vanus on: ".$vanus." aastat";
        ?>
        <h1 class="mb-4"></h1>
        <h2>Kooliaasta lõpp</h2>
        <?php 
        //Määrab tänase kuupäeva
        $today = date("Y-m-d");

        $yearStart = date("Y") . "-09-01";

        //Määra kooliaasta lõppkuupäev (juuni järgmise aasta)
        if(date("m") > 8) { //Kui oleme juba septembrist edasi, siis lõpp on järgmise aasta juunis
            $yearEnd = (date("Y") + 1) . "-06-30";
        } else { //Kui oleme enne septembrit, siis lõpp on käesoleva aasta juunis
            $yearEnd = date("Y") . "-06-30";
        }

        //Arvuta päevade arvu
        $daysLeft = round((strtotime($yearEnd) - strtotime($today)) / (60 * 60 * 24));

        //Väljastab tulemuse
        echo "Kooliaasta lõpuni on jäänud $daysLeft päeva!";
        ?>
        <h1 class="mb-4"></h1>
        <h2>Aastaajad</h2>

        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>