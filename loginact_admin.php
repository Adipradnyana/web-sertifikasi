<?php
    //menangkap data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    include "class_admin.php";
    $admin = new admin();
    
    $exec = $admin->login($username,$password);
        // Cek proses login
        if($exec){
          session_start();
          $_SESSION['user'] = $data['username'];
          echo "<script>alert('Login Berhasil');
                window.location = 'home.php';</script>";
        }else{
            echo  "<script>alert('Login Gagal, cek kembali username dan password');
                        window.location = 'login_admin.php';</script>";
        }

?>