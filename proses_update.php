<?php
//menangkap value dari form
include "class_mhs.php";
$cmhs = new mahasiswa();

$data = array(
    'nim'           => $_POST['nim'],
    'nama_mhs'      => $_POST['nama_mhs'],
    'kode_jurusan'  => $_POST['jurusan'],
    'jenis_kelamin' => $_POST['gender'],
    'alamat'        => $_POST['alamat'],
    'no_hp'         => $_POST['no_hp'],
    'email'         => $_POST['email'],
    'dosen_wali'    => $_POST['dosen_wali']
);

        $exec = $cmhs->update_data($data);
        if ($exec) {
            echo "<script>alert('Data berhasil di-update');
                window.location='cari_mahasiswa.php'</script>";
        }else{
            echo "<script>alert('Data Gagal di-update');
                window.location='cari_mahasiswa.php'</script>";
        }
    



