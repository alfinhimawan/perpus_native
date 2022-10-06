<?php
include "header_admin.php";
include "../user/koneksi.php";
error_reporting(E_ERROR | E_PARSE);

global $conn;
?>
<h2>Data Kelas</h2>
<table class="table table-hover table-striped">
    <thead>
    <th>ID Kelas</th><th>Nama Kelas</th><th>Kelompok</th><th>Aksi</th>
    </thead>
    <tbody>
    <?php
    include "../user/koneksi.php";

        ?>

    <?php

    ?>
    </tbody>
</table>
<?php
include "footer_admin.php";
?>
