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
   
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<link href="./css/app.min.css" rel="stylesheet" />
<link href="./css/vendor.min.css" rel="stylesheet" /> 
<!-- link bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- icons bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
<!-- fille css -->
<link href="./css/style.css" rel="stylesheet" />
</head>
<body>
     <!-- BEGIN #app -->
     <nav class="navbar " >
        <a class="navbar-brandc text-white text-decoration-none ms-4 fs-2 " href="#">
          <img src="./image/open-book.png" width="50" height="40" class="d-inline-block align-top  mt-1 " alt="">
          library </a>
          <form class="form-inline" method="post" action="script.php">
            <button class="btn btn-warning rounded-pill text-white my-3 my-sm-0" type="submit" name="log_out"><i class="bi bi-box-arrow-in-right me-2"></i>Sing Out</button>
          </form>
      </nav>

      <nav class="ms-5 d" style="--bs-breadcrumb-divider: '>'; " aria-label="breadcrumb">
  <ol class="breadcrumb ">
    <li class="breadcrumb-item active">Home</li>
    <li class="breadcrumb-item " aria-current="page"><a class="text-white text-decoration-none" href="ViewAllBooks.php">library</a></li>
    <li class="breadcrumb-item " aria-current="page"><a class="text-white text-decoration-none" href="statistique.php">Statistique</a></li>
  </ol>
</nav>

             <h1  class="d-flex justify-content-center text-white "><img src="image/icons8-waving-hand-emoji-48.png"  alt="" srcset="">  hay ,<?=$_SESSION['name'] ?></h1>          

      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators ">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner px-5">
    <div class="carousel-item active">
      <img src="image/books/c2eecfa30a134e897f4e832e0c89cb021b900fb6_dqfbdbdfqk.jpg" class="pe-5 ps-5 d-block w-100 " alt="">
    </div>
    <div class="carousel-item">
      <img src="image/books/13651b867e15bcb1826f112f5a7695e322fb7969_sqvdqsdv.jpg" class="pe-5 ps-5 d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/books/3a63b5d69a04de1c55e6edc2f65108cda37ff367_kpnoo .jpg" class="pe-5 ps-5 d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<section class=" ">
  <div class="row m-3 d-flex justify-content-center row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-5 ">
<?php  
        $query = "SELECT books.id , books.name_book , books.auteur , books.prix, books.image ,books.id_admin ,genres.genres, 
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
   <div class="col card me-2 mt-2 " style="width: 15rem;  background-color: rgba(255, 255, 255, 0.700);">
        <img src="image/books/<?= $books['image']; ?>" style="  height:250px ;" class="card-img-top" alt="">
            <div class="card-body ">
                <p class="card-title text-black fw-bolder"><?= $books['name_book']; ?></p>
                <p class="card-text text-gray-600 fs-5 fw-bolder"><?= $books['genres']; ?></p>
                <p class="card-text text-green-700 fw-bolder" ><?= $books['prix']; ?> DH</p>
            </div>
    </div>
      <?php
    }
  }
     ?>
     </div>
</section>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>
<?php 
}
?>