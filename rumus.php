<?php
session_start();
require 'koneksi.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);
    $query = "DELETE FROM tbl_siswa WHERE nim='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['pesan'] = "Hapus data mahasiswa berhasil";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['pesan'] = "Hapus data mahasiswa tidak berhasil";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $matkul = mysqli_real_escape_string($con, $_POST['matkul']);

    $query = "UPDATE tbl_siswa SET nama='$nama', email='$email', phone='$phone', matkul='$matkul' WHERE nim='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['pesan'] = "Update siswa berhasil...";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['pesan'] = "Update siswa tidak berhasil...";
        header("Location: index.php");
        exit(0);
    }

}

if(isset($_POST['save_student']))
{
    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $matkul = mysqli_real_escape_string($con, $_POST['matkul']);

    $query = "INSERT INTO tbl_siswa (nama,email,phone,matkul) VALUES ('$nama','$email','$phone','$matkul')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['pesan'] = "Tambah siswa berhasil...";
        header("Location: tambah-siswa.php");
        exit(0);
    }
    else
    {
        $_SESSION['pesan'] = "Tambah siswa tidak berhasil...";
        header("Location: tambah-siswa.php");
        exit(0);
    }
}

?>
