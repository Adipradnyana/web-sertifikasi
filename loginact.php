<?php
    //menangkap data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    include "class_user.php";
    $user = new user();
    
    $exec = $user->login($username,$password);
      
        if($exec){
          session_start();
          $_SESSION['user'] = $data['username'];
          echo "<script>alert('Login Berhasil');
                window.location = 'home.php';</script>";
        }else{
            echo  "<script>alert('Login Gagal, cek kembali username dan password');
                        window.location = 'login.php';</script>";
        }

?>