<?php

include('config.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- fille css -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
     <!-- BEGIN #app -->
     <nav class="navbar " >
        <a class="navbar-brandc text-white text-decoration-none ms-4 fs-2 " href="#">
          <img src="./image/open-book.png" width="50" height="40" class="d-inline-block align-top  mt-1 " alt="">
          library </a>
      </nav>

      <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">description</th>
      <th scope="col">auteur</th>
      <th scope="col">prix</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <section>
     <?php 
        $query = "SELECT * FROM books";
        $query_run = mysqli_query($conn, $query);
      if(mysqli_num_rows($query_run) > 0)
    {
       foreach($query_run as $books)
     {
        ?>
                <tr>
                    <td><?= $books['name']; ?></td>
                    <td><?= $books['deccription']; ?></td>
                    <td><?= $books['auteur']; ?></td>
                    <td><?= $books['prix']; ?></td>
                <td>
            <a href="books-view.php?id=<?= $books['id']; ?>" class="btn btn-info btn-sm ">View</a>
            <a href="books-edit.php?id=<?= $books['id']; ?>" class="btn btn-success btn-sm">Edit</a>
            <form action="script.php" method="POST" class="d-inline">
        <button type="submit" name="delete_book" value="<?=$books['id'];?>" class="btn btn-danger btn-sm">Delete</button>
    </form>
      </td>
        </tr>
             <?php
         }
       }  else
       {
           echo "<h5> No Record Found </h5>";
        }
      ?>
 
  </section>
</table>
</body>
</html>