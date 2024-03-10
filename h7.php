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
        /*  Harjutus 07
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
            $nimi = "";
            if (!empty($_GET['nimi'])) {
                $nimi = $_GET['nimi'];
            }

            //Väikesed tähed
            $vaike_nimi = strtolower($nimi);

            //Genereeri email
            $email = $vaike_nimi . "@hkhk.edu.ee";

            //Genereeri 7 kohalise koodi
            $kood = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789"), 0, 7);

            echo '<form class="row g-3 p-4">';
            echo '  <div class="col-auto">';
            echo '      <label for="nimi">Sisesta kasutajanimi</label><br>';
            echo '      <input type="floatingInput" class="form-control" name="nimi" id="nimi"><br>';
            echo '      <label for="email">Väikeste tähtetega</label><br>';
            echo '      <input type="text" class="form-control" id="email" value="'.$vaike_nimi.'" readonly><br>';
            echo '      <label for="email">Email</label><br>';
            echo '      <input type="text" class="form-control" id="email" value="'.$email.'" readonly><br>';
            echo '      <label for="kood">Genereeritud kood</label><br>';
            echo '      <input type="text" class="form-control" id="kood" value="'.$kood.'" readonly><br>';
            echo '      <button type="submit" class="btn btn-primary my-2">Submit</button>';
            echo '  </div>';
            echo '</form>';
        }
        echo kasutajanimi();    
        ?>
        <h1 class="mb-4"></h1>
        <h2>Arvud</h2>
        <?php 
        function nrrange($start, $end) {
            //Kontrollime, et algne arv ei ole suurem kui lõpparv.
            if ($start > $end) {
                return array();
            }
        
            return range($start, $end);
        }
        
        //Sisesta numberi vahemik, näiteks 2 ja 8.
        $numbers = nrrange(2, 8);
        
        //Väljastab tulemused.
        echo "Arvude vahemik: ";
        print_r($numbers);

        function nrrange_sum($start, $end, $step) {
            //Kontrollime, et algne arv ei ole suurem kui lõpparv ja samm ei ole null.
            if ($start > $end || $step === 0) {
                return array();
            }

            return range($start, $end, $step);
        }

        //Sisesta numberi vahemiku, näiteks 2 kuni 8, lisaks sammuga 3.
        $numbers2 = nrrange_sum(2, 8, 3);

        //Väljastab tulemused.
        echo "</br>Arvude vahemik sammuga: ";
        print_r($numbers2)
        ?>
        <h1 class="mb-4"></h1>
        <h2>Ristküliku pindala</h2>
        <?php 
        function ristkylik($pikkus, $laius) {
            //Kontrollime, et mõlemad sisendparameetrid on positiivsed.
            if ($pikkus <= 0 || $laius <= 0) {
                return 0;
            }

            return $pikkus * $laius;
        }
        
        //Kasutaja sisestab ristküliku pikkuse ja laiuse, et leida pindala.
        $pikkus = 15;
        $laius = 8;
        $sum = ristkylik($pikkus, $laius);
        
        //Väljastab tulemused.
        echo "Ristküliku pindala on $sum ruudus.";
        ?>
        <h1 class="mb-4"></h1>
        <h2>Isikukood</h2>
        <?php 
        function ee_isikukood($code) {
            //Kontrollime, et isikukood on täpselt 11 tähemärki pikk.
            if (strlen($code) !== 11) {
                return false;
            }
    
            return true;
        }
        
        //Kasutaja sisestab isikukoodi.
        $isikukood = "50606225045";
        if (ee_isikukood($isikukood)) {
            echo "Isikukood on õige pikkusega. <br>";
        } else {
            echo "Isikukood ei ole õige pikkusega. <br>";
        }
        function bb_isikukood($code2) {
            //Kontrollime, et isikukood on täpselt 11 tähemärki pikk.
            if (strlen($code2) !== 11) {
                return array("error" => "Isikukood ei ole õige pikkusega.");
            }
        
            //Võtab sugu isikukoodist.
            $gender_digit = intval($code2[0]);
            $gender = ($gender_digit % 2 === 0) ? "Naine" : "Mees ";
        
            //Võtab sünniaja isikukoodist.
            $birth_date = substr($code2, 5, 2) . "/" . substr($code2, 3, 2) . "/" . substr($code2, 1, 2);
        
            // Tagastame sugu ja sünnikuupäeva.
            return array("sugu" => $gender, "sünniaeg" => $birth_date);
        }
        
        //Kasutaja sisestab isikukoodi.
        $isikukood2 = "50606225045";
        $vastus = bb_isikukood($isikukood2);
        
        if (isset($vastus["error"])) {
            echo $vastus["error"];
        } else {
            echo "Sugu: " . $vastus["sugu"]."<br>";
            echo "Sünniaeg: " . $vastus["sünniaeg"];
        }
        ?>
        <h1 class="mb-4"></h1>
        <h2>Head mõtted</h2>
        <?php 
        function headmotted($alus, $öeldis, $sihitis) {
            $alus2 = $alus[array_rand($alus)];
            $oeldis2 = $öeldis[array_rand($öeldis)];
            $sihitis2 = $sihitis[array_rand($sihitis)];

            $lause = "$alus2 $oeldis2 $sihitis2.";

            return $lause;
        }

        //Massiiv kolmest alus, õeldis ja sihitis sõnadest.
        $alus = array("Kass", "Koer", "Lind");
        $öeldis = array("jookseb", "mängib", "laulab");
        $sihitis = array("aias", "metsas", "toas");

        $lause = headmotted($alus, $öeldis, $sihitis);

        echo $lause;
        ?>    

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>
