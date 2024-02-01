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
        <h1>Harjutus 04</h1>
        <h2>Tingimuslaused</h2>
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
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>
