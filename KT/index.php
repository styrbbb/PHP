<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP KT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
            .thumbnail {
          position: relative;
      }

      .caption {
          position: absolute;
          top: 20%;
          left: 5%;
          width: 100%;
      }
    </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container">
      <a class="navbar-brand" href="#">thorian.com</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="minuMenyy">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Avaleht</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?leht=pood">Pood</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?leht=kontakt">Kontakt</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?leht=login">Admin</a>
              </li>
            </ul>
          </div>
        </nav>
        <div class="container">
          <div class="row justify-content-center p-5 mb-4">
              <div class="thumbnail col-md-6">
                <?php include 'KT_rand1'; ?>
                <img class="img-fluid" src="random1" alt="">
                <div class="caption">
                    <p class="text-light fw-bold">parim pakkumine</p>
                    <p class="text-light fw-bold fs-2">osta 1 saad 1</p>
                    <p class="text-light fw-bold">The best classic dress is on sale at Coro</p>
                </div>
                <?php echo random1("KT_rand_img"); ?>
            </div>
              <div class="col-md-6">
                <?php include 'KT_rand2'; ?>
                <img class="img-fluid" src="random2" alt="">
                <?php echo random2("KT_rand_img"); ?>
              </div>
          </div>
      </div>

      <?php
          if(!empty($_GET['leht'])){
              $leht = htmlspecialchars($_GET['leht']);
              if(is_file($leht.'.php')){
                  include($leht.'.php');
              } else {
                  echo 'Valitud lehte ei eksisteeri!';
              }
          } else {
            
          }
        ?>
      
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>