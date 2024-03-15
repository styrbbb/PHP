<!doctype html>
<html lang="et">
    <head>
        <title>Harjutus 10</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    </head>
    <body>
        <div class="container">
        <menu>
            <a href="index.php">Avaleht</a> |
            <a href="index.php?leht=portfoolio">Portfoolio</a> |
            <a href="index.php?leht=kontakt">Kontakt</a> |
            <a href="index.php?leht=epood">E-pood</a> |

        </menu>
        <?php
            if(!empty($_GET['leht'])){
                $leht = htmlspecialchars($_GET['leht']);
                if(is_file($leht.'.php')){
                    include($leht.'.php');
                } else {
                    echo 'Valitud lehte ei eksisteeri!';
                }
            } else {
        ?>
        <h1>Avaleht</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus magnam cupiditate, quidem molestias labore veniam voluptatibus, ea corporis quibusdam quam quia perspiciatis neque delectus? Recusandae alias libero inventore minus porro.</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus magnam cupiditate, quidem molestias labore veniam voluptatibus, ea corporis quibusdam quam quia perspiciatis neque delectus? Recusandae alias libero inventore minus porro.</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus magnam cupiditate, quidem molestias labore veniam voluptatibus, ea corporis quibusdam quam quia perspiciatis neque delectus? Recusandae alias libero inventore minus porro.</p>
        <?php 
            } 
         ?>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>