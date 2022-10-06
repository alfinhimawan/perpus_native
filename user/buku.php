<?php 
    include "header.php";
?>
<center><h2>Daftar Buku Perpustakaan</h2></center>
<div class="row">
    <?php 
    include "koneksi.php";
    $qry_buku=mysqli_query($conn,"select * from buku");
    while($dt_buku=mysqli_fetch_array($qry_buku)){
        ?>
        <div class="col-md-3 mt-3" >
            <div class="card" >
              <img src="../foto_buku/<?=$dt_buku['foto']?>" class="card-img-top" width="305px" height="400px">
              <div class="card-body">
                <h5 class="card-title"><?=$dt_buku['nama_buku']?></h5>
                <p class="card-text"><?=substr($dt_buku['deskripsi'], 0,20)?></p>
                <a href="pinjam_buku.php?id_buku=<?=$dt_buku['id_buku']?>" class="btn"  style="background-color: #24262b; color:#fff;" >Pinjam</a>
              </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<?php 
    include "footer.php";
?>
