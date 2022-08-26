<?php
//menangkap value dari form
$kode_ukm = $_GET['kode_ukm'];
include "class_ukm.php";
$cukm = new ukm();

$exec = $cukm->hapus_data($kode_ukm);

//cek proses hapus data
if ($exec) {
    echo "<script>alert('Data berhasil di-update');
           window.location='ukm.php'</script>";
}else{
   echo "<script>alert('Data Gagal di-update');
            window.location='ukm.php'</script>";
   }