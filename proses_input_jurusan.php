<?php
// menangkap value dari form
include "class_jurusan.php";
$cjrs = new jurusan();

$data = array(
    'kode_jurusan'      => $_POST['kode_jurusan'],
    'nama_jurusan'      => $_POST['nama_jurusan'],
);


$exec = $cjrs->tambah_data($data);

//cek proses simpan data
if ($exec) {
    echo "<script>alert('Data berhasil di-update');
           window.location='jurusan.php'</script>";
}else{
   echo "<script>alert('Data Gagal di-update');
            window.location='jurusan.php'</script>";
   }
?>