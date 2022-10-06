<?php

include '../user/koneksi.php';
global $conn;
if($_POST){
    $nama_kelas=$_POST['nama_kelas'];
    $kelompok=$_POST['kelompok'];
    $wali_kelas=$_POST['wali_kelas'];
    if(empty($nama_kelas)){
        echo "<script>alert('nama kelas tidak boleh kosong');location.href='tambah_kelas.php';</script>";

    } elseif(empty($kelompok)){
        echo "<script>alert('kelompok tidak boleh kosong');location.href='tambah_kelas.php';</script>";
    }elseif(empty($wali_kelas)){
        echo "<script>alert('wali_kelas tidak boleh kosong');location.href='tambah_kelas.php';</script>";
    } else {
        include "../user/koneksi.php";
        $insert=mysqli_query($conn,"insert into kelas (nama_kelas, kelompok, wali_kelas) value ('".$nama_kelas."','".$kelompok."','".$wali_kelas."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan kelas');location.href='tampil_kelas.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan kelas');location.href='tambah_kelas.php';</script>";
        }
    }
}
?>
