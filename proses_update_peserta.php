<?php
// menangkap value dari form
include "class_peserta.php";
$cpsr= new peserta();

$data = array(
    'nim'           => $_POST['nim'],
    'nama_mhs'      => $_POST['nama_mhs'],
    'kode_jurusan'  => $_POST['jurusan'],
    'gender'        => $_POST['gender'],
    'no_hp'         => $_POST['no_hp'],
    'email'         => $_POST['email'],
    'ukm'           => $_POST['ukm'],
);


$exec = $cpsr->update_data($data);

//cek proses perbarui data
if ($exec) {
    echo "<script>alert('Data berhasil di-update');
           window.location='cari_peserta.php'</script>";
}else{
   echo "<script>alert('Data Gagal di-update');
            window.location='cari_peserta.php'</script>";
   }
?>