<?php
$kode_jurusan = $_GET['kode_jurusan'];
include "class_jurusan.php";
$cjrs = new jurusan();

$exec = $cjrs->hapus_data($kode_jurusan);

//cek proses simpan data
if($exec){
    echo "<script>alert('Data berhasil dihapus');
    window.location=jurusan.php</script>";
}else{
    echo "<script>alert('Data gagal dihapus');
    window.location=jurusan.php</script>";
}