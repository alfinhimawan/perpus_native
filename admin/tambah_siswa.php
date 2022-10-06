<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<?php
include "header_admin.php";
?>
<br></br>
<div class="container">
    <div class="row content">
        <div class="col-md-6 mb-3">
            <img src="./images/Tambah_siswa-01.png" class="image-fluid" alt="image" width="100%" height="100%"/>
        </div>
        <div class="col-md-6">
            <h3 class="mb-2 text-center">Tambah Siswa</h3>
            <form action="proses_tambah_siswa.php" method="POST">
                <div class="row g-3 mb-2">
                    <!-- nama -->
                    <div class="col-md">
                        <label class="form-label">Nama siswa :</label>
                        <input type="text" name="nama_siswa" value="" placeholder="Masukkan Nama" class="form-control form" required>
                    </div>
                    <!-- tanggal lahir -->
                    <div class="col-md">
                        <label class="form-label">Tanggal Lahir :</label>
                        <input type = "date" name="tanggal_lahir" value="" class="form-control form" required>
                    </div>
                </div>
                <div class="row g-3 mb-2">
                    <!-- gender -->
                    <div class="col-md">
                        <label for="gender" class="form-label">Gender :</label>
                        <?php
                        $arr_gender=array('L'=>'Laki-laki','P'=>'Perempuan');
                        ?>
                        <select name="gender" class="form-control form" required>
                            <option></option>
                            <?php foreach ($arr_gender as $key_gender => $val_gender):?>
                                <option value="<?=$key_gender?>"><?=$val_gender?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <!-- Kelas -->
                    <div class="col-md">
                        <label class="form-label">Kelas :</label>
                        <select name="id_kelas" class="form-control form">
                            <option></option>
                            <?php
                            include "../user/koneksi.php";
                            global $conn;
                            $qry_kelas=mysqli_query($conn,"select * from kelas");
                            while($data_kelas=mysqli_fetch_array($qry_kelas)){
                                echo '<option value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <!-- alamat -->
                <div class="mb-2">
                    <label class="form-label">Alamat :</label>
                    <textarea name="alamat" class="form-control textarea" rows="4" placeholder="Masukkan Alamat" required></textarea>
                </div>
                <div class="row g-3 mb-4">
                    <!-- username -->
                    <div class="col-md">
                        <label class="form-label"> Username :</label>
                        <input type = "text" name = "username" value = "" placeholder="Masukkan Username" class = "form-control form" required>
                    </div>
                    <!-- password -->
                    <div class="col-md">
                        <label class="form-label">Password :</label>
                        <input type = "password" name ="password" value ="" placeholder="Masukkan Password" class = "form-control form" required>
                    </div>
                </div>
                <input type = "submit" name ="simpan" value ="Tambah Siswa" class = "btn btn-primary">
            </form>
        </div>

    </div>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>