<!DOCTYPE html>
<html lang="et">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP KT</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand text-dark" href="index.php">thorian.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#minuMenyy"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="minuMenyy">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item px-2">
                        <a class="nav-link text-dark fw-bold" aria-current="page" href="index.php">Avaleht</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-dark fw-bold" href="index.php?leht=pood">Pood</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-dark fw-bold" href="index.php?leht=kontakt">Kontakt</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-dark fw-bold" href="index.php?leht=login">Admin</a>
                    </li>
                    <li>
                        <a class="nav-link px-2 text-dark" href="index.php?leht=ostukorv"><i
                                class="fa-solid fa-bag-shopping"></i></a>
                    </li>
                </ul>
            </div>
    </nav>
    <?php
    if (!empty($_GET['leht'])) {
        $leht = htmlspecialchars($_GET['leht']);
        if (is_file($leht . '.php')) {
            include ($leht . '.php');
        } else {
            echo 'Valitud lehte ei eksisteeri!';
        }
    } else {

    }
    ?>
    <div class="container justify-content-center">
        <div class="row p-5.5 mb-3 mt-5">
            <div class="thumbnail col-md-6">
                <?php include 'random.php'; ?>
                <img class="img-fluid" src="random1" alt="">
                <div class="caption">
                    <p class="text-light fw-bold">parim pakkumine</p>
                    <p class="text-light fw-bold fs-2">osta 1 saad 1</p>
                    <p class="text-light fw-bold">The best classic dress is on sale at Coro</p>
                    <a href="index.php?leht=pood" class="btn btn-outline-light rounded-0" role="button">Vaata
                        lähemalt</a>
                </div>
                <?php echo '<img src="' . $randomImage . '" alt="" width="' . $maxWidth . '" height="' . $maxHeight . '">'; ?>
            </div>
            <div class="thumbnail col-md-6">
                <?php include 'random.php'; ?>
                <img class="img-fluid" src="random2" alt="">
                <div class="caption2">
                    <p class="text-light fw-bold">kevad/suvi</p>
                    <p class="text-light fw-bold fs-2">kõik rohelised</p>
                    <p class="text-light fw-bold">20% sootsamalt</p>
                    <a href="index.php?leht=pood" class="btn btn-outline-light rounded-0" role="button">Tutvu
                        lähemalt</a>
                </div>
                <?php echo '<img src="' . $randomImage . '" alt="" width="' . $maxWidth . '" height="' . $maxHeight . '">'; ?>
            </div>
        </div>
    </div>
    <section class="py-5">
        <h1 class="text-center fw-bold">Parimad pakkumised</h1>
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-start">
                <div class="col mb-5">
                    <div class="card h-100" id="1">
                        <img class="card-img-top img-fluid img-thumbnail" src="tooted/f1.jpg" alt="">
                        <div class="card-body p-4">
                            <div class="text-start">
                                <h5 class="fw-bolder" value="nimetus">Sinu toode</h5>
                                <h5 class="fw-bolder text-success" value="hind">20.00€</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top img-fluid img-thumbnail" src="tooted/f2.jpg" alt="">
                        <div class="card-body p-4">
                            <div class="text-start">
                                <h5 class="fw-bolder">Sinu toode</h5>
                                <h5 class="fw-bolder text-success">20.00€</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top img-fluid img-thumbnail" src="tooted/f3.jpg" alt="">
                        <div class="card-body p-4">
                            <div class="text-start">
                                <h5 class="fw-bolder">Sinu toode</h5>
                                <h5 class="fw-bolder text-success">20.00€</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top img-fluid img-thumbnail" src="tooted/f4.jpg" alt="">
                        <div class="card-body p-4">
                            <div class="text-start">
                                <h5 class="fw-bolder">Sinu toode</h5>
                                <h5 class="fw-bolder text-success">20.00€</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top img-fluid img-thumbnail" src="tooted/f5.jpg" alt="">
                        <div class="card-body p-4">
                            <div class="text-start">
                                <h5 class="fw-bolder">Sinu toode</h5>
                                <h5 class="fw-bolder text-success">20.00€</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top img-fluid img-thumbnail" src="tooted/f6.jpg" alt="">
                        <div class="card-body p-4">
                            <div class="text-start">
                                <h5 class="fw-bolder">Sinu toode</h5>
                                <h5 class="fw-bolder text-success">20.00€</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top img-fluid img-thumbnail" src="tooted/f7.jpg" alt="">
                        <div class="card-body p-4">
                            <div class="text-start">
                                <h5 class="fw-bolder">Sinu toode</h5>
                                <h5 class="fw-bolder text-success">20.00€</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top img-fluid img-thumbnail" src="tooted/f8.jpg" alt="">
                        <div class="card-body p-4">
                            <div class="text-start">
                                <h5 class="fw-bolder">Sinu toode</h5>
                                <h5 class="fw-bolder text-success">20.00€</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <h5 class="text-start">Thorian</h5>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://kit.fontawesome.com/56055df5c8.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>