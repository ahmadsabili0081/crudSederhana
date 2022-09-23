<?php
include_once('./koneksi.php');
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE from todo  WHERE id__todo = '$id'");
header('location: index.php');
