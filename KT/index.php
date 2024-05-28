<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP KT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-dark bg-body-tertiary" data-bs-theme="dark">
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
                <a class="nav-link" href="tooted.html">Pood</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="teenused.html">Kontakt</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="kontakt.html">Admin</a>
              </li>
            </ul>
          </div>
        </nav>
        <div class="container">
          <div class="row p-5 mb-4">
            <div class="col-sm-3 text-center">
              <h2 class="text-center">Lorem Ipsum</h2>
              <?php include'KT_rand1'?>
              <?php echo random1("KT_rand_img"); ?>
              <!--<p class="text-center"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quisquam nihil voluptatibus voluptates expedita nulla maxime odit molestias quaerat molestiae ut ipsum et qui quam excepturi necessitatibus maiores, ducimus ullam.</p> -->
            </div>
            <div class="col-sm-3 text-center">
              <h2 class="text-center">Lorem Ipsum</h2>
              <?php include'KT_rand2'?>
              <?php echo random2("KT_rand_img"); ?>
              <!--<p class="text-center"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quisquam nihil voluptatibus voluptates expedita nulla maxime odit molestias quaerat molestiae ut ipsum et qui quam excepturi necessitatibus maiores, ducimus ullam.</p> -->
            </div>
          </div>
        </div>



    </div>
      
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>