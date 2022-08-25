<html>
    <head>
        <title>Input Jurusan</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body style="background-color: #E9DAC1">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark pb-3 pt-3">
  <div class="container-fluid">
    <a class="navbar-brand">Data Jurusan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="jurusan.php">Data Jurusan</a>
        </li>
      </ul>
    </div>
</nav>
    <!-- Akhir Navbar -->

        <form action="proses_input_jurusan.php" method="POST">
            <fieldset>
                <legend>Form Input Data Jurusan</legend>
                <table class="table">
                    <tr>
                        <td>Kode Jurusan</td>
                        <td>:</td>
                        <td><input type="text" name="kode_jurusan"></td>
                    </tr>
                    <tr>
                        <td>Nama Jurusan</td>
                        <td>:</td>
                        <td><input type="text" name="nama_jurusan"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" value="Simpan"> <input type="button" value="cancel"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
        <h2>Data Jurusan</h2>
        <table class="table">
            <tr>
                <th>Kode Jurusan</th>
                <th>Nama Jurusan</th>
            </tr>
            <?php
                include "class_jurusan.php";
                $cjrs = new jurusan();
                $datas = $cjrs->tampil_data();

                foreach($datas as $data){
            ?>
            <tr>
                <td><?php echo $data['kode_jurusan'] ?></td>
                <td><?php echo $data['nama_jurusan'] ?></td>
                <td>
                    <a href="edit_jurusan.php?kode_jurusan=<?php echo $data['kode_jurusan'] ?>"><button>Edit</button></a>
                    <a href="delete_jurusan.php?kode_jurusan=<?php echo $data['kode_jurusan'] ?>"><button>Delete</button></a>
                </td>
            </tr>
            <?php } ?>
        </table>




          <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>