<?php
include_once('./koneksi.php');
$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM todo WHERE id__todo='$id'");
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Todo</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">
</head>
<div class="container">
  <div class="todo__wrapper">
    <form class="form" action="prosesEdit.php?id=<?php echo $id ?>" method="post">
      <input class="todo" type="text" name="todo" value="<?php echo $row['todo__name'] ?>">
      <button class="btnAdd" type="submit"><i class='fa-solid fa-pencil'></i></button>
  </div>
  </form>
</div>

<body>

</body>

</html>