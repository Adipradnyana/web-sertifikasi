<html>
    <head>
        <title>Input Dosen</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body style="background-color: #E9DAC1">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark pb-3 pt-3">
  <div class="container-fluid">
    <a class="navbar-brand">Data Dosen</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="home_user.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dosen.php">Data Dosen</a>
        </li>
      </ul>
    </div>
</nav>
    <!-- Akhir Navbar -->

        <h2>Data Dosen</h2>
        <table class="table">
            <tr>
                <th>NIDN</th>
                <th>Nama</th>
                <th>Pendidikan</th>
                <th>TGL_Lahir</th>
                <th>Gender</th>
                <th>Alamat</th>
                <th>No_Hp</th>
                <th>Email</th>
            </tr>
            <?php
                include "class_dosen.php";
                $cdsn = new dosen();
                $datas = $cdsn->tampil_data();
                
                foreach($datas as $data){
            ?>
            <tr>
                <td><?php echo $data['nidn'] ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['pendidikan'] ?></td>
                <td><?php echo $data['tgl_lahir'] ?></td>
                <td><?php echo $data['gender'] ?></td>
                <td><?php echo $data['alamat'] ?></td>
                <td><?php echo $data['no_hp'] ?></td>
                <td><?php echo $data['email'] ?></td>
            </tr>
            <?php } ?>
        </table>

         <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>