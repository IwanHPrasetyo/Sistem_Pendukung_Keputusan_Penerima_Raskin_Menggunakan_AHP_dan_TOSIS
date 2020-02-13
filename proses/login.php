<?php

include_once("koneksi.php");
session_start();
session_unset();
session_destroy();
session_start();

$nik           = $_POST['nik'];
$password      = $_POST['password'];



$sql_admin   =mysqli_query($conn,"SELECT * from tb_admin where Id_Admin ='$nik' and Password ='$password'");


    if($data_admin = mysqli_fetch_array($sql_admin)){

        $_SESSION['Id']   = $nik;
        $_SESSION['Nama_Admin'] = $data_admin['Nama_Admin'];
        echo "
        <script>
          alert('Login Berhasil');
          window.location = '../Admin/';
        </script>
        ";

    }
    else{

        echo "
        <script>
          alert('Login Gagal User Belum Terdaftar');
          window.location = '../';
        </script>
        ";
    }


?>