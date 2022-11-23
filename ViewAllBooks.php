<?php
include('config.php');
include('script.php');
if(!isset($_SESSION['adminId'])){
  header('location: Error.php');
}else{
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
          <form class="form-inlinec " action="NewBook.php">
            <button type="submit" class="btn  btn-warning rounded-pill text-white me-3 d-flex justify-content-center  my-sm-0" type="button">
              <lord-icon class=""  src="https://cdn.lordicon.com/xzksbhzh.json"
                     trigger="hover"
                        style="width:25px;height:25px"></lord-icon>
                Add Book</button>
          </form>
      </nav>

      <nav class="ms-5 d" style="--bs-breadcrumb-divider: '>'; " aria-label="breadcrumb">
  <ol class="breadcrumb ">
    <li class="breadcrumb-item"><a class="text-white text-decoration-none" href="dashbord.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Library</li>
  </ol>
</nav>

      <table class="table table-striped table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">image</th>
      <th scope="col">name</th>
      <th scope="col">auteur</th>
      <th scope="col">geners</th>
      <th scope="col">prix</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <section>
     <?php 
        $query = "SELECT books.id , books.name_book , books.auteur , books.prix, books.image ,books.id_admin ,genres.genres,admin.name_admin, 
        admin.name_admin FROM books
         inner join admin ON books.id_admin = admin.id
         inner join genres ON books.id_genres = genres.id
          WHERE admin.id = $_SESSION[adminId];";
        $query_run = mysqli_query($conn, $query);
      if(mysqli_num_rows($query_run) > 0)
    {
       foreach($query_run as $books)
     {
        ?>
                <tr>
                    <td><img class="" style="height: 80px" src="image/books/<?= $books['image']; ?>" alt=""></td>
                    <td><?= $books['name_book']; ?></td>
                    <td><?= $books['auteur']; ?></td>
                    <td><?= $books['genres']; ?></td>
                    <td><?= $books['prix']; ?></td>
                <td>
            <a href="books-view.php?id=<?= $books['id']; ?>" class="btn btn-info btn-sm "> <lord-icon src="https://cdn.lordicon.com/hbvgknxo.json"trigger="hover" style="width:20px;height:20px">
</lord-icon>View</a>
            <a href="books-edit.php?id=<?= $books['id']; ?>" class="btn btn-success btn-sm"> <lord-icon src="https://cdn.lordicon.com/bxxnzvfm.json"  trigger="hover"style="width:20px;height:20px">
                                     </lord-icon>Edit</a>
            <form action="script.php" method="POST" class="d-inline">
        <button type="submit" name="delete_book" value="<?=$books['id'];?>" class="btn btn-danger btn-sm"> <lord-icon
    src="https://cdn.lordicon.com/jmkrnisz.json" trigger="hover" style="width:20px;height:20px">
                    </lord-icon>Delete</button>
    </form>
      </td>
        </tr>
             <?php
         }
       } 
      ?>
  </section>
</table>


<script src="https://cdn.lordicon.com/qjzruarw.js"></script>
</body>
</html>
<?php
}
?>