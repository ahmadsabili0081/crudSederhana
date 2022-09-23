<?php
include_once('./koneksi.php');
$todo = $_POST['todo'];


if (empty($todo)) {
  header("location: index.php");
} else {
  mysqli_query($koneksi, "INSERT INTO todo (todo__name) VALUES ('$todo')");
  header("location: index.php");
}
