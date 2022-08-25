<?php
//menangkap value dari form
$nidn = $_GET['nidn'];
include "class_dosen.php";
$cdsn = new dosen();

$exec = $cdsn->hapus_data($nidn);

//cek proses simpan data
if($exec){
    echo "<script>alert('Data berhasil dihapus');
    window.location=dosen.php</script>";
}else{
    echo "<script>alert('Data gagal dihapus');
    window.location=dosen.php</script>";
}