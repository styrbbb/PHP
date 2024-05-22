<!doctype html>
<html lang="et">

<head>
    <title>PHP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
    <h1 class="text-primary fs-1 fw-bold mx-auto p-2"> PHP ülesannete kataloog</h1>
    <h4 class="text-danger mx-auto p-2"> BAKA MITAI! </h4>
    <a class="mx-auto p-2" href="?page=h1">PHP harjutus 1</a><br>
    <a class="mx-auto p-2" href="?page=h2">PHP harjutus 2</a><br>
    <a class="mx-auto p-2" href="?page=h3">PHP harjutus 3</a><br>
    <a class="mx-auto p-2" href="?page=h4">PHP harjutus 4</a><br>
    <a class="mx-auto p-2" href="?page=h5">PHP harjutus 5</a><br>
    <a class="mx-auto p-2" href="?page=h6">PHP harjutus 6</a><br>
    <a class="mx-auto p-2" href="?page=h7">PHP harjutus 7</a><br>
    <a class="mx-auto p-2" href="?page=h8">PHP harjutus 8</a><br>
    <a class="mx-auto p-2" href="?page=h9">PHP harjutus 9</a><br>
    <a class="mx-auto p-2" href="?page=h10">PHP harjutus 10</a><br>
    <a class="mx-auto p-2" href="?page=h11">PHP harjutus 11 (tühi) </a><br>
    <a class="mx-auto p-2" href="?page=h12">PHP harjutus 12</a><br>
    <a class="mx-auto p-2" href="?page=h13">PHP harjutus 13</a><br>
    <a class="mx-auto p-2" href="?page=h14">PHP harjutus 14</a><br>

    <?php
        // Kontrolli, kas linkidele vajutati
        if(isset($_GET['page'])) {
            // Määra sihtfaili asukoht vastavalt linkile
            switch($_GET['page']) {
                case 'h1':
                    $target_file = 'h1.php';
                    break;
                case 'h2':
                    $target_file = 'h2.php';
                    break;
                case 'h3':
                    $target_file = 'h3.php';
                    break;
                case 'h4':
                    $target_file = 'h4.php';
                    break;
                case 'h5':
                    $target_file = 'h5.php';
                    break;
                case 'h6':
                    $target_file = 'h6.php';
                    break;
                case 'h7':
                    $target_file = 'h7.php';
                    break;
                case 'h8':
                    $target_file = 'h8.php';
                    break;
                case 'h9':
                    $target_file = 'h9.php';
                    break;
                case 'h10':
                    $target_file = 'h10/index.php';
                    break;
                case 'h11':
                    $target_file = 'h11.php';
                    break;
                case 'h12':
                    $target_file = 'h12.php';
                    break;
                case 'h13':
                    $target_file = 'h13.php';
                    break;
                case 'h14':
                    $target_file = 'h14.php';
                    break;
                // Lisage rohkem juhtumeid vastavalt oma failide arvule
                default:
                    $target_file = 'index.php'; // Vaikimisi suunatakse tagasi avalehele
                    break;
            }
            
            // Suuna kasutaja sihtfaili
            header("Location: $target_file");
            exit();
        }
    ?>





    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>
</html>
