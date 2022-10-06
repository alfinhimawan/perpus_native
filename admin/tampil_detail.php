<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil detail</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/stylesheet_tampil.css">
</head>
<body>
<?php
include "header_admin.php";
?>
<br></br>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center mt-2 mb-3">Detail Peminjaman Buku<h3>
                    <form action="tampil_detail.php" method="post">
                        <input type="text" name="cari" class="form-control mb-3" placeholder="Masukkan keyword pencarian">
                    </form>
        </div>
        <div class="card-body">
            <table class="table table-bordered fs-5 fw-light text-center">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Nama Kelas</th>
                    <th scope="col">Nama Buku</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Tanggal Pinjam</th>
                    <th scope="col">Tanggal Kembali</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                include "../user/koneksi.php";
                global $conn;
                if (isset($_POST["cari"])) {
                    // jika ada keyword pencarian
                    $cari=$_POST['cari'];
                    $query_detail= mysqli_query($conn,"select * from detail_peminjaman_buku join peminjaman_buku on detail_peminjaman_buku.id_peminjaman_buku=peminjaman_buku.id_peminjaman_buku join siswa on siswa.id_siswa=peminjaman_buku.id_siswa join kelas on kelas.id_kelas=siswa.id_kelas join buku on buku.id_buku=detail_peminjaman_buku.id_buku where detail_peminjaman_buku.id_detail_peminjaman_buku like '%$cari%' or siswa.nama_siswa like '%$cari%' or kelas.nama_kelas like '%$cari%' or buku.nama_buku like '%$cari%' ");
                }else{
                    //jika tidak ada keyword pencarian
                    $query_detail= mysqli_query($conn,"select * from detail_peminjaman_buku join peminjaman_buku on detail_peminjaman_buku.id_peminjaman_buku=peminjaman_buku.id_peminjaman_buku join siswa on siswa.id_siswa=peminjaman_buku.id_siswa join kelas on kelas.id_kelas=siswa.id_kelas join buku on buku.id_buku=detail_peminjaman_buku.id_buku");
                }
                $no=0;
                while($data_detail= mysqli_fetch_array($query_detail)) {
                    $no++;?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?php echo $data_detail["nama_siswa"]; ?></td>
                        <td><?php echo $data_detail["nama_kelas"]; ?></td>
                        <td><?php echo $data_detail["nama_buku"]; ?></td>
                        <td><img src="<?php echo "../foto_buku/".$data_detail['foto']; ?>" width='100' height='150'></td>
                        <td><?php echo $data_detail["qty"]; ?></td>
                        <td><?php echo $data_detail["tanggal_pinjam"]; ?></td>
                        <td><?php echo $data_detail["tanggal_kembali"]; ?></td>
                        <td> <a href="ubah_detail.php?id_detail_peminjaman_buku=<?=$data_detail['id_detail_peminjaman_buku']?>" class="btn btn-success">Ubah</a>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
            <a href="detail_peminjaman_buku.php" type="button" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>