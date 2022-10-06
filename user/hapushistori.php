<?php 
    if($_GET['id_peminjaman_buku']){
        include "koneksi.php";
        $hapus="delete from peminjaman_buku where id_peminjaman_buku ='".$_GET['id_peminjaman_buku']."'";
        $hapus2="delete from detail_peminjaman_buku where id_peminjaman_buku ='".$_GET['id_peminjaman_buku']."'";
        $hapus3="delete from pengembalian_buku where id_peminjaman_buku ='".$_GET['id_peminjaman_buku']."'";
        
        $hasil =mysqli_query($conn,$hapus);
        $hasil2=mysqli_query($conn,$hapus2);
        $hasil3=mysqli_query($conn,$hapus3);

        
        if($hasil && $hasil2 && $hasil3){
        include "koneksi.php";
            echo "<script>alert('Sukses hapus histori');location.href='histori_peminjaman.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus histori');location.href='histori_peminjaman.php';</script>";
        }
    }
?>