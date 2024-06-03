<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header('Location: login.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="et">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP KT</title>
  <link rel="stylesheet" type="text/css" href="adminstyles/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <header class="py-2">
    <div class="container px-4 px-lg-5 my-5">
      <div class="text-center text-dark">
        <h1 class="display-5">Admin</h1>
        <p class="lead text-dark-50 mb-0">admin panel</p>
      </div>
    </div>
  </header>

  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Pilt</th>
          <th scope="col">Nimetus</th>
          <th scope="col">Hind</th>
          <th scope="col">Redigeeri</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td><img src="tooted/f1.jpg" alt="" class="img-fluid img-thumbnail" width="75" height="75"></td>
          <td>Sinu toode</td>
          <td>20.00€</td>
          <td><button type="button" class="btn btn-outline-danger">Kustuta</button></td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td><img src="tooted/f2.jpg" alt="" class="img-fluid img-thumbnail" width="75" height="75"></td>
          <td>Sinu toode</td>
          <td>20.00€</td>
          <td><button type="button" class="btn btn-outline-danger">Kustuta</button></td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td><img src="tooted/f3.jpg" alt="" class="img-fluid img-thumbnail" width="75" height="75"></td>
          <td>Sinu toode</td>
          <td>20.00€</td>
          <td><button type="button" class="btn btn-outline-danger">Kustuta</button></td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td><img src="tooted/f4.jpg" alt="" class="img-fluid img-thumbnail" width="75" height="75"></td>
          <td>Sinu toode</td>
          <td>20.00€</td>
          <td><button type="button" class="btn btn-outline-danger">Kustuta</button></td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td><img src="tooted/f5.jpg" alt="" class="img-fluid img-thumbnail" width="75" height="75"></td>
          <td>Sinu toode</td>
          <td>20.00€</td>
          <td><button type="button" class="btn btn-outline-danger">Kustuta</button></td>
        </tr>
        <tr>
          <th scope="row">6</th>
          <td><img src="tooted/f6.jpg" alt="" class="img-fluid img-thumbnail" width="75" height="75"></td>
          <td>Sinu toode</td>
          <td>20.00€</td>
          <td><button type="button" class="btn btn-outline-danger">Kustuta</button></td>
        </tr>
        <tr>
          <th scope="row">7</th>
          <td><img src="tooted/f7.jpg" alt="" class="img-fluid img-thumbnail" width="75" height="75"></td>
          <td>Sinu toode</td>
          <td>20.00€</td>
          <td><button type="button" class="btn btn-outline-danger">Kustuta</button></td>
        </tr>
        <tr>
          <th scope="row">8</th>
          <td><img src="tooted/f8.jpg" alt="" class="img-fluid img-thumbnail" width="75" height="75"></td>
          <td>Sinu toode</td>
          <td>20.00€</td>
          <td><button type="button" class="btn btn-outline-danger">Kustuta</button></td>
        </tr>
        <tr>
          <th scope="row">9</th>
          <td><img src="tooted/f9.jpg" alt="" class="img-fluid img-thumbnail" width="75" height="75"></td>
          <td>Sinu toode</td>
          <td>20.00€</td>
          <td><button type="button" class="btn btn-outline-danger">Kustuta</button></td>
        </tr>
        <tr>
          <th scope="row">10</th>
          <td><img src="tooted/f10.jpg" alt="" class="img-fluid img-thumbnail" width="75" height="75"></td>
          <td>Sinu toode</td>
          <td>20.00€</td>
          <td><button type="button" class="btn btn-outline-danger">Kustuta</button></td>
        </tr>
        <tr>
          <th scope="row">11</th>
          <td><img src="tooted/f11.jpg" alt="" class="img-fluid img-thumbnail" width="75" height="75"></td>
          <td>Sinu toode</td>
          <td>20.00€</td>
          <td><button type="button" class="btn btn-outline-danger">Kustuta</button></td>
        </tr>
        <tr>
          <th scope="row">12</th>
          <td><img src="tooted/f12.jpg" alt="" class="img-fluid img-thumbnail" width="75" height="75"></td>
          <td>Sinu toode</td>
          <td>20.00€</td>
          <td><button type="button" class="btn btn-outline-danger">Kustuta</button></td>
        </tr>
        <tr>
          <th scope="row">13</th>
          <td><img src="tooted/f13.jpg" alt="" class="img-fluid img-thumbnail" width="75" height="75"></td>
          <td>Sinu toode</td>
          <td>20.00€</td>
          <td><button type="button" class="btn btn-outline-danger">Kustuta</button></td>
        </tr>
        <tr>
          <th scope="row">14</th>
          <td><img src="tooted/f14.jpg" alt="" class="img-fluid img-thumbnail" width="75" height="75"></td>
          <td>Sinu toode</td>
          <td>20.00€</td>
          <td><button type="button" class="btn btn-outline-danger">Kustuta</button></td>
        </tr>
        <tr>
          <th scope="row">15</th>
          <td><img src="tooted/f15.jpg" alt="" class="img-fluid img-thumbnail" width="75" height="75"></td>
          <td>Sinu toode</td>
          <td>20.00€</td>
          <td><button type="button" class="btn btn-outline-danger">Kustuta</button></td>
        </tr>
        <tr>
          <th scope="row">16</th>
          <td><img src="tooted/f16.jpg" alt="" class="img-fluid img-thumbnail" width="75" height="75"></td>
          <td>Sinu toode</td>
          <td>20.00€</td>
          <td><button type="button" class="btn btn-outline-danger">Kustuta</button></td>
        </tr>
      </tbody>
    </table>
  </div>


  <div class="container mt-4">
    <form action="logout.php" method="post">
      <input type="submit" value="Logi välja" name="logout">
    </form>
  </div>
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