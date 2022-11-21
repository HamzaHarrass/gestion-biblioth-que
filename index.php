<?php 
    	include('./config.php');
      include('./script.php');
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- ================== BEGIN core-css ================== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="./css/app.min.css" rel="stylesheet" />
    <link href="./css/vendor.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />   
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
     <!-- BEGIN parsley css-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/doc/assets/docs.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/src/parsley.css" />
  <!-- END parsley css-->
    <link href="./css/style.css" rel="stylesheet" />
    <!-- ================== END core-css ================== -->
</head>

<body >

    <nav class="navbar " >
        <a class="navbar-brandc text-white text-decoration-none ms-4  fs-1 font-family-inter" href="#">
          <img src="./image/open-book.png" width="50" height="40" class="d-inline-block align-top mt-1 " alt="">
          library </a>
        <form class="form-inline">
            <a href="./sing up.php"><button class="btn btn-warning rounded-pill text-white my-2  my-sm-0" type="button"><i class="bi bi-box-arrow-in-right me-2"></i>Sing up</button></a>
          </form>
      </nav>
    
      <section class="">      
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
          <div class="row gx-lg-5 align-items-center mb-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
              <h1 class="my-5 display-5  fw-bold ls-tight text-white">
                AWESOME<br />
                <span class="text-white">BOOKSTORE</span>
              </h1>
              <p class="mb-4 fw-bold text-black">
                Les missions des bibliothèques sont nombreuses, et ces premières sont notamment des missions culturelles.
              La conservation et la diffusion-communication de la culture sont les tâches essentielles des bibliothèques.
                </p>
            </div>
      
            <div class="col-lg-6 mb-5 mb-lg-0 my-5">
              <div id="card" class="card">
                <div  class="px-4 py-4 px-md-4">
                  <form  method="post" action="script.php" data-parsley-validate>
                        <div class="">
                          <img src="./image/open-book.png" class="w-25" alt="">
                        </div>
                    <!-- Email input -->
                    <div class="mb-4 text-start">
                      <input type="email" name="email" id="Email" class="form-control" required placeholder="exemple@library.youcode.ma" data-parsley-type="email"/>
                    </div>
      
                    <!-- Password input -->
                    <div class="mb-4 text-start">
                      <input type="password" name="password" id="password" class="form-control" required placeholder="enter your password" />
                    </div>
                    <!-- Submit button -->
                    <button type="submit" name="sing" class="btn btn-primary btn-block mb-4">
                      Sign in
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- END jquery js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- END parsley js-->
</body>
</html>