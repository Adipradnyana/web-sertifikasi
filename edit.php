<?php
$nim = $_GET['nim'];
include "class_mhs.php";
$cmhs = new mahasiswa();
$data = $cmhs->edit($nim)
?>

<html>
    <head>
        <title>Update Mahasiswa</title>
    </head>

    <body>
        <form action="proses_update.php" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Form update biodata Mahasiswa</legend>
                <b>Lengkapi biodata dengan benar</b>
                <table>
                    <tr>
                        <td>NIM (Nomor Induk Mahasiswa)</td>
                        <td>:</td>
                        <td><input type="text" name="nim" value=<?php echo $data['nim'] ?>></td>
                    </tr>
                    <tr>
                        <td>Nama Mahasiswa</td>
                        <td>:</td>
                        <td><input type="text" name="nama_mhs" value=<?php echo $data['nama_mhs'] ?>></td>
                    </tr>
                    <tr>
                        <td>Kode Jurusan</td>
                        <td>:</td>
                        <td>
                            <select name="jurusan">
                              <option value="J01">Sistem Komputer</option>
                              <option value="J02">Menajemen Informatika</option>
                              <option value="J03">Sistem Informasi</option>
                              <option value="J04">Teknologi Informasi</option>
                              <option value="J05">Bisnis Digital</option> 
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis kelamin</td>
                        <td>:</td>
                        <td>
                            <?php if($data['gender']==1) { ?>
                                <input type="radio" name="gender" value="1" checked>Laki - laki
                                <input type="radio" name="gender" value="0">Perempuan
                            <?php } else { ?>
                                <input type="radio" name="gender" value="1">Laki - laki
                            <input type="radio" name="gender" value="0" checked>Perempuan
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" name="alamat" value=<?php echo $data['alamat'] ?>></td>
                    </tr>
                    <tr>
                        <td>No. HP</td>
                        <td>:</td>
                        <td><input type="number" name="no_hp" value=<?php echo $data['no_hp'] ?>></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="email" name="email" value=<?php echo $data['email'] ?>></td>
                    </tr>
                    <tr>
                        <td>Dosen Wali</td>
                        <td>:</td>
                        <td><input type="text" name="dosen_wali" value=<?php echo $data['dosen_wali'] ?>></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" value="Simpan"> <input type="button" value="cancel"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>