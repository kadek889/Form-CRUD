<?php
    session_start();
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

    <title>CRUD</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('pesan.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Biodata Mahasiswa
                            <a href="tambah-siswa.php" class="btn btn-primary start">Tambah</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-success table-striped">
                            <thead>
                                <tr>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Mata Kuliah</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM tbl_siswa";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) >0)
                                    {
                                        foreach($query_run as $mahasiswa)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $mahasiswa['nim']; ?></td>
                                                <td><?= $mahasiswa['nama']; ?></td>
                                                <td><?= $mahasiswa['email']; ?></td>
                                                <td><?= $mahasiswa['phone']; ?></td>
                                                <td><?= $mahasiswa['matkul']; ?></td>
                                                <td>
                                                    <a href="tampil-siswa.php?nim=<?= $mahasiswa['nim']; ?>" class="btn btn-info btn-sm">Tampilkan</a>
                                                    <a href="edit-siswa.php?nim=<?= $mahasiswa['nim']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="rumus.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_student" value="<?= $mahasiswa['nim']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data?')">HAPUS</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> Belum Ada Data </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>