<?php


// function sing Up

  include('./config.php');

    if (isset($_POST['register'])){
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $pass = $_POST['password'];
        $pasrepeat = $_POST['repeat'];
        $select = "SELECT * FROM user_from WHERE email = '$email' && pasword ='$pass' ";
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

         
