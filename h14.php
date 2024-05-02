<!doctype html>
<html lang="et">

<head>
    <title>Harjutus 13</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <h1>Töö pildifailidega</h1>
        <h1 class="mb-4"></h1>
        <h2></h2>
        <?php
        /*  Harjutus 14
            Thorian Perk
            02.05.2024
        */

        ?>
        <form method="post" action="">
            <select name="pildid">
                <option value="">Vali pilt</option>
                <?php
                $kataloog = 'pildid';
                $asukoht = opendir($kataloog);
                while ($rida = readdir($asukoht)) {
                    if ($rida != '.' && $rida != '..') {
                        echo "<option value='$rida'>$rida</option>\n";
                    }
                }
                ?>
            </select>
            <input type="submit" value="Vaata">
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>