<!doctype html>
<html lang="et">

<head>
    <title>Harjutus 14</title>
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
        <h2>Suvaline pilt</h2>
        <?php
        /*  Harjutus 14
            Thorian Perk
            22.05.2024
        */

            $kataloog = 'h14p';
            $asukoht = opendir($kataloog);

        function random($folder_path = null)
        {
            //Kontrollib kas kaust on tühi.
            if (!empty($folder_path)) {
                $files_array = scandir($folder_path);
                $count = count($files_array);

                //Kontrollib kas kasutas on faile.
                if ($count > 2) {
                    $minus = $count - 1;
                    $random = rand(2, $minus);
                    $random_file = $files_array[$random]; //Genereerib suvaline faili.
                    $file_link = $folder_path . "/" . $random_file;
                    return '<a href="' . $file_link . '" target="_blank" title="' . $random_file . '"><img src="' . $file_link . '" alt="' . $random_file . '"width="1280" height="800"></a>';
                } else {
                    return "The folder is empty!";
                }
            } else {
                return "Please enter folder path!";
            }

        }
        ?>
        <?php
        //Prindib pildid suvalises järjekorras.
        echo random("h14p");
        ?>
        <h1 class="mb-4"></h1>
        <h2>Pisipildid</h2>
        <?php 

        $kataloog = 'h14k';
        $asukoht=opendir($kataloog);
        
        function kuvaKolmesVeerus($folder_path = null)
        {
            //Kontrollib kas kaust on tühi.
            if (!empty($folder_path)) { 
                $files_array = scandir($folder_path);
                $count = count($files_array);
                //Kontrollib kas kasutas on faile.
                if ($count > 2) { 
                    echo '<div style="display: flex; flex-wrap: wrap; justify-content: space-between;">';
                    $column_count = 0;
                    foreach ($files_array as $file) {
                        if ($file != '.' && $file != '..') {
                            $file_link = $folder_path . "/" . $file;
                            //Määrab piltidele suuruse ja polsterduse ning pisipiltide suuruse muutmiseks muuda '" width="100%"></a></div>' väärtust koodi tükki lõpus.
                            echo '<div style="width: 33%; padding: 10px; box-sizing: border-box;"><a href="' . $file_link . '" target="_blank" title="' . $file . '"><img src="' . $file_link . '" alt="' . $file . '" width="100%"></a></div>'; 
                            $column_count++;
                            //Lisab uue rea iga kolme veeruga.
                            if ($column_count % 3 == 0) {
                                echo '<div style="flex-basis: 100%; height: 0;"></div>';
                            }
                        }
                    }
                    echo '</div>';
                } else {
                    return "The folder is empty!";
                }
            } else {
                return "Please enter folder path!";
            }
        }
        ?>

        <?php
        //Prindib pildid kolmes veerus
        echo kuvaKolmesVeerus("h14k");
        ?>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>