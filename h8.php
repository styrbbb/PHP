<!doctype html>
<html lang="et">

<head>
    <title>Harjutus 08</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        function kasutaja_vanus($sunniaasta)
        {
            $praegune_aasta = date("Y");

            $vanus = $praegune_aasta - $sunniaasta;

            return $vanus;
        }

        $sunniaasta = 2006; //Muutke seda vastavalt kasutaja sünniaastale
        
        $vanus = kasutaja_vanus($sunniaasta);

        //Väljastab tulemuse
        echo "Kasutaja vanus on: " . $vanus . " aastat";
        ?>
        <h1 class="mb-4"></h1>
        <h2>Kooliaasta lõpp</h2>
        <?php
        //Määrab tänase kuupäeva
        $today = date("Y-m-d");

        $yearStart = date("Y") . "-09-01";

        //Määra kooliaasta lõppkuupäev (juuni järgmise aasta)
        if (date("m") > 8) { //Kui oleme juba septembrist edasi, siis lõpp on järgmise aasta juunis
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
        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Vali aastaaeg
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="?aa=suvi">Suvi</a></li>
                <li><a class="dropdown-item" href="?aa=sugis">Sügis</a></li>
                <li><a class="dropdown-item" href="?aa=talv">Talv</a></li>
                <li><a class="dropdown-item" href="?aa=kevad">Kevad</a></li>
            </ul>
        </div>

        <?php
        // PHP logic to display the selected image
        if (isset($_GET['aa'])) {
            $aa = $_GET['aa'];
            switch ($aa) {
                case 'talv':
                    $image = 'talv.jpg';
                    break;
                case 'kevad':
                    $image = 'kevad.jpg';
                    break;
                case 'suvi':
                    $image = 'suvi.jpg';
                    break;
                case 'sugis':
                    $image = 'sugis.jpg';
                    break;
                default:
                    $image = 'default.jpg'; // Default image if season not recognized
                    break;
            }
            echo '<img src="' . $image . '" alt="' . ucfirst($aa) . '" class="img-fluid">';
        }

        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>