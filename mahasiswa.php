<html>
    <head>
        <title>Input Mahasiswa</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark pb-3 pt-3">
  <div class="container-fluid">
    <a class="navbar-brand">Input Mahasiswa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mahasiswa.php">Input Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cari_mahasiswa.php">Cari Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="daftar_ukm.php">Daftar UKM</a>
        </li>
      </ul>
    </div>
</nav>

    <!-- Akhir Navbar -->
        <form action="proses_input.php" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Form input biodata Mahasiswa</legend>
                <b>Lengkapi biodata dengan benar</b>
                <table class="table">
                    <tr>
                        <td>NIM (Nomor Induk Mahasiswa)</td>
                        <td>:</td>
                        <td><input type="text" name="nim"></td>
                    </tr>
                    <tr>
                        <td>Nama Mahasiswa</td>
                        <td>:</td>
                        <td><input type="text" name="nama_mhs"></td>
                    </tr>
                    <tr>
                        <td>Kode Jurusan</td>
                        <td>:</td>
                        <td>
                            <select name="jurusan">
                              <?php
                              include "class_jurusan.php";
                              $cjrs = new jurusan();
                              $datas = $cjrs->tampil_data();
                              
                              foreach($datas as $data){
                                echo "<option value=$data[kode_jurusan]> $data[nama_jurusan]</option>";
                              }
                              ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="gender" value="1">Laki - laki <br>
                            <input type="radio" name="gender" value="0">Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" name="alamat"></td>
                    </tr>
                    <tr>
                        <td>No. HP</td>
                        <td>:</td>
                        <td><input type="number" name="no_hp"></td>
                    </tr>
                    <tr>
                        <td>Foto</td>
                        <td>:</td>
                        <td><input type="file" name="foto"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="email" name="email"></td>
                    </tr>
                    <tr>
                        <td>Dosen Wali</td>
                        <td>:</td>
                        <td><input type="text" name="dosen_wali"></td>
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