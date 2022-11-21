<?php
session_start();
include('config.php');

// function sing Up

include('./config.php');

if (isset($_POST['register'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pass = $_POST['password'];
    $pasrepeat = $_POST['repeat'];
    $select = "SELECT * FROM user_from WHERE email = '$email'";
    $result = mysqli_query($conn , $select);

    if(mysqli_num_rows($result)> 0){
      $error[] = 'user already exist !! ';
    }else{
      if($pass != $pasrepeat){
          $error[] = 'password not matched !!';
    }else{
        $insert ="INSERT INTO user_from(name,email,pasword) VALUES ('$name','$email','$pass')";
        mysqli_query($conn , $insert);
        header('location:index.php');
      }
    }
  }

  // function sing In

if (isset($_POST['sing'])){
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $pass = $_POST['password'];

  $select = "SELECT * FROM user_from WHERE email = '$email' && pasword ='$pass' ";
  $result = mysqli_query($conn , $select);

  if(mysqli_num_rows($result)> 0){
        header('location:Sing up.php');
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
    $prix = mysqli_real_escape_string($conn, $_POST['prix']);

    $query = "UPDATE books SET name='$name', auteur='$auteur', deccription='$description', prix='$prix' WHERE id='$book_id' ";
    $query_run = mysqli_query($conn, $query);
            header("Location: ViewAllBooks.php");


}


// function add 


if(isset($_POST['save_book']))
{
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $auteur = mysqli_real_escape_string($conn, $_POST['auteur']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $prix = mysqli_real_escape_string($conn, $_POST['prix']);

    $query = "INSERT INTO books (name,auteur,deccription,prix) VALUES ('$name','$auteur','$description','$prix')";
    $query_run = mysqli_query($conn, $query);
            header("Location: ViewAllBooks.php");

}

?>