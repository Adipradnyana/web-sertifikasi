<?php
session_start();
if(!isset($_SESSION['username'])){
    echo "<script>alert('Anda Belum Login! Silahkan Login dulu');
    window.location = 'login.php';</script>";
}

?>

<html>
    <head>
        <title>Input UKM</title>

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

        <form action="proses_input_ukm.php" method="POST">
            <fieldset>
                <legend>Form Input UKM</legend>
                <table class="table">
                    <tr>
                        <td>Kode_UKM</td>
                        <td>:</td>
                        <td><input type="text" name="kode_ukm"></td>
                    </tr>
                    <tr>
                        <td>Nama UKM</td>
                        <td>:</td>
                        <td><input type="text" name="nama_ukm"></td>
                    </tr>
                    <tr>
                        <td>Pembina</td>
                        <td>:</td>
                        <td><input type="text" name="pembina"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" value="Simpan"> <input type="button" value="cancel"></td>
                    </tr>
                </table>
            </fieldset>
          </form>
        <h2>Data UKM </h2>
        <table class="table">
            <tr>
                <th>Kode UKM</th>
                <th>Nama UKM</th>
                <th>Pembina</th>
            </tr>
            <?php
                include "class_ukm.php";
                $cukm = new ukm();
                $datas = $cukm -> tampil_data();

                foreach($datas as $data){
            ?>
            <tr>
                <td><?php echo $data['kode_ukm'] ?></td>
                <td><?php echo $data['nama_ukm'] ?></td>
                <td><?php echo $data['pembina'] ?></td>
                <td>
                    <a href="delete_ukm.php?kode_ukm=<?php echo $data['kode_ukm'] ?>"><button>Delete</button></a>
                </td>
            </tr>
            <?php } ?>
        </table>

         <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>  