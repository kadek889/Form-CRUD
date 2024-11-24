<?php
require 'koneksi.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--  Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Tampilkan Data Mahasiswa</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Biodata Mahasiswa
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
                                
                                    <div class="mb-3">
                                        <label>Nama Mahasiswa :</label>
                                        <p class="form-control">
                                            <?=$mahasiswa['nama'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Email :</label>
                                        <p class="form-control">
                                            <?=$mahasiswa['email'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Phone :</label>
                                        <p class="form-control">
                                            <?=$mahasiswa['phone'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Mata Kuliah :</label>
                                        <p class="form-control">
                                            <?=$mahasiswa['matkul'];?>
                                        </p>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>NIM tidak Ditemukan...</h4>";
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

