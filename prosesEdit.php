<?php
include_once('./koneksi.php');
$todo = $_POST['todo'];
$id = $_GET['id'];
if (empty($todo) || empty($id)) {
  header('location: index.php');
} else {
  mysqli_query($koneksi, "UPDATE todo SET todo__name='$todo' WHERE id__todo = '$id'");
  header('location: index.php');
}
