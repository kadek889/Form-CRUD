<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta nama="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Tambah Mahasiswa</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('pesan.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Siswa
                            <a href="index.php" class="btn btn-danger float-end">KEMBALI</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="rumus.php" method="POST">

                            <div class="mb-3">
                                <label>Nama Siswa</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Mata Kuliah</label>
                                <input type="text" name="matkul" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary">SIMPAN</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

