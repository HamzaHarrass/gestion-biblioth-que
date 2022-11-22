<?php

 include('config.php');

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
<!-- icons bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <!-- style css -->
    <link rel="stylesheet" href="./css/style.css">
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
    <li class="breadcrumb-item active"aria-current="page"><a class="text-white text-decoration-none" href="dashbord.php">Home</a></li>
    <li class="breadcrumb-item " aria-current="page"><a class="text-white text-decoration-none" href="ViewAllBooks.php">library</a></li>
    <li class="breadcrumb-item active ">statistique</li>
  </ol>
</nav>

    <div class=" d-flex justify-content-center">
    <div class="row">
      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <lord-icon
                   src="https://cdn.lordicon.com/dxoycpzg.json" trigger="morph"
                   colors="primary:#ee6d66,secondary:#646e78,tertiary:#4bb3fd,quaternary:#ebe6ef,quinary:#f9c9c0"
                   style="width:60px;height:60px">
                </lord-icon>
              </div>
              <div class="text-end">
                <h3>278</h3>
                <p class="mb-0">Total Books</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--  -->

      <div class="row">
      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <lord-icon
                   src="https://cdn.lordicon.com/dxoycpzg.json" trigger="morph"
                   colors="primary:#ee6d66,secondary:#646e78,tertiary:#4bb3fd,quaternary:#ebe6ef,quinary:#f9c9c0"
                   style="width:60px;height:60px">
                </lord-icon>
              </div>
              <div class="text-end">
                <h3>278</h3>
                <p class="mb-0">Total Books</p>
              </div>
            </div>
          </div>
        </div>
      </div>

<!--  -->
   <div class="row">
      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <lord-icon
                   src="https://cdn.lordicon.com/dxoycpzg.json" trigger="morph"
                   colors="primary:#ee6d66,secondary:#646e78,tertiary:#4bb3fd,quaternary:#ebe6ef,quinary:#f9c9c0"
                   style="width:60px;height:60px">
                </lord-icon>
              </div>
              <div class="text-end">
                <h3>278</h3>
                <p class="mb-0">Total Books</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--  -->

      <div class="row">
      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <lord-icon
                   src="https://cdn.lordicon.com/dxoycpzg.json" trigger="morph"
                   colors="primary:#ee6d66,secondary:#646e78,tertiary:#4bb3fd,quaternary:#ebe6ef,quinary:#f9c9c0"
                   style="width:60px;height:60px">
                </lord-icon>
              </div>
              <div class="text-end">
                <h3>278</h3>
                <p class="mb-0">Total Books</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

      <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
</body>
</html>
<?php
}
?>