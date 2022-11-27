<?php
require("../config/connector.php");

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$no_hp = $_POST['no_hp'];
$passwordHash = md5($password);
$sql = "INSERT INTO users_jizdan (nama, email, password, no_hp)
VALUES ('$nama', '$email', '$passwordHash', '$no_hp')";

if ($conn->query($sql) === TRUE) {
  // echo "New record created successfully";
  session_start();
  $_SESSION['success'] = "Berhasil registrasi";
    header("Location: ../Login-Jizdan.php", true, 301);
    exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();