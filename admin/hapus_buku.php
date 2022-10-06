<?php
if($_GET['id_buku']){
    include "../user/koneksi.php";
    global $conn;
    $qry_hapus=mysqli_query($conn,"delete from buku where id_buku='".$_GET['id_buku']."'");
    if($qry_hapus){
        echo "<script>alert('Sukses hapus buku');location.href='buku_admin.php';</script>";
    } else {
        echo "<script>alert('Gagal hapus buku');location.href='buku_admin.php';</script>";
    }
}
?>