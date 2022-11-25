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

    <title>book Edit</title>
</head>
<body>

 <!-- BEGIN #app -->
 <nav class="navbar " >
        <a class="navbar-brandc text-white text-decoration-none ms-4 fs-2 " href="#">
          <img src="./image/open-book.png" width="50" height="40" class="d-inline-block align-top  mt-1 " alt="">
          library </a>
      </nav>


    <div class="container mt-5">

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
                                        <textarea type="text" name="description" class="form-control" id="" rows="5"><?=$book['description'], $book['id_genres'] ;?></textarea>
                                    </div>
                                    <div class="mb-3">
                            <label for="genres" class="col-form-label text-black">genres</label>
					     	<select class="form-select " name="genres" aria-label="Default select example" id="genres">
						    	<!-- <option value="" selected></option> -->
						     	<option value="1" <?php if($book['id_genres'] == 1){ echo 'selected';} ?>>Action</option>
						    	<option value="2" <?php if($book['id_genres'] == 2){ echo 'selected';} ?>>Classic</option>
						    	<option value="3" <?php if($book['id_genres'] == 3){ echo 'selected';} ?>>Fantasy</option>
						    	<option value="4" <?php if($book['id_genres'] == 4){ echo 'selected';} ?>>Horror</option>
						    	<option value="5" <?php if($book['id_genres'] == 5){ echo 'selected';} ?>>Literary Fiction</option>
						    	<option value="6" <?php if($book['id_genres'] == 6){ echo 'selected';} ?>>Romance</option>
						    	<option value="7" <?php if($book['id_genres'] == 7){ echo 'selected';} ?>>Short Stories</option>
						    	<option value="8" <?php  if($book['id_genres'] == 8){ echo 'selected';} ?>>History</option>
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
<?php
  }
?>