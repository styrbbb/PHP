<!doctype html>
<html lang="et">
    <head>
        <title>Harjutus 04</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    </head>
    <body>
        <div class="container">
        <h1 class="mb-5">Harjutus 04</h1>
        <h2>Jagamine</h2>
            <form action="#" method="get">
                <label for="jagatav">Jagatav</label><br>
                <input type="number" name="jagatav" id="jagatav"><br>
                <label for="jagaja">Jagaja</label><br>
                <input type="number" name="jagaja" id="jagaja"><br>
                <input type="submit" class="btn btn-success my-2" value="Jaga"><br>
        </form>

        <?php   
        /*  Harjutus 04
            Thorian Perk
            01.02.2024
        */
        
            if (!empty($_GET['jagatav']) && !empty($_GET['jagaja'])) {
                $jagatav = $_GET['jagatav'];
                $jagaja = $_GET['jagaja'];
                $a = (($jagatav/$jagaja));
                echo 'Vastus on '.$a.'<br>';
            } else { 
                echo 'Hoiatus, te proovide jagada nulliga!';  

        }
        ?>
        <h1 class="mb-3"></h1>
        <h2>Vanuse võrdlus</h2>
        <form action="#" method="get">
                <label for="vanus1">Sisesta vanus 1</label><br>    
                <input type="number" name="vanus1" id="vanus1"><br>
                <label for="vanus2">Sisesta vanus 2</label><br>    
                <input type="number" name="vanus2" id="vanus2"><br>
                <input type="submit" class="btn btn-success my-2" value="Võrdle"><br>
        </form>
        <?php 
            if (!empty($_GET['vanus1']) && !empty($_GET ['vanus2'])) {
                $vanus1 = $_GET['vanus1'];
                $vanus2 = $_GET['vanus2'];

                if ($vanus1 > $vanus2) {
                    echo "Esimene vanus on suurem kui teine<br>";
                } else if ($vanus1 < $vanus2) {
                    echo "Teine vanus on suurem kui esimene<br>";
                } else {
                    echo "Vanused on võrdsed.<br>";
                }

            }
        ?>

        <h1 class="mb-3"></h1>
        <h2>Ristkülik ja ruut I</h2>
        <form action="#" method="get">
            <label for="kylg1">Sisesta külg 1</label><br>
            <input type="number" name="kylg1" id="kylg1"><br>
            <label for="kylg2">Sisesta külg 2</label><br>
            <input type="number" name="kylg2" id="kylg2"><br>
            <input type="submit" class="btn btn-success my-2" value="Arvuta"><br>
        </form>

        <?php 
        if (!empty($_GET['kylg1']) && !empty($_GET['kylg2'])) {
            $kylg1 = $_GET['kylg1'];
            $kylg2 = $_GET['kylg2'];

            if ($kylg1 == $kylg2) {
                echo "Ruut on võimalik";
            } else if($kylg1 != $kylg2) {
                echo "Ristkülik on võimalik";
            }

        }
        ?>

        <h1 class="mb-3"></h1>
        <h2>Ristkülik ja ruut II</h2>
        <form action="#" method="get">
            <label for="kylg1">Sisesta külg 1</label><br>
            <input type="number" name="kylg1" id="kylg1"><br>
            <label for="kylg2">Sisesta külg 2</label><br>
            <input type="number" name="kylg2" id="kylg2"><br>
            <input type="submit" class="btn btn-success my-2" value="Arvuta"><br>
        </form>

        <?php 
        if (!empty($_GET['kylg1']) && !empty($_GET['kylg2'])) {
            $kylg1 = $_GET['kylg1'];
            $kylg2 = $_GET['kylg2'];

            if ($kylg1==$kylg2) {
                echo 'Ruut';
                $pilt = "ruut.png";
            } else if ($kylg1 != $kylg2) {
                echo 'Ristkülik';
                $pilt = "ristkylik.png";
            }

        }

        echo "<img height='100' src='$pilt'>";
        echo "<br>";
        echo "<br>";
        echo "<br>";

        ?>

        <h1 class="mb-3"></h1>
        <h2>Juubel</h2>
        <form action="#" method="get">
            <label for="synniaasta">Sisesta sünniaasta</label><br>
            <input type="number" name="synniaasta" id="synniaasta"><br>
            <input type="submit" class="btn btn-success my-2" value="Arvuta"><br>
        </form>

        <?php 
        if (!empty($_GET["synniaasta"])) {
            $synniaasta = $_GET['synniaasta'];
            
            if ($synniaasta>30) {
                echo 'On juubel';
            } else {
                echo 'Ei ole juubel';
            }
        }
        
        ?>
        <h1 class="mb-3"></h1>
        <h2>Hinne (switch)</h2>
        <form action="#" method="get">
            <label for="punktid">Sisesta KT punktid</label><br>
            <input type="number" name="punktid" id="punktid"><br>
            <input type="submit" class="btn btn-success my-2" value="Arvuta"><br>
        </form>

        <?php 
        if (!empty($_GET["punktid"])) {
            $punktid = $_GET['punktid'];

            if($punktid >= 10){
                echo 'SUPER';
                } else if ($punktid >= 5) {
                echo 'TEHTUD';
                } else if ($punktid <= 5) {
                echo 'KASIN';  
            }     
        }

        ?>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>
