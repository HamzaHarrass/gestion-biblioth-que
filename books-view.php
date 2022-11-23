<?php
include('config.php');
include('script.php');
if(!isset($_SESSION['adminId'])){
    header('location: Error.php');
  }else{
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

    <title>Student View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>books View Details 
                            <a href="ViewAllBooks.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $books_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM books WHERE id='$books_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $book = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3 ">
                                        <p class="">
                                           <img src="image/books/<?=$book['image'];?>" alt="" srcset=""> 
                                        </p>
                                    </div>
                                
                                    <div class="mb-3">
                                        <p class="text-danger fw-bolder">
                                            <?=$book['name_book'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <p class=" fw-bolder text-primary">
                                            <?=$book['auteur'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <p class=" fw-bolder">
                                            <?=$book['description'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <p class="text-success fw-bolder">
                                            <?=$book['prix'];?> DH
                                        </p>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
  }
?>