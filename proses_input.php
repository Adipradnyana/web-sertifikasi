<?php
//menangkap value dari form
include "class_mhs.php";
$cmhs = new mahasiswa();
$target_dir = "foto/";
$target_file = $target_dir . basename($_FILES['foto']['name']);
$file_type = pathinfo($target_file, PATHINFO_EXTENSION);
$file_name = basename($_FILES['foto']['name']);
$fileUpOK = 1;

$data = array(
    'nim'           => $_POST['nim'],
    'nama_mhs'      => $_POST['nama_mhs'],
    'kode_jurusan'  => $_POST['jurusan'],
    'jenis_kelamin' => $_POST['gender'],
    'alamat'        => $_POST['alamat'],
    'no_hp'         => $_POST['no_hp'],
    'foto'          => $file_name,
    'email'         => $_POST['email'],
    'dosen_wali'    => $_POST['dosen_wali']
);
 //Mengecek file yang sama
 if (file_exists($target_file)) {
    echo "Maaf, Foto dengan nama yang sama sudah ada";
    $fileUpOK = 0;
}

//mengecek ukuran / size
if ($_FILES['foto']['size'] > 500000) {
    echo "Maaf, ukuran Foto terlalu besar Max. 5 MB";
    $fileUpOK = 0;
}

//mengecek jenis file
if ($file_type != 'jpg' && $file_type != 'png' && $file_type != 'jpeg') {
    echo "Maaf, Type file tidak di izinkan";
    $fileUpOK = 0;
}

if($fileUpOK == 1){
    if(move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)){
    $exec = $cmhs->tambah_data($data);
    if ($exec) {
        echo "<script>alert('Data berhasil disimpan');
                window.location='mahasiswa.php'</script>";
        }else{
            echo "<script>alert('Data Gagal disimpan');
                    window.location='mahasiswa.php'</script>";
        }
    }
}



