<?php
session_start();
if ($_SESSION['status_login_admin'] != true) {
    header('location: login_admin.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha38+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
        crossorigin="anonymous">
    <title></title>
</head>
<body>
<nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand " href="#">PERPUS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="home_admin.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="buku_admin.php">Data Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="tampil_siswa.php">Data Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="tampil_kelas.php">Data Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="tampil_peminjaman.php">Data Peminjaman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="tampil_pengembalian.php">Data Pengembalian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="tampil_detail.php">Detail Peminjaman Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="logout_admin.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>