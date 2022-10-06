<?php
if($_POST){
    $id_siswa=$_POST['id_siswa'];
    $tgl_pinjam=$_POST['tanggal_pinjam'];
    $tgl_kembali=$_POST['tanggal_kembali'];
    if(empty($id_siswa)){
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='peminjaman_buku.php';</script>";

    } elseif(empty($tgl_pinjam)){
        echo "<script>alert('tanggal pinjam tidak boleh kosong');location.href='peminjaman_buku.php';</script>";
    } elseif(empty($tgl_kembali)){
        echo "<script>alert('tanggal kembali tidak boleh kosong');location.href='peminjaman_buku.php';</script>";
    } else {
        include "../user/koneksi.php";
        global $conn;
        $insert=mysqli_query($conn,"insert into peminjaman_buku (id_siswa,tgl_pinjam, tgl_kembali) value ('".$id_siswa."','".$tgl_pinjam."','".$tgl_kembali."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambah data peminjaman');location.href='tampil_peminjaman.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan data peminjaman');location.href='tampil_peminjaman.php';</script>";
        }
    }
}
?>