<?php
include "class_ukm.php";
$cukm = new ukm();

$data = array(
    'kode_ukm'      => $_POST['kode_ukm'],
    'nama_ukm'      => $_POST['nama_ukm'],
    'pembina'      => $_POST['pembina'],
);


$exec = $cukm->tambah_data($data);

//cek proses simpan data
if($exec){
    echo "<script>alert('Data berhasil disimpan');
    window.location=ukm.php</script>";
}else{
    echo "<script>alert('Data gagal disimpan');
    window.location=ukm.php</script>";
}

?>