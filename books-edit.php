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

    <title>book Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php 
        // include('message.php'); 
        ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>book Edit 
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
                                <form action="script.php" method="POST">
                                    <input type="hidden" name="book_id" value="<?= $book['id']; ?>">

                                    <div class="mb-3">
                                        <label>book Name</label>
                                        <input type="text" name="name" value="<?=$book['name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>auteur</label>
                                        <input type="text" name="auteur" value="<?=$book['auteur'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>description</label>
                                        <textarea type="text" name="description" value="<?=$book['deccription'];?>" class="form-control" id="" rows="5"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label>prix</label>
                                        <input type="text" name="prix" value="<?=$book['prix'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_book" class="btn btn-primary">
                                            Update book
                                        </button>
                                    </div>

                                </form>
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