<?php
include "class_jurusan.php";
$cjrs = new jurusan();
$data = array(
    'kode_jurusan'      => $_POST['kode_jurusan'],
    'nama_jurusan'      => $_POST['nama_jurusan'],
);


$exec = $cjrs->update_data($data);

//cek proses simpan data
if($exec){
    echo "<script>alert('Data berhasil disimpan');
    window.location=jurusan.php</script>";
}else{
    echo "<script>alert('Data gagal disimpan');
    window.location=jurusan.php</script>";
}

?>