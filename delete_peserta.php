<?php
$nim = $_GET['nim'];
include "class_peserta.php";
$cpsr = new peserta();

$exec = $cpsr->hapus_data($nim);

//cek proses simpan data
if($exec){
    echo "<script>alert('Data berhasil dihapus');
    window.location=jurusan.php</script>";
}else{
    echo "<script>alert('Data gagal dihapus');
    window.location=jurusan.php</script>";
}