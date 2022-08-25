<?php
$kode_ukm = $_GET['kode_ukm'];
include "class_ukm.php";
$cukm = new ukm();

$exec = $cukm->hapus_data($kode_ukm);

//cek proses simpan data
if($exec){
    echo "<script>alert('Data berhasil dihapus');
    window.location=jurusan.php</script>";
}else{
    echo "<script>alert('Data gagal dihapus');
    window.location=jurusan.php</script>";
}