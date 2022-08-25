<?php
//menangkap value dari form
$nim = $_GET['nim'];
include "class_mhs.php";
$cmhs = new mahasiswa();

$exec = $cmhs->hapus_data($nim);
//cek query update
if ($exec) {
    echo "<script>alert('Data berhasil di-delete');
        window.location='cari_mahasiswa.php'</script>";
}else{
    echo "<script>alert('Data Gagal di-delete');
        window.location='cari_mahasiswa.php'</script>";
}