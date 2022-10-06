<?php
include "header_admin.php";
global $conn;
?>

<div class="row" style="width: 90%; display:flex; justify-content: center; align-items: center; margin: 0 auto; ">
    <?php
    include "../user/koneksi.php";
    $qry_buku = mysqli_query($conn, "select * from buku");
    while ($dt_buku = mysqli_fetch_array($qry_buku)) {
        ?>
        <h3 style="margin-top: 30px;">Tampil buku </h3> 
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th> 
                <th>FOTO BUKU</th> 
                <th>NAMA BUKU</th>
                <th>PENGARANG</th>
                <th>DESKRIPSI</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "../user/koneksi.php";
            $qry_buku=mysqli_query($conn,"select * from buku");
            $no=0;
            while($data_buku=mysqli_fetch_array($qry_buku)){
            $no++;
            ?>
            <tr>              
                <td><?=$no?></td>
                <td><img src="../foto_buku/<?= $data_buku["foto"];?>" width="50px"></td>
                <td><?=$data_buku['nama_buku']?></td> 
                <td><?=$data_buku['pengarang']?></td> 
                <td><?=$data_buku['deskripsi']?></td>
                <td><a href="ubah_buku.php?id_buku=<?=$data_buku['id_buku']?>" class="btn btn-success">Ubah</a> | <a href="hapus_buku.php?id_buku=<?=$data_buku['id_buku']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>

            </tr>
            <?php 
            } 
            ?>
        </tbody>
    </table>

        <?php
    }
    ?>
    <div class="mt-3">
        <a href="tambah_buku.php" class="btn btn-primary mb-5 ms-2">+ Tambah Buku</a>
    </div>
</div>
<?php
include "footer_admin.php";
?>

