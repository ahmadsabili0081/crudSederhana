<?php
include_once('./koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Todos</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <div class="container">
    <h1>todoList</h1>
    <div class="todo__wrapper">
      <form action="proses.php" class="form" method="post">
        <input type="text" class="todo" name="todo" placeholder="write something.." />
        <button class="btnAdd" type="submit"><i class="fas fa-plus-square"></i></button>
      </form>
      <div class="resultTodo">
        <?php
        $query = mysqli_query($koneksi, 'SELECT * FROM todo');
        $no = 1;
        while ($row = mysqli_fetch_array($query)) {
          echo "<div class='todoList'>";
          echo "<button class='completed' type='button'><i class='fas fa-check'></i></button>";
          echo "$row[todo__name]";
          echo "<div class='btn__container'>";
          echo "<a class='edit' href='todoEdit.php?id=$row[id__todo]'><i class='fa-solid fa-pencil'></i></a>";
          echo "<a class='delete' href='prosesDelete.php?id=$row[id__todo]'><i class='fa-solid fa-trash'></i></a>";
          echo  "</div>";
          echo "</div>";
          $no++;
        }
        ?>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    let resultTodo = document.querySelector('.resultTodo')
    resultTodo.addEventListener('click', (e) => {
      if (e.target.classList.contains('completed')) {
        let targetCompleted = e.target.parentElement;
        targetCompleted.classList.toggle('completedCheked')
      }
    })
  </script>
</body>

</html>