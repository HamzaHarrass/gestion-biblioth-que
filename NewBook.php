<?php
// session_start();
include('config.php');
include('script.php');
?> 

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- style css -->
    <link rel="stylesheet" href="./css/style.css">

    <title>Student Create</title>
</head>
<body>
  
      <nav class="navbar " >
        <a class="navbar-brandc text-white text-decoration-none ms-4 fs-2 " href="#">
          <img src="./image/open-book.png" width="50" height="40" class="d-inline-block align-top  mt-1 " alt="">
          library </a>
      </nav>

    <div class="container mt-3">
        <?php 
        // include('message.php');
        ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Book Add 
                            <a href="ViewAllBooks.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="script.php" method="POST">

                            <div class="mb-3">
                                <label>book Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>auteur</label>
                                <input type="text" name="auteur" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>description</label>
                                <textarea type="text" name="description" class="form-control" id=""  rows="5"></textarea>
                            </div>
                            <div class="mb-3">
                                <label>prix</label>
                                <input type="text" name="prix" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_book" class="btn btn-primary">Save Student</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
