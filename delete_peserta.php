<?php
//menangkap value dari form
$nim = $_GET['nim'];
include "class_peserta.php";
$cpsr = new peserta();

$exec = $cpsr->hapus_data($nim);

//cek proses simpan data
if ($exec) {
    echo "<script>alert('Data berhasil di-update');
           window.location='cari_peserta.php'</script>";
}else{
   echo "<script>alert('Data Gagal di-update');
            window.location='cari_peserta.php'</script>";
   }