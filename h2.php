<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Harjuts 02</h1>

        <?php
        /*
            Harjutus 01
            Thorian Perk
            01.02.2024
        */

        //matem
        $arv1 = 10;
        $arv2 = 20;
        $liit = $arv1 + $arv2;
        $lahut = $arv1 - $arv2;
        $korrut = $arv1 * $arv2;
        $jaga = $arv1 / $arv2;
        $jaak = $arv1 % $arv2;

        echo "$arv1 + $arv2 = $liit<br>";
        echo "$arv1 - $arv2 = $lahut<br>";
        echo "$arv1 * $arv2 = $korrut<br>";
        echo "$arv1 / $arv2 = $jaga<br>";
        echo "$arv1 % $arv2 = $jaga<br>";

        //mm, cm ja m teisendamine
        $mm = 162;   
        $cm = $mm / 10;
        $m = $mm / 1000;
        printf("%.2f mm on %.2f cm või %.2f m<br><br>", $mm, $cm, $m);

        //täisnurkne kolmnurk
        $a = 3;
        $b = 6;
        $c = 9;

        $p = $a + $b + $c;
        $s = ($a * $b) / 2;

        printf("Kolmnurga ümbermõõt on $s ja pindala on $p<br><br>")


        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>