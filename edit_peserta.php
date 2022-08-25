<?php
// menangkang value data
$nim = $_GET['nim'];
include "class_peserta.php";
$cpsr = new peserta();
$data = $cpsr->edit($nim);
?>

<html>
    <head>
        <title>Edit Peserta</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body style="background-color: #E9DAC1">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark pb-3 pt-3">
  <div class="container-fluid">
    <a class="navbar-brand">Data UKM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ukm.php">Data UKM</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cari_peserta.php">Cari Peserta</a>
        </li>
      </ul>
    </div>
</nav>
    <!-- Akhir Navbar -->

        <form action="proses_update_peserta.php" method="POST">
            <fieldset>
                <legend>Form Input Data UKM</legend>
                <table class="table">
                    <tr>
                        <td>NIM(Nomor Induk Mahasiswa</td>
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
                        <td>UKM</td>
                        <td>:</td>
                        <td><input type="text" name="ukm" value=<?php echo $data['ukm'] ?>></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" value="Simpan"> <input type="button" value="cancel"></td>
                    </tr>
                </table>

            </fieldset>
        </form>
        
          <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>