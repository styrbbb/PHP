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
        <h1>Töö kataloogidega</h1>
        <h1 class="mb-4"></h1>
        <h2></h2>
        <?php
        /*  Harjutus 13
            Thorian Perk
            30.04.2024
        */

        $kataloog = 'pildid';
        $asukoht = opendir($kataloog);

        if (!empty($_FILES['minu_fail']['name'])) {
            $sinu_faili_nimi = $_FILES['minu_fail']['name'];
            $ajutine_fail = $_FILES['minu_fail']['tmp_name'];

            $faili_suurus = $_FILES['minu_fail']['size'];	//faili suurus
            $max_suurus = 1048576;							//seame lubatud failisuuruse piiri
        
            if ($faili_suurus <= $max_suurus) {
                $kataloog = 'failid';
                if (move_uploaded_file($ajutine_fail, $kataloog . '/' . $sinu_faili_nimi)) {
                    echo 'Faili üleslaadimine oli edukas';
                } else {
                    echo 'Faili üleslaadimine ebaõnnestus';
                }
            } else {
                echo 'Liiga suur fail (üle 2MB)!';
            }
        }

        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="minu_fail"><br>
            <input type="submit" value="Lae üles!">
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>