<!doctype html>
<html lang="et">
    <head>
        <title>Harjutus 06</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    </head>
    <body>
        <div class="container">
        <h2>Genereeri</h2>
        <?php   
        /*  Harjutus 06
            Thorian Perk
            14.02.2024
        */
        echo "<b>Arvud 1-100</b><br>";
        for($arv0=1;$arv0<=100;$arv0++){
            echo $arv0."\n"; 
        }
        echo "<br>";
        echo "<br>";
        echo "<b>Arvud reavahetuses</b><br>";
        for ($arv1 = 0; $arv1 <= 100; $arv1+=10) {
            echo $arv1. '<br>';
        }
        echo "<br>";
        echo "<b>Punktid arvu järel</b><br>";
        for ($arv2 = 1; $arv2 <= 100; $arv2++) {
            echo $arv2. ". \n";
        } 
        ?>
        <h1 class="mb-3"></h1>
        <h2>Read</h2>
        <?php
        echo "<b>Horisontaalne</b><br>";
        for($rida=1; $rida<=1; $rida++){ 
            for($veerg=1; $veerg<=10; $veerg++){ 
                    echo "* \n";	
                }
            echo '<br>';
        }
        echo "<br>";
        echo "<b>Vertikaalne</b><br>";
        for($rida=1; $rida<=10; $rida++){ 
            echo '*<br>';
        }
        ?>
        <h1 class="mb-3"></h1>
        <h2>Ruut</h2>
        <form action="#" method="get">
            <label for="kylg">Sisesta külg</label><br>
            <input type="number" name="kylg" id="kylg"><br>
            <input type="submit" class="btn btn-success my-2" value="Arvuta"><br>
        </form>
        <?php
        if(isset($_GET['kylg'])) {
            $kylg = $_GET['kylg'];

            if(is_numeric($kylg) && $kylg > 0 && $kylg == round($kylg)) {
                for($i = 0; $i < $kylg; $i++) {
                    for($j = 0; $j < $kylg; $j++) {
                        echo '* &nbsp;&nbsp;&nbsp;';
                    }
                    echo "<br>";
                }
            } else {
                echo "Sisestus puudub.";
            }
        }
        ?>
        <h1 class="mb-3"></h1>
        <h2>Kahanev</h2>
        <?php 
        echo "<br>";
        $knm = 10;
        while($knm>0) {
          echo $knm.'<br>';
          $knm--;
        }
        ?>
        <h1 class="mb-3"></h1>
        <h2>Kolmega jagunevad</h2>       
        <?php 
        
        
        ?>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>
