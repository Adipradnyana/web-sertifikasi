<?php
// menangkap value dari form
include "class_dosen.php";
$cdsn = new dosen();


$data = array(
    'nidn'              => $_POST['nidn'],
    'nama'              => $_POST['nama'],
    'pendidikan'        => $_POST['pendidikan'],
    'tgl_lahir'         => $_POST['tgl_lahir'],
    'gender'            => $_POST['gender'],
    'alamat'            => $_POST['alamat'],
    'no_hp'             => $_POST['no_hp'],
    'email'             => $_POST['email'],
);

$exec = $cdsn->tambah_data($data);



//cek proses simpan data
if ($exec) {
    echo "<script>alert('Data berhasil di-update');
           window.location='dosen.php'</script>";
}else{
   echo "<script>alert('Data Gagal di-update');
            window.location='dosen.php'</script>";
   }