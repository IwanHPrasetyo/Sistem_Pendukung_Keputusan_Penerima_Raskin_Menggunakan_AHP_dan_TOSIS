<?php
session_start();

$Id   = $_SESSION['Id'];
$Nama = $_SESSION['Nama_Admin'];

if($Id == "" || $Nama == ""){

    header("location:../");

  }
include_once("../../proses/koneksi.php");

?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RASKIN KEC Kromengan</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
      <div class="dashboard-header">
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <a class="navbar-brand" href="index.html">Sistem Penentuan Penerima Raskin</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-right-top">
                    <li class="nav-item">
                        <div id="custom-search" class="top-search-bar">
                            <input class="form-control" type="text" placeholder="Search..">
                        </div>
                    </li>

                    <li class="nav-item dropdown nav-user">
                        <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                        <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                            <div class="nav-user-info">
                                <h5 class="mb-0 text-white nav-user-name"><?php echo $Nama; ?></h5>
                                <span class="status"></span><span class="ml-2"><?php echo $Id; ?></span>
                            </div>
                            <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                            <a class="dropdown-item" href="../../"><i class="fas fa-power-off mr-2"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../"  aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="tabel-penduduk.php" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Data Penduduk</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tabel Kategori Penilaian</a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="tabel-kriteria.php">Tabel Kategori AHP</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="tabel-perhitungan-ahp.php">Tabel Bobot Kategori</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tabel Ranking</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="tabel-rangking.php">Tabel Ranking Penerima Raskin</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="tabel-penilaian.php">Tabel Penilaian</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Tabel Penilaian </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Tabel Penialain</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
               
                <div class="row">
                    <!-- ============================================================== -->
              
                    <!-- ============================================================== -->

                                  <!-- recent orders  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Data Perhitungan Kriteria AHP</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                <form action="tabel-detail-perhitungan-ahp.php" method="post">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">Kriteria</th>
                                                <th class="border-0">Pekerjaan</th>
                                                <th class="border-0">Jumlah Keluarga</th>
                                                <th class="border-0">Fasilitas Rumah</th>
                                                <th class="border-0">Luas Rumah</th>
                                                <th class="border-0">Luas Tanah</th>
                                                <th class="border-0">Jenis Lantai</th>
                                                <th class="border-0">Jenis Dinding</th>
                                                <th class="border-0">Jenis Atap</th>
                                                <th class="border-0">Fasilitas Toilet</th>
                                                <th class="border-0">Pembuangan Toilet</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <tr>
                                                <th>Pekerjaan</th>
                                                <td>1</td>
                                                <td>
                                                <select class="form-control" name="nm_banding1">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding2">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding3">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding4">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding5">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding6">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding7">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding8">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding9">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>                                 
                                            </tr>

                                            <tr>
                                                <th>Jumlah Keluarga</th>
                                                <td>0</td>
                                                <td>1</td>
                                                <td>
                                                <select class="form-control" name="nm_banding10">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding11">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding12">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding13">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding14">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding15">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding16">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding17">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>                                 
                                            </tr>

                                            <tr>
                                                <th>Fasilitas Rumah</th>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>1</td>
                                                <td>
                                                <select class="form-control" name="nm_banding18">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding19">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding20">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding21">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding22">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding23">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding24">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>                                 
                                            </tr>

                                            <tr>
                                                <th>Luas Rumah</th>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>1</td>
                                                <td>
                                                <select class="form-control" name="nm_banding25">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding26">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding27">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding28">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding29">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding30">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>                                 
                                            </tr>

                                             <tr>
                                                <th>Luas Tanah</th>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>1</td>
                                                <td>
                                                <select class="form-control" name="nm_banding31">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding32">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding33">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding34">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding35">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>                                 
                                            </tr>

                                            <tr>
                                                <th>Jenis Lantai</th>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>1</td>
                                                <td>
                                                <select class="form-control" name="nm_banding36">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding37">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding38">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding39">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>                                 
                                            </tr>

                                            <tr>
                                                <th>Jenis Dinding</th>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>1</td>
                                                <td>
                                                <select class="form-control" name="nm_banding40">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding41">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding42">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>                                 
                                            </tr>

                                             <tr>
                                                <th>Jenis Atap</th>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>1</td>
                                                <td>
                                                <select class="form-control" name="nm_banding43">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" name="nm_banding44">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select>
                                                </td>                                 
                                            </tr>
                                            
                                            <tr>
                                                <th>Fasilitas Toilet</th>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>1</td>
                                                <td><select class="form-control" name="nm_banding45">
                                                <option></option>
                                                <option value="1">1. Sama penting dengan</option>
                                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                                <option value="3">3. Sedikit lebih penting dari</option>
                                                <option value="4">4. Mendekati lebih penting dari</option>
                                                <option value="5">5. Lebih penting dari</option>
                                                <option value="6">6. Mendekati sangat penting dari</option>
                                                <option value="7">7. Sangat penting dari</option>
                                                <option value="8">8. Mendekati mutlak dari</option>
                                                <option value="9">9. Mutlak sangat penting dari</option>
                                                </select></td>                                 
                                            </tr>

                                            <tr>
                                                <th>Pembuangan Toilet</th>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>1</td>                                 
                                            </tr>
                                            

                                        <tr>
                                        <td colspan='12'>
                                        <div class="form-group" style='margin-left: 45%; margin-top:2%;'>
                                        <input class="btn btn-rounded btn-info" type="submit" name="simpan" value="Hitung Kriteria">
                                        </div>
                                        </td>
                                        </tr>       

                                        </tbody>
                                    </table>
                                    

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end recent orders  -->

                </div>
                       
                    </div>
            </div>
            
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/vendor/custom-js/jquery.multi-select.html"></script>
    <script src="../assets/libs/js/main-js.js"></script>
</body>
 
</html>