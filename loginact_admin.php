<?php

include "class_admin.php";
$admin = new admin();

//menangkap data dari form
if(isset($_POST['submit'])){
    $data = array(
        'username' => $_POST['username'],
        'password' => $_POST['password'],
    );
}

    $exec = $admin->login($data);
        // Cek proses login
        if($exec){
            session_start();
          $_SESSION['username'] = $data['username'];
          echo "<script>alert('Login Berhasil');
                window.location = 'home.php';</script>";
        }else{
            echo  "<script>alert('Login Gagal, cek kembali username dan password');
                        window.location = 'login.php';</script>";
        }

?>