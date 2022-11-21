<?php
session_start();
include('config.php');

// function sing Up

include('./config.php');

if (isset($_POST['register'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pass =  $_POST['password'];
    $pasrepeat = $_POST['repeat'];
    $select = "SELECT * FROM admin WHERE email = '$email'";
    $result = mysqli_query($conn , $select);

    if(mysqli_num_rows($result) > 0){
      $error[] = 'user already exist !! ';
    }else{
      if($pass != $pasrepeat){
          $error[] = 'password not matched !!';
    }else{
        $insert ="INSERT INTO admin(name_admin,email,password) VALUES ('$name','$email','$pass')";
        mysqli_query($conn , $insert);
        header('location:index.php');
      }
    }
  }

  // function sing In

if (isset($_POST['sing'])){
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $pass = $_POST['password'];

  $select = "SELECT * FROM admin WHERE email = '$email' && password ='$pass' ";
  $result = mysqli_query($conn , $select);

  if(mysqli_num_rows($result)> 0){
      $row = mysqli_fetch_assoc($result);    /* save data as array assosaitive for admin */
      $_SESSION['adminId'] = $row['id'];     /* store id admin in golbal variable (session = super global) */
        header('location:dashbord.php');
        die();
    } else {
      header('location:./index.php');
    }
  }


// function delete
if(isset($_POST['delete_book']))
{
    $book_id = mysqli_real_escape_string($conn, $_POST['delete_book']);

    $query = "DELETE FROM books WHERE id='$book_id' ";
    $query_run = mysqli_query($conn, $query);
            header("Location: ViewAllBooks.php");

}


// function update

if(isset($_POST['update_book']))
{
    $book_id = mysqli_real_escape_string($conn, $_POST['book_id']);

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $auteur = mysqli_real_escape_string($conn, $_POST['auteur']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $genre = mysqli_real_escape_string($conn, $_POST['genres']);
    $prix = mysqli_real_escape_string($conn, $_POST['prix']);
    $image =  $_FILES['image']["name"];
    $id = $_SESSION['adminId'];

    $target= "image/books/".$image;   /*  crete la destination de l'image  */
    $tmp_image =  $_FILES['image']["tmp_name"]; /*  copie le origin nom de l'image et poster dans la destination de l'image */
   move_uploaded_file($tmp_image,$target);

    $query = "UPDATE books SET name_book='$name', auteur='$auteur', description='$description',id_genres=$genre, prix='$prix',image='$image',id_admin='$id' WHERE id='$book_id' ";
    $query_run = mysqli_query($conn, $query);
            header("Location: ViewAllBooks.php");


}


// function add 


if(isset($_POST['save_book']))
{
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $auteur = mysqli_real_escape_string($conn, $_POST['auteur']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $genre = mysqli_real_escape_string($conn, $_POST['genres']);
    $prix = mysqli_real_escape_string($conn, $_POST['prix']);
    $image =  $_FILES['image']["name"];
    $id = $_SESSION['adminId'];

    $target= "image/books/".$image;   /*  crete la destination de l'image  */
    $tmp_image =  $_FILES['image']["tmp_name"]; /*  copie le origin nom de l'image et poster dans la destination de l'image */
   move_uploaded_file($tmp_image,$target);

    $query = "INSERT INTO books (name_book,auteur,description,id_genres,prix,image , id_admin) VALUES ('$name','$auteur','$description','$genre','$prix','$image' , '$id')";
//     var_dump($query);
// die;
    $query_run = mysqli_query($conn, $query);
            header("Location: ViewAllBooks.php");

}

// unset($_session['hamza']);
// session_destroy();