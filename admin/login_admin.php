<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if($_SESSION['status_login_admin']==true){
    header('location: home_admin.php');
}else{
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
            crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <title>LOGIN ADMIN</title>
    </head>
    <body >
    <div class="row" style="margin-top:10px;">
        <div class="col-md"></div>
        <div class="col-md rounded bg-light" style="box-shadow: 0px 0px 15px -6px rgba(0,0,0,0.51);padding:10px">
            <form action="proses_login_admin.php" method="post" enctype="multipart/form-data">
                <h3 align="center" style="font-family: 'Poppins';padding: 10px">LOGIN ADMIN PERPUS</h3>
                Email:

                <input type="email" name="email" value="" class="form-control" style="font-family: 'Poppins'">

                Password:

                <input type="password" name="password" class="form-control" style="font-family: 'Poppins'"><br>

                <center><input type="submit" name="login" class="btn " style="background-color: black; font-weight: bold; color: #ffffff" value="LOGIN"></center>

            </form>
        </div>
        <div class="col-md"></div>
    </div>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    </body>
    </html>
    <?php
}
?>