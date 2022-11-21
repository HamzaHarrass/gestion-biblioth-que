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
                                <form enctype="multipart/form-data" action="script.php" method="POST">
                                    <input type="hidden" name="book_id" value="<?= $book['id']; ?>">
                                    <div class="mb-3">
                                      <img src="image/books/<?=$book['image'];?>" class="w-25 mb-3" alt="">
                                      <input type="file" name="image" value="" class="  form-control">
                                     </div>

                                    <div class="mb-3">
                                        <label>book Name</label>
                                        <input type="text" name="name" value="<?=$book['name_book'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>auteur</label>
                                        <input type="text" name="auteur" value="<?=$book['auteur'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>description</label>
                                        <textarea type="text" name="description" class="form-control" id="" rows="5"><?=$book['description'];?></textarea>
                                    </div>
                                    <div class="mb-3">
                            <label for="genres" class="col-form-label text-black">genres</label>
					     	<select class="form-select " name="genres" aria-label="Default select example" id="genres" value="<?= $book['genres'];?>">
						    	<option value="" selected></option>
						     	<option value="1">Action</option>
						    	<option value="2">Classic</option>
						    	<option value="3">Fantasy</option>
						    	<option value="4">Horror</option>
						    	<option value="5">Literary Fiction</option>
						    	<option value="6">Romance</option>
						    	<option value="7">Short Stories</option>
						    	<option value="8">History</option>
						    </select>
                            </div>
                                    <div class="mb-3">
                                        <label>prix</label>
                                        <input type="text" name="prix" value="<?=$book['prix'];?>" class="form-control">
                                    </div>

                                    <div class=" mb-3">
                                        <button type="submit" name="update_book" class="btn btn-primary  d-flex justify-content-center">
                                        <lord-icon src="https://cdn.lordicon.com/bxxnzvfm.json"  trigger="hover"style="width:30px;height:30px">
                                     </lord-icon>Update book
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

    <script src="https://cdn.lordicon.com/qjzruarw.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>