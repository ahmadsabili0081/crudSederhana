<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "todos";

$koneksi = mysqli_connect($server, $user, $password, $database) or die("Koneksi Gagal");
