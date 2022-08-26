<?php
//menangkap value dari form
$kode_jurusan = $_GET['kode_jurusan'];
include "class_jurusan.php";
$cjrs = new jurusan();

$exec = $cjrs->hapus_data($kode_jurusan);

//cek proses hapus data
if ($exec) {
    echo "<script>alert('Data berhasil di-update');
           window.location='jurusan.php'</script>";
}else{
   echo "<script>alert('Data Gagal di-update');
            window.location='jurusan.php'</script>";
   }