<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 class="mb-5">Harjutus 03</h1>
        <h2>Trapetsi pindala arvutamine</h2>
        <form action="#" method="get">
          <label for="a">Külg a</label><br>
          <input type="number" name="a" id="a"><br>
          <label for="b">Külg b</label><br>
          <input type="number" name="b" id="b"><br>
          <label for="h">Kõrgus h</label><br>
          <input type="number" name="h" id="h"><br>
          <input type="submit" class="btn btn-success my-2" value="Arvuta"><br>
        </form>
        <?php
        /*  Harjutus 03
            Thorian Perk
            01.02.2024
        */

        //Trapetsi pindala arvutamine
        if(!empty($_GET['a'])){
            $a = $_GET['a'];
            $b = $_GET['b'];
            $h = $_GET['h'];
            $s = (($a+$b)/2)*$h;
            echo 'Trapetsi pindala on '.$s.'<br>';
        }
        ?>

        <h2>Rombi pindala arvutamine</h2>
        <form action="#" method="get">
          <label for="c">Rombi külg;</label><br>
          <input type="number" name="c" id="c"><br>
          <label for="h">Rombi külg;</label><br>
          <input type="number" name="h" id="h"><br>
          <input type="submit" class="btn btn-success my-2" value="Arvuta"><br>
        </form>

        <?php
        if(!empty($_GET['c'])){
            $c = $_GET['c'];
            $h = $_GET['h'];
            $s = (($c*$h));
            echo 'Rombi pindala on '.$s.'<br>';

        }
        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>