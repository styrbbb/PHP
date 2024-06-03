<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header('Location: login.php');
  exit;
}
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_id'])) {
  $delete_id = $_POST['delete_id'];
  $file = 'tooted/tooted.csv';

  // Read all data from the CSV file
  $rows = array_map('str_getcsv', file($file));

  // Find the index of the row to delete
  $header = array_shift($rows); // Separate header
  foreach ($rows as $index => $row) {
    if ($row[0] == $delete_id) {
      unset($rows[$index]);
      break;
    }
  }

  // Write the data back to the CSV file
  $file_handle = fopen($file, 'w');
  fputcsv($file_handle, $header); // Write the header back
  foreach ($rows as $row) {
    fputcsv($file_handle, $row);
  }
  fclose($file_handle);

  // Redirect to the same page to reflect the changes
  header("Location: " . $_SERVER['PHP_SELF']);
  exit();
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
        <?php
        //Avab CSV faili
        if (($handle = fopen("tooted/tooted.csv", "r")) !== FALSE) {
          // Skip the first row (headers)
          fgetcsv($handle, 1000, ",");

          // Loop through the CSV rows
          while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) { ?>
            <tr>
              <?php echo "<th scope='row'>{$data[0]}</th>"; ?>
              <?php echo "<td><img src='{$data[1]}' alt='' class='img-fluid img-thumbnail' width='75' height='75'></td>"; ?>
              <?php echo "<td>{$data[2]}</td>"; ?>
              <?php echo "<td>{$data[3]}</td>"; ?>
              <?php echo "<td>
                            <form method='POST' style='display:inline-block;'>
                                <input type='hidden' name='delete_id' value='{$data[0]}'>
                                <button type='submit' class='btn btn-outline-danger'>Kustuta</button>
                            </form>
                          </td>"; ?>
            </tr>
          <?php }
          //Sulgeb ja salvestab muudatused csv failis
          fclose($handle);
        }
        ?>
      </tbody>
    </table>
  </div>
  <div class="container">
    <form>
      <div class="mb-3">
        <label for="nimetus" class="form-label">Toote nimi</label>
        <input type="text" class="form-control" name="nimetus" id="nimetus">
      </div>
      <div class="mb-3">
        <label for="hind" class="form-label">Hind</label>
        <input type="number" class="form-control" name="hind" id="hind">
      </div>
      <button type="submit" class="btn btn-primary">Lisa</button>
    </form>
  </div>
  <div class="container mt-4 mb-4">
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