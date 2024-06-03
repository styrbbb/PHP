<?php
// require "check.php";
// if (isset($error)) {
//     echo "vale pass";
// }

// if (!empty($_POST['login']) && !empty($_POST['pass'])) {
//     //eemaldame kasutaja sisestusest kahtlase pahna
//     $login = htmlspecialchars(trim($_POST['login']));
//     $pass = htmlspecialchars(trim($_POST['pass']));
// }

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['login'];
    $password = $_POST['pass'];

    if (empty($username) || empty($password)) {
        $error = "Username and password are required.";
    } else {
        // Dummy credentials for example purposes
        $validUsername = "admin";
        $validPassword = "admin";

        if ($username == $validUsername && $password == $validPassword) {
            $_SESSION['loggedin'] = true;
            header('Location: admin.php');
            exit;
        } else {
            $error = "Username and password invalid.";
        }
    }
}
?>

<!doctype html>
<html lang="et">

<head>
    <title>login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<header class="py-2">
    <div class="container px-4 px-lg-2 my-5 mb-2">
        <div class="text-center text-dark">
            <h3 class="display-6 text-start">login</h3>
        </div>
    </div>
</header>

<div class="container mt-4">
    <?php if (!empty($error)): ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php endif; ?>
    <form action="" method="post">
        Login: <input type="text" id="login" name="login"><br>
        Password: <input type="password" id="pass" name="pass"><br>
        <input class="mt-2" type="submit" value="Logi sisse">
    </form>
</div>

<!-- <div class="container mt-4">
    <h2>Admin Login</h2>
    <form method="post" action="">
        <div class="form-group">
            <label for="username">Login: </label>
            <input type="text" class="form-control" id="login" name="login">
        </div>
        <div class="form-group">
            <label for="password">Password: </label>
            <input type="password" class="form-control" id="pass" name="pass">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div> -->

<body>
    <script src="https://kit.fontawesome.com/56055df5c8.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>