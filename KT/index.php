<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP KT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                <a class="nav-link active" aria-current="page" href="#">Avaleht</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pood.html">Pood</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="kontakt.html">Kontakt</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin.html">Admin</a>
              </li>
            </ul>
          </div>
        </nav>
        <div class="container">
          <div class="row justify-content-evenly p-5 mb-4">
              <div class="col-md-6">
                <?php include 'KT_rand1'; ?>
                <img class="img-fluid" src="random1" alt="">
                <?php echo random1("KT_rand_img"); ?>
            </div>
            <div class="col-md-6">
                <?php include 'KT_rand2'; ?>
                <img class="img-fluid" src="random2" alt="">
                <?php echo random2("KT_rand_img"); ?>
            </div>
          </div>
        </div>



    </div>
      
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>