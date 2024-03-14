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

        $nimi = 'mARiO';
	
        echo ucwords(strtolower('Tere, '. $nimi));
        ?>

        <h1 class="mb-4"></h1>
        <h2>hj .2</h2>
        <?php   
        function tykeldamine($tekst) {
            // Jagab teksti tähtede järgi
            $bbb = str_split($tekst);
            $acronyym = '';
        
            // Loob akronüümi iga tähe järgi
            foreach ($bbb as $bb) {
                $acronyym .= strtoupper($bb) . '.';
            }
        
            // Eemaldab viimase punkti
            $acronyym = rtrim($acronyym, '.');
        
            return $acronyym;
        }
        
        //Väljastamine
        $tekst = "stalker";
        echo tykeldamine($tekst);
        ?>

        <h1 class="mb-4"></h1>
        <h2>hj .3</h2>
        <?php 
        $tekst1 = 'Sa oled täielik noob';
        $tekst2 = 'Sa kuradi ära';
        $otsi = array('noob', 'kuradi');
        $asenda = array('***', '*****');
        echo str_replace($otsi, $asenda, $tekst1."</br>");
        echo str_replace($otsi, $asenda, $tekst2);
        ?>

        <h1 class="mb-4"></h1>
        <h2>hj .4</h2>
        <?php 
        function loo_email($enimi, $pnimi) {
            // Eemaldame tühikud ja teisendame täpitähed vastavalt nõuetele
            $enimi = str_replace(['ä', 'ö', 'ü', 'õ'], ['a', 'o', 'y', 'o'], mb_strtolower(str_replace(' ', '', $enimi)));
            $pnimi = str_replace(['ä', 'ö', 'ü', 'õ'], ['a', 'o', 'y', 'o'], mb_strtolower(str_replace(' ', '', $pnimi)));
        
            // Koostame emaili aadressi
            $email = $enimi.'.' .$pnimi.'@hkhk.edu.ee';
            
            return $email;
        }
        
        // Näide kasutamisest:
        $enimi = 'Ülle';
        $pnimi = 'Doos';
        
        $email = loo_email($enimi, $pnimi);
        echo "Kasutaja email: " . $email;
        ?>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>