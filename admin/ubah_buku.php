<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah buku</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<?php
include "header_admin.php";
include "../user/koneksi.php";
global $conn;
$qry_get_buku=mysqli_query($conn, "select * from buku where id_buku ='".$_GET['id_buku']."'");
$dt_buku=mysqli_fetch_array($qry_get_buku);
?>
<br></br>
<div class="container">
    <div class="row content">
        <div class="col-md-6 mb-3">
            <img src="./images/ubah_buku-01.jpg" class="image-fluid" alt="image" width="100%" height="100%"/>
        </div>
        <div class="col-md-6">
            <h3 class="mb-2 text-center">Ubah Buku</h3>
            <form action="proses_ubah_buku.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id_buku" value="<?=$dt_buku ['id_buku'] ?>">
                <div class="row g-3 mb-2">
                    <!-- Nama buku -->
                    <div class="col-md">
                        <label class="form-label">Nama Buku :</label>
                        <input type="text" name="nama_buku" class="form-control form" value="<?=$dt_buku ['nama_buku'] ?>" placeholder="Masukkan Nama Buku" required>
                    </div>
                    <!-- Pengarang buku -->
                    <div class="col-md">
                        <label class="form-label">Pengarang Buku :</label>
                        <input type="text" name="pengarang" class="form-control form" value="<?=$dt_buku ['pengarang'] ?>" placeholder="Masukkan Nama Pengarang Buku" required>
                    </div>
                </div>
                <!-- deskripsi buku -->
                <div class="mb-2">
                    <label class="form-label">Deskripsi Buku :</label>
                    <textarea name="deskripsi" class="form-control textarea" rows="4"  placeholder="Masukkan Deskripsi Buku" required><?=$dt_buku ['deskripsi'] ?></textarea>
                </div>
                <!-- Foto buku -->
                <div class="mb-4">
                    <label for="formFile" class="form-label">Foto Buku :</label>
                    <br>
                    <img src="../foto_buku/<?php echo $dt_buku['foto']; ?>" width="100px">
                    <input class="form-control file my-2" type="file" name="foto">
                </div>
                <input type = "submit" name ="simpan" value ="Ubah Buku" class = "btn btn-primary">
            </form>
        </div>
    </div>

</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>