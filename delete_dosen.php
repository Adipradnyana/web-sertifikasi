<?php
//menangkap value dari form
$nidn = $_GET['nidn'];
include "class_dosen.php";
$cdsn = new dosen();

$exec = $cdsn->hapus_data($nidn);

//cek proses hapus data
if ($exec) {
    echo "<script>alert('Data berhasil di-update');
           window.location='dosen.php'</script>";
}else{
   echo "<script>alert('Data Gagal di-update');
            window.location='dosen.php'</script>";
   }