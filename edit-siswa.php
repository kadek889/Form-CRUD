<?php
session_start();
require 'koneksi.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta nama="viewport" content="width=device-width, initial-scale=1">

    <!--  Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Edit Siswa</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('pesan.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Data Mahasiswa 
                            <a href="index.php" class="btn btn-danger float-end">KEMBALI</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['nim']))
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['nim']);
                            $query = "SELECT * FROM tbl_siswa WHERE nim='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $mahasiswa = mysqli_fetch_array($query_run);
                                ?>
                                <form action="rumus.php" method="POST">
                                    <input type="hidden" name="student_id" value="<?= $mahasiswa['nim']; ?>">

                                    <div class="mb-3">
                                        <label>Nama Mahasiswa :</label>
                                        <input type="text" name="nama" value="<?=$mahasiswa['nama'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email :</label>
                                        <input type="email" name="email" value="<?=$mahasiswa['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Phone :</label>
                                        <input type="text" name="phone" value="<?=$mahasiswa['phone'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Mata Kuliah :</label>
                                        <input type="text" name="matkul" value="<?=$mahasiswa['matkul'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_student" class="btn btn-primary">
                                            Update
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>NIM Tidak Ditemukan...</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
