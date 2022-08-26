<html>
    <head>
        <title>Home</title>
        <style>
            body {
                background-image: url('img/Background 2.jpg');
            }
        </style>
         <!-- Bootstrap -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
<body>
<div class="container">
    <div class="row justify-content-center pt-5">
        <div class="col-md-7 col-lg-5">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Mahasiswa</label> <br>
                        <a class="btn btn-secondary" href="cari_mahasiswa_user.php" role="button">Cari Mahasiswa</a>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Dosen</label> <br>
                        <a class="btn btn-secondary" href="dosen_user.php" role="button">Data Dosen</a>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jurusan</label> <br>
                        <a class="btn btn-secondary" href="jurusan_user.php" role="button">Data Jurusan</a>
                    </div>
                    <div class="mb-3 pb-3">
                        <label class="form-label">UKM</label> <br>
                        <a class="btn btn-secondary" href="cari_peserta_user.php" role="button">Peserta UKM</a>
                    </div>
                    <a class="btn btn-danger" href="logout_user.php" role="button">Keluar</a>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>