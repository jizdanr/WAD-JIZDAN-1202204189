<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    <link rel="stylesheet" href="style/style.css">

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">SHOWROOM JIZDAN</a>
                </li>
            </ul>
    </nav>

    <div class="container">
        <div class="row justify-content-center" style="margin-top: 50px;">
        <div class="row g-2">
            <div class="col-6">
            <img src="rush.jpg" class="img-fluid rounded-start" alt="...">
        </div>
            <div class="col-6">
                <form method="post" action="config/register.php">
                <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Masukan Nama Lengkap" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Masukan Alamat E-mail" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nomor Handphone</label>
                        <input type="text" class="form-control" id="exampleInputPassword1"
                            placeholder="Masukan Nomor Handphone" name="no_hp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Kata Sandi Anda" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Konfirmasi Kata Sandi</label>
                        <input type="password" class="form-control" id="password_konfirmasi" name="password_konfirmasi"
                            placeholder="Konfirmasi Kata Sandi Anda">
                    </div>
                    <button type="submit" class="btn btn-primary" id="btn_submit" disabled>Daftar</button>
                    <br>
                    <label class="form-check-label" for="exampleCheck1">Anda sudah punya akun? <a
                            href="Login-Jizdan.php">Login</a></label>
                </form>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $('#password_konfirmasi').on('input', function() {
            var password = $("#password").val();
            var passwordKonfirmasi = $("#password_konfirmasi").val();
            if(password == passwordKonfirmasi) {
                $("#btn_submit").removeAttr("disabled");
            } else {
                $("#btn_submit").attr("disabled", true);
            }
        });
        // function checkPasswd() {
        //     // alert('ok');
        //     var password = $("password");
        //     var passwordKonfirmasi = $("password_konfirmasi");

        //     if(password == passwordKonfirmasi) {
        //         $("#btn_submit").removeAttr("disabled");
        //         alert('sama')
        //     } else {
        //         alert('tak sama')
        //     }
        // }
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>