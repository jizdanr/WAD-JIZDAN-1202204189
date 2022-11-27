<?php
// if(isset($_SESSION['login'])) {
    session_start();
    if(!$_SESSION['login']) {
        if(!$_SESSION['login']) {
            $_SESSION['error'] = "Silahkan login terlebih dahulu";
            header("Location: login.php", true, 301);
            exit();
        }
    }
    if(isset($_COOKIE['login'])) {
        if($_COOKIE['login']) {
            require("config/connector.php");
            $id = $_COOKIE['user_id'];
            $sql = "SELECT * FROM users_jizdan WHERE id='$id'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $user = $row;    
            }
            }
            // var_dump($user); die;
        }
    } else {
        require("config/connector.php");
        $id = $_SESSION['user_id'];
            $sql = "SELECT * FROM users_jizdan WHERE id='$id'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $user = $row;    
            }
            }
            // var_dump($user); die;
    }
    // return;
// }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="style/style.css">
    <?php 
    // var_dump($_COOKIE['nav']); die; ?>
    <?php if(isset($_COOKIE['nav'])) {
        if($_COOKIE['nav'] == 'blue') { ?>
        <style>
            .header {
                background-color: blue;
            }
            .footer {
                background-color: blue;
            }
        </style>
    <?php } } ?>

    <?php if(isset($_COOKIE['nav'])) {
        if($_COOKIE['nav'] == 'yellow') { ?>
        <style>
            .header {
                background-color: yellow;
            }
            .footer {
                background-color: yellow;
            }
        </style>
    <?php } } ?>

    <?php if(isset($_COOKIE['nav'])) {
        if($_COOKIE['nav'] == 'red') { ?>
        <style>
            .footer {
                background-color: red;
            }
            .header {
                background-color: red;
            }
        </style>
    <?php } } ?>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>WAD Travel</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Home-Jizdan.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="ListCar-Jizdan.php">My Car</a>
                </li>
            </ul>
            <form class="d-flex justify-content-end" action="#">
                <li>
                <a href="Add-Jizdan.php" class="btn btn-light">Add car</a>
</li>
<div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Profile
  </a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="Profile-Jizdan.php">Profile</a></li>
    <li><a class="dropdown-item" href="config/logout.php">Logout</a></li>
  </ul>
</div>
                
            </form>
            </div>
        </div>
    </nav>
    <?php //session_start(); ?>
    <div class="container">
        <?php 
        if(!empty($_SESSION['success'])) { ?>
        <div class="alert alert-success" role="alert">
            <?= $_SESSION['success'] ?>
        </div>
        <?php }
        $_SESSION['success'] = "";
        ?>
        <?php 
        if(!empty($_SESSION['error'])) { ?>
        <div class="alert alert-danger" role="alert">
            <?= $_SESSION['error'] ?>
        </div>
        <?php }
        $_SESSION['error'] = "";
        ?>
        <div class="row" style="margin-top: 20px;">
            <form action="qwe/profil.php" method="POST">
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" name="email" id="staticEmail"
                            value="<?= $user['email'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama" id="staticEmail"
                            value="<?= $user['nama'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Nomor Handphone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="no_hp" id="staticEmail"
                            value="<?= $user['no_hp'] ?>">
                    </div>
                </div>
                <hr>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Kata Sandi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="password" id="staticEmail">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Konfirmasi Kata Sandi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="konfirmasi_password" id="staticEmail">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Warna Navbar</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="nav">
                            <option selected>Pilih Warna</option>
                            <option value="blue">Blue</option>
                            <option value="red">Red</option>
                            <option value="yellow">Yellow</option>
                        </select>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary" value="Simpan">
            </form>
        </div>
    </div>


    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>