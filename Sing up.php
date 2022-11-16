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
    <!-- BEGIN parsley css-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/doc/assets/docs.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/src/parsley.css" />
  <!-- END parsley css-->
    <link href="./css/style.css" rel="stylesheet" />

    <!-- ================== END core-css ================== -->
</head>

<body>


    <!-- BEGIN #app -->
    <nav class="navbar " >
      <a class="navbar-brandc text-white text-decoration-none ms-4  fs-1 " href="#">
        <img src="./image/open-book.png" width="50" height="40" class="d-inline-block align-top  mt-1 " alt="">
        library </a>
    </nav>
    <section class="">
      <div class="container">
        <div class="row d-flex justify-content-center  align-items-center ">
          <div class="col-lg-12 col-xl-11">
            <div id="image" class=" card text-black " style=";">
              <div class="p-md-5 ">
                <div class="row justify-content-center">
                  <div  class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
    
                    <p id="PragraphSingUp" class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
    
                    <form class="mx-1 mx-md-4" method="post" action="script.php" data-parsley-validate>
                    <?php
                    if(isset($error)){
                      foreach($error as $email){
                        echo '<span class="msg_error">'.$error.'</span>';
                      };
                    };
                      ?>
                      <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                          <input type="text" name="name" id="form3Example1c" class="form-control" required placeholder="Your Name" data-parsley-length="[8, 40]" data-parsley-group="block-2"/>
                        </div>
                      </div>
    
                      <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                          <input type="email" name="email" id="form3Example3c" class="form-control" required placeholder="Your Email"/>
                        </div>
                      </div>
    
                      <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                          <input type="password" name="password" id="password" class="form-control" required placeholder="Password" data-parsley-length="[8, 20]"/>
                        </div>
                      </div>
    
                      <div class="d-flex flex-row align-items-center  mb-4">
                        <div class="form-outline flex-fill  ">
                          <input type="password" name="repeat" id="repeatpassword" class="form-control" required placeholder="Repeat your password" data-parsley-equalto="#password"/>
                        </div>
                      </div>

                      <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <button type="submit" name="register" class="btn btn-primary btn-lg">Register</button>
                      </div>
    
                    </form>
    
                  </div>
                  <div class="w-50 col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2" >
    
                    <img src="./image/Learning-bro.png"
                      class="img-fluid" alt="Sample image">
    
                  </div>
                </div>
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