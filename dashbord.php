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
      </nav>

      <nav class="ms-5 d" style="--bs-breadcrumb-divider: '>'; " aria-label="breadcrumb">
  <ol class="breadcrumb ">
    <li class="breadcrumb-item active">Home</li>
    <li class="breadcrumb-item " aria-current="page"><a class="text-white text-decoration-none" href="ViewAllBooks.php">library</a></li>
  </ol>
</nav>

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


      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>