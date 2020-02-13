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


                                <?php
                                
                                error_reporting(E_ALL^(E_NOTICE|E_WARNING));
                                $query1     = mysqli_query($conn, "SELECT * FROM tb_perbandingan_kriteria where Id='1'");
                                $query2     = mysqli_query($conn, "SELECT * FROM tb_perbandingan_kriteria where Id='2'");
                                $query3     = mysqli_query($conn, "SELECT * FROM tb_perbandingan_kriteria where Id='3'");
                                $query4     = mysqli_query($conn, "SELECT * FROM tb_perbandingan_kriteria where Id='4'");
                                $query5     = mysqli_query($conn, "SELECT * FROM tb_perbandingan_kriteria where Id='5'");
                                $query6     = mysqli_query($conn, "SELECT * FROM tb_perbandingan_kriteria where Id='6'");
                                $query7     = mysqli_query($conn, "SELECT * FROM tb_perbandingan_kriteria where Id='7'");
                                $query8     = mysqli_query($conn, "SELECT * FROM tb_perbandingan_kriteria where Id='8'");
                                $query9     = mysqli_query($conn, "SELECT * FROM tb_perbandingan_kriteria where Id='9'");
                                $query10    = mysqli_query($conn, "SELECT * FROM tb_perbandingan_kriteria where Id='10'");
                                
                                $b1     = mysqli_fetch_array($query1);
                                $b2     = mysqli_fetch_array($query2);
                                $b3     = mysqli_fetch_array($query3);
                                $b4     = mysqli_fetch_array($query4);
                                $b5     = mysqli_fetch_array($query5);
                                $b6     = mysqli_fetch_array($query6);
                                $b7     = mysqli_fetch_array($query7);
                                $b8     = mysqli_fetch_array($query8);
                                $b9     = mysqli_fetch_array($query9);
                                $b10    = mysqli_fetch_array($query10);

                                if (isset($_POST['simpan'])) {
                                    $nm_banding1 = $_POST['nm_banding1'];
                                    $nm_banding2 = $_POST['nm_banding2'];
                                    $nm_banding3 = $_POST['nm_banding3'];
                                    $nm_banding4 = $_POST['nm_banding4'];
                                    $nm_banding5 = $_POST['nm_banding5'];
                                    $nm_banding6 = $_POST['nm_banding6'];
                                    $nm_banding7 = $_POST['nm_banding7'];
                                    $nm_banding8 = $_POST['nm_banding8'];
                                    $nm_banding9 = $_POST['nm_banding9'];
                                    $nm_banding10 = $_POST['nm_banding10'];
                                    $nm_banding11 = $_POST['nm_banding11'];
                                    $nm_banding12 = $_POST['nm_banding12'];
                                    $nm_banding13 = $_POST['nm_banding13'];
                                    $nm_banding14 = $_POST['nm_banding14'];
                                    $nm_banding15 = $_POST['nm_banding15'];
                                    $nm_banding16 = $_POST['nm_banding16'];
                                    $nm_banding17 = $_POST['nm_banding17'];
                                    $nm_banding18 = $_POST['nm_banding18'];
                                    $nm_banding19 = $_POST['nm_banding19'];
                                    $nm_banding20 = $_POST['nm_banding20'];
                                    $nm_banding21 = $_POST['nm_banding21'];
                                    $nm_banding22 = $_POST['nm_banding22'];
                                    $nm_banding23 = $_POST['nm_banding23'];
                                    $nm_banding24 = $_POST['nm_banding24'];
                                    $nm_banding25 = $_POST['nm_banding25'];
                                    $nm_banding26 = $_POST['nm_banding26'];
                                    $nm_banding27 = $_POST['nm_banding27'];
                                    $nm_banding28 = $_POST['nm_banding28'];
                                    $nm_banding29 = $_POST['nm_banding29'];
                                    $nm_banding30 = $_POST['nm_banding30'];
                                    $nm_banding31 = $_POST['nm_banding31'];
                                    $nm_banding32 = $_POST['nm_banding32'];
                                    $nm_banding33 = $_POST['nm_banding33'];
                                    $nm_banding34 = $_POST['nm_banding34'];
                                    $nm_banding35 = $_POST['nm_banding35'];
                                    $nm_banding36 = $_POST['nm_banding36'];
                                    $nm_banding37 = $_POST['nm_banding37'];
                                    $nm_banding38 = $_POST['nm_banding38'];
                                    $nm_banding39 = $_POST['nm_banding39'];
                                    $nm_banding40 = $_POST['nm_banding40'];
                                    $nm_banding41 = $_POST['nm_banding41'];
                                    $nm_banding42 = $_POST['nm_banding42'];
                                    $nm_banding43 = $_POST['nm_banding43'];
                                    $nm_banding44 = $_POST['nm_banding44'];
                                    $nm_banding45 = $_POST['nm_banding45'];
                                }
                                
                                //Mengambil Nilai Perbandingan Database
                                $k1  = $b1['Nilai_Banding'];
                                $k2  = $b2['Nilai_Banding'];
                                $k3  = $b3['Nilai_Banding'];
                                $k4  = $b4['Nilai_Banding'];
                                $k5  = $b5['Nilai_Banding'];
                                $k6  = $b6['Nilai_Banding'];
                                $k7  = $b7['Nilai_Banding'];
                                $k8  = $b8['Nilai_Banding'];
                                $k9  = $b9['Nilai_Banding'];
                                $k10 = $b10['Nilai_Banding'];

                                // perhitungan baris dan kolom
                                // baris Pekerjaan
                                $bk11 = $k1;
                                $bk12 = $nm_banding1;
                                $bk13 = $nm_banding2;
                                $bk14 = $nm_banding3;
                                $bk15 = $nm_banding4;
                                $bk16 = $nm_banding5;
                                $bk17 = $nm_banding6;
                                $bk18 = $nm_banding7;
                                $bk19 = $nm_banding8;
                                $bk110 = $nm_banding9;

                                // baris Jumlah Keluarga
                                $bk21 = round($k2/$nm_banding1,2);
                                $bk22 = $k2;
                                $bk23 = $nm_banding10;
                                $bk24 = $nm_banding11;
                                $bk25 = $nm_banding12;
                                $bk26 = $nm_banding13;
                                $bk27 = $nm_banding14;
                                $bk28 = $nm_banding15;
                                $bk29 = $nm_banding16;
                                $bk210 = $nm_banding17;

                                // baris Fasilitas Rumah
                                $bk31 = round($k3/$nm_banding2,2);
                                $bk32 = round($k3/$nm_banding3,2);
                                $bk33 = $k3;
                                $bk34 = $nm_banding18;
                                $bk35 = $nm_banding19;
                                $bk36 = $nm_banding20;
                                $bk37 = $nm_banding21;
                                $bk38 = $nm_banding22;
                                $bk39 = $nm_banding23;
                                $bk310 = $nm_banding24;

                                // baris Luas Rumah
                                $bk41 = round($k4/$nm_banding4,2);
                                $bk42 = round($k4/$nm_banding5,2);
                                $bk43 = round($k4/$nm_banding6,2);
                                $bk44 = $k4;
                                $bk45 = $nm_banding25;
                                $bk46 = $nm_banding26;
                                $bk47 = $nm_banding27;
                                $bk48 = $nm_banding28;
                                $bk49 = $nm_banding29;
                                $bk410 = $nm_banding30;

                                // baris Luas Tanah
                                $bk51 = round($k5/$nm_banding7,2);
                                $bk52 = round($k5/$nm_banding8,2);
                                $bk53 = round($k5/$nm_banding9,2);
                                $bk54 = round($k5/$nm_banding10,2);
                                $bk55 = $k5;
                                $bk56 = $nm_banding31;
                                $bk57 = $nm_banding32;
                                $bk58 = $nm_banding33;
                                $bk59 = $nm_banding34;
                                $bk510 = $nm_banding35;

                                 // baris Jenis Lantai
                                $bk61 = round($k6/$nm_banding11,2);
                                $bk62 = round($k6/$nm_banding12,2);
                                $bk63 = round($k6/$nm_banding13,2);
                                $bk64 = round($k6/$nm_banding14,2);
                                $bk65 = round($k6/$nm_banding15,2);
                                $bk66 = $k6;
                                $bk67 = $nm_banding36;
                                $bk68 = $nm_banding37;
                                $bk69 = $nm_banding38;
                                $bk610 = $nm_banding39;

                                 // baris Jenis Dinding
                                $bk71 = round($k7/$nm_banding16,2);
                                $bk72 = round($k7/$nm_banding17,2);
                                $bk73 = round($k7/$nm_banding18,2);
                                $bk74 = round($k7/$nm_banding19,2);
                                $bk75 = round($k7/$nm_banding20,2);
                                $bk76 = round($k7/$nm_banding21,2);
                                $bk77 = $k7;
                                $bk78 = $nm_banding40;
                                $bk79 = $nm_banding41;
                                $bk710 = $nm_banding42;

                                 // baris Jenis Atap
                                $bk81 = round($k8/$nm_banding22,2);
                                $bk82 = round($k8/$nm_banding23,2);
                                $bk83 = round($k8/$nm_banding24,2);
                                $bk84 = round($k8/$nm_banding25,2);
                                $bk85 = round($k8/$nm_banding26,2);
                                $bk86 = round($k8/$nm_banding27,2);
                                $bk87 = round($k8/$nm_banding28,2);
                                $bk88 = $k8;
                                $bk89 = $nm_banding43;
                                $bk810 = $nm_banding44;

                                // baris Fasilitas Toilet
                                $bk91 = round($k9/$nm_banding29,2);
                                $bk92 = round($k9/$nm_banding30,2);
                                $bk93 = round($k9/$nm_banding31,2);
                                $bk94 = round($k9/$nm_banding32,2);
                                $bk95 = round($k9/$nm_banding33,2);
                                $bk96 = round($k9/$nm_banding34,2);
                                $bk97 = round($k9/$nm_banding35,2);
                                $bk98 = round($k9/$nm_banding36,2);
                                $bk99 = $k9;
                                $bk910 = $nm_banding45;

                                // baris Jenis Pembuangan
                                $bk101 = round($k10/$nm_banding37,2);
                                $bk102 = round($k10/$nm_banding38,2);
                                $bk103 = round($k10/$nm_banding39,2);
                                $bk104 = round($k10/$nm_banding40,2);
                                $bk105 = round($k10/$nm_banding41,2);
                                $bk106 = round($k10/$nm_banding42,2);
                                $bk107 = round($k10/$nm_banding43,2);
                                $bk108 = round($k10/$nm_banding44,2);
                                $bk109 = round($k10/$nm_banding45,2);
                                $bk1010 = $k10;

                                // perhitungan jumlah kolom
                                $jk1111 = $bk11+$bk21+$bk31+$bk41+$bk51+$bk61+$bk71+$bk81+$bk91+$bk101;
                                $jk1112 = $bk12+$bk22+$bk32+$bk42+$bk52+$bk62+$bk72+$bk82+$bk92+$bk102;
                                $jk1113 = $bk13+$bk23+$bk33+$bk43+$bk53+$bk63+$bk73+$bk83+$bk93+$bk103;
                                $jk1114 = $bk14+$bk24+$bk34+$bk44+$bk54+$bk64+$bk74+$bk84+$bk94+$bk104;
                                $jk1115 = $bk15+$bk25+$bk35+$bk45+$bk55+$bk65+$bk75+$bk85+$bk95+$bk105;
                                $jk1116 = $bk16+$bk26+$bk36+$bk46+$bk56+$bk66+$bk76+$bk86+$bk96+$bk106;
                                $jk1117 = $bk17+$bk27+$bk37+$bk47+$bk57+$bk67+$bk77+$bk87+$bk97+$bk107;
                                $jk1118 = $bk18+$bk28+$bk38+$bk48+$bk58+$bk68+$bk78+$bk88+$bk98+$bk108;
                                $jk1119 = $bk19+$bk29+$bk39+$bk49+$bk59+$bk69+$bk79+$bk89+$bk99+$bk109;
                                $jk11110 = $bk110+$bk210+$bk310+$bk410+$bk510+$bk610+$bk710+$bk810+$bk910+$bk1010;

                                
                                // perhitungan Priority Weight
                                $pw11 = round($bk11/$jk1111,2);
                                $pw12 = round($bk12/$jk1112,2);
                                $pw13 = round($bk13/$jk1113,2);
                                $pw14 = round($bk14/$jk1114,2);
                                $pw15 = round($bk15/$jk1115,2);
                                $pw16 = round($bk16/$jk1116,2);
                                $pw17 = round($bk17/$jk1117,2);
                                $pw18 = round($bk18/$jk1118,2);
                                $pw19 = round($bk19/$jk1119,2);
                                $pw110 = round($bk110/$jk11110,2);


                                $pw21 = round($bk21/$jk1111,2);
                                $pw22 = round($bk22/$jk1112,2);
                                $pw23 = round($bk23/$jk1113,2);
                                $pw24 = round($bk24/$jk1114,2);
                                $pw25 = round($bk25/$jk1115,2);
                                $pw26 = round($bk26/$jk1116,2);
                                $pw27 = round($bk27/$jk1117,2);
                                $pw28 = round($bk28/$jk1118,2);
                                $pw29 = round($bk29/$jk1119,2);
                                $pw210 = round($bk210/$jk11110,2);

                                $pw31 = round($bk31/$jk1111,2);
                                $pw32 = round($bk32/$jk1112,2);
                                $pw33 = round($bk33/$jk1113,2);
                                $pw34 = round($bk34/$jk1114,2);
                                $pw35 = round($bk35/$jk1115,2);
                                $pw36 = round($bk36/$jk1116,2);
                                $pw37 = round($bk37/$jk1117,2);
                                $pw38 = round($bk38/$jk1118,2);
                                $pw39 = round($bk39/$jk1119,2);
                                $pw310 = round($bk310/$jk11110,2);

                                $pw41 = round($bk41/$jk1111,2);
                                $pw42 = round($bk42/$jk1112,2);
                                $pw43 = round($bk43/$jk1113,2);
                                $pw44 = round($bk44/$jk1114,2);
                                $pw45 = round($bk45/$jk1115,2);
                                $pw46 = round($bk46/$jk1116,2);
                                $pw47 = round($bk47/$jk1117,2);
                                $pw48 = round($bk48/$jk1118,2);
                                $pw49 = round($bk49/$jk1119,2);
                                $pw410 = round($bk410/$jk11110,2);

                                $pw51 = round($bk51/$jk1111,2);
                                $pw52 = round($bk52/$jk1112,2);
                                $pw53 = round($bk53/$jk1113,2);
                                $pw54 = round($bk54/$jk1114,2);
                                $pw55 = round($bk55/$jk1115,2);
                                $pw56 = round($bk56/$jk1116,2);
                                $pw57 = round($bk57/$jk1117,2);
                                $pw58 = round($bk58/$jk1118,2);
                                $pw59 = round($bk59/$jk1119,2);
                                $pw510 = round($bk510/$jk11110,2);

                                $pw61 = round($bk61/$jk1111,2);
                                $pw62 = round($bk62/$jk1112,2);
                                $pw63 = round($bk63/$jk1113,2);
                                $pw64 = round($bk64/$jk1114,2);
                                $pw65 = round($bk65/$jk1115,2);
                                $pw66 = round($bk66/$jk1116,2);
                                $pw67 = round($bk67/$jk1117,2);
                                $pw68 = round($bk68/$jk1118,2);
                                $pw69 = round($bk69/$jk1119,2);
                                $pw610 = round($bk610/$jk11110,2);

                                $pw71 = round($bk71/$jk1111,2);
                                $pw72 = round($bk72/$jk1112,2);
                                $pw73 = round($bk73/$jk1113,2);
                                $pw74 = round($bk74/$jk1114,2);
                                $pw75 = round($bk75/$jk1115,2);
                                $pw76 = round($bk76/$jk1116,2);
                                $pw77 = round($bk77/$jk1117,2);
                                $pw78 = round($bk78/$jk1118,2);
                                $pw79 = round($bk79/$jk1119,2);
                                $pw710 = round($bk710/$jk11110,2);

                                $pw81 = round($bk81/$jk1111,2);
                                $pw82 = round($bk82/$jk1112,2);
                                $pw83 = round($bk83/$jk1113,2);
                                $pw84 = round($bk84/$jk1114,2);
                                $pw85 = round($bk85/$jk1115,2);
                                $pw86 = round($bk86/$jk1116,2);
                                $pw87 = round($bk87/$jk1117,2);
                                $pw88 = round($bk88/$jk1118,2);
                                $pw89 = round($bk89/$jk1119,2);
                                $pw810 = round($bk810/$jk11110,2);

                                $pw91 = round($bk91/$jk1111,2);
                                $pw92 = round($bk92/$jk1112,2);
                                $pw93 = round($bk93/$jk1113,2);
                                $pw94 = round($bk94/$jk1114,2);
                                $pw95 = round($bk95/$jk1115,2);
                                $pw96 = round($bk96/$jk1116,2);
                                $pw97 = round($bk97/$jk1117,2);
                                $pw98 = round($bk98/$jk1118,2);
                                $pw99 = round($bk99/$jk1119,2);
                                $pw910 = round($bk910/$jk11110,2);

                                $pw101 = round($bk101/$jk1111,2);
                                $pw102 = round($bk102/$jk1112,2);
                                $pw103 = round($bk103/$jk1113,2);
                                $pw104 = round($bk104/$jk1114,2);
                                $pw105 = round($bk105/$jk1115,2);
                                $pw106 = round($bk106/$jk1116,2);
                                $pw107 = round($bk107/$jk1117,2);
                                $pw108 = round($bk108/$jk1118,2);
                                $pw109 = round($bk109/$jk1119,2);
                                $pw1010 = round($bk1010/$jk11110,2);

                                // perhitungan jumlah baris PW
                                $jb111 = $pw11+$pw12+$pw13+$pw14+$pw15+$pw16+$pw17+$pw18+$pw19+$pw110;
                                $jb211 = $pw21+$pw22+$pw23+$pw24+$pw25+$pw26+$pw27+$pw28+$pw29+$pw210;
                                $jb311 = $pw31+$pw32+$pw33+$pw34+$pw35+$pw36+$pw37+$pw38+$pw39+$pw310;
                                $jb411 = $pw41+$pw42+$pw43+$pw44+$pw45+$pw46+$pw47+$pw48+$pw49+$pw410;
                                $jb511 = $pw51+$pw52+$pw53+$pw54+$pw55+$pw56+$pw57+$pw58+$pw59+$pw510;
                                $jb611 = $pw61+$pw62+$pw63+$pw64+$pw65+$pw66+$pw67+$pw68+$pw69+$pw610;
                                $jb711 = $pw71+$pw72+$pw73+$pw74+$pw75+$pw76+$pw77+$pw78+$pw79+$pw710;
                                $jb811 = $pw81+$pw82+$pw83+$pw84+$pw85+$pw86+$pw87+$pw88+$pw89+$pw810;
                                $jb911 = $pw91+$pw92+$pw93+$pw94+$pw95+$pw96+$pw97+$pw98+$pw99+$pw910;
                                $jb1011 = $pw101+$pw102+$pw103+$pw104+$pw105+$pw106+$pw107+$pw108+$pw109+$pw1010;

                                // jumlah baris di tambah kemudian dibagi 4
                                $rata112 = round($jb111/10,2);
                                $rata212 = round($jb211/10,2);
                                $rata312 = round($jb311/10,2);
                                $rata412 = round($jb411/10,2);
                                $rata512 = round($jb511/10,2);
                                $rata612 = round($jb611/10,2);
                                $rata712 = round($jb711/10,2);
                                $rata812 = round($jb811/10,2);
                                $rata912 = round($jb911/10,2);
                                $rata1012 = round($jb1011/10,2);

                                // menghitung jumlah PW baris kolom
			                    $jpw111 = round($pw11+$pw21+$pw31+$pw41+$pw51+$pw61+$pw71+$pw81+$pw91+$pw101);
			                    $jpw112 = round($pw12+$pw22+$pw32+$pw42+$pw52+$pw62+$pw72+$pw82+$pw92+$pw102);
			                    $jpw113 = round($pw13+$pw23+$pw33+$pw43+$pw53+$pw63+$pw73+$pw83+$pw93+$pw103);
			                    $jpw114 = round($pw14+$pw24+$pw34+$pw44+$pw54+$pw64+$pw74+$pw84+$pw94+$pw104);
			                    $jpw115 = round($pw15+$pw25+$pw35+$pw45+$pw55+$pw65+$pw75+$pw85+$pw95+$pw105);
			                    $jpw116 = round($pw16+$pw26+$pw36+$pw46+$pw56+$pw66+$pw76+$pw86+$pw96+$pw106);
			                    $jpw117 = round($pw17+$pw27+$pw37+$pw47+$pw57+$pw67+$pw77+$pw87+$pw97+$pw107);
			                    $jpw118 = round($pw18+$pw28+$pw38+$pw48+$pw58+$pw68+$pw78+$pw88+$pw98+$pw108);
			                    $jpw119 = round($pw19+$pw29+$pw39+$pw49+$pw59+$pw69+$pw79+$pw89+$pw99+$pw109);
                                $jpw1110 = round($pw110+$pw210+$pw310+$pw410+$pw510+$pw610+$pw710+$pw810+$pw910+$pw1010);
                                $jpw1111 = round($jb111+$jb211+$jb311+$jb411+$jb511+$jb611+$jb711+$jb811+$jb911+$jb1011);
                                $jpw1112 = round($rata112+$rata212+$rata312+$rata412+$rata512+$rata612+$rata712+$rata812+$rata912+$rata1012);


                                $maks = round(($jk1111*$rata112)+($jk1112*$rata212)+($jk1113*$rata312)+($jk1114*$rata412)+($jk1115*$rata512)+($jk1116*$rata612)+($jk1117*$rata712)+($jk1118*$rata812)+($jk1119*$rata912)+($jk11110*$rata1012),3);
                                	$i = mysqli_query($conn, "SELECT * FROM tb_kriteria ORDER BY Kode_Kriteria");
                                    $n = mysqli_num_rows($i);
                                    print_r($n);

                                            if ($n==1) {
                                                $rc = 0.00;
                                            }elseif ($n==2) {
                                                $rc = 0.00;
                                            }elseif ($n==3) {
                                                $rc = 0.58;
                                            }elseif ($n==4) {
                                                $rc = 0.90;
                                            }elseif ($n==5) {
                                                $rc = 1.12;
                                            }elseif ($n==6) {
                                                $rc = 1.24;
                                            }elseif ($n==7) {
                                                $rc = 1.32;
                                            }elseif ($n==8) {
                                                $rc = 1.41;
                                            } elseif ($n==9) {
                                                $rc = 1.45;
                                            } elseif ($n==10) {
                                                $rc = 1.49;
                                            } elseif ($n==11) {
                                                $rc = 1.51;
                                            }

                                            $ci    = round(($maks-$n)/($n-1),3);
			                                $cr    = round($ci/$rc,3);
                                            
                                            $sqlbobot1=mysqli_query($conn,"update tb_kriteria set Bobot = '".$rata112."'  where Kode_Kriteria = '1'")or die(mysqli_error());
                                            $sqlbobot2=mysqli_query($conn,"update tb_kriteria set Bobot = '".$rata212."'  where Kode_Kriteria = '2'")or die(mysqli_error());
                                            $sqlbobot3=mysqli_query($conn,"update tb_kriteria set Bobot = '".$rata312."'  where Kode_Kriteria = '3'")or die(mysqli_error());
                                            $sqlbobot4=mysqli_query($conn,"update tb_kriteria set Bobot = '".$rata412."'  where Kode_Kriteria = '4'")or die(mysqli_error());
                                            $sqlbobot5=mysqli_query($conn,"update tb_kriteria set Bobot = '".$rata512."'  where Kode_Kriteria = '5'")or die(mysqli_error());
                                            $sqlbobot6=mysqli_query($conn,"update tb_kriteria set Bobot = '".$rata612."'  where Kode_Kriteria = '6'")or die(mysqli_error());
                                            $sqlbobot7=mysqli_query($conn,"update tb_kriteria set Bobot = '".$rata712."'  where Kode_Kriteria = '7'")or die(mysqli_error());
                                            $sqlbobot8=mysqli_query($conn,"update tb_kriteria set Bobot = '".$rata812."'  where Kode_Kriteria = '8'")or die(mysqli_error());
                                            $sqlbobot9=mysqli_query($conn,"update tb_kriteria set Bobot = '".$rata912."'  where Kode_Kriteria = '9'")or die(mysqli_error());
                                            $sqlbobot10=mysqli_query($conn,"update tb_kriteria set Bobot = '".$rata1012."'  where Kode_Kriteria = '10'")or die(mysqli_error());
                                
                                ?>
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
                                                <td style='background-color: yellow;'><?php echo $bk11;?></td>
                                                <td><?php echo $bk12;?></td>
                                                <td><?php echo $bk13;?></td>
                                                <td><?php echo $bk14;?></td>
                                                <td><?php echo $bk15;?></td>
                                                <td><?php echo $bk16;?></td>
                                                <td><?php echo $bk17;?></td>
                                                <td><?php echo $bk18;?></td>
                                                <td><?php echo $bk19;?></td>
                                                <td><?php echo $bk110;?></td>                                 
                                            </tr>

                                            <tr>
                                                <th>Jumlah Keluarga</th>
                                                <td><?php echo $bk21;?></td>
                                                <td style='background-color: yellow;' ><?php echo $bk22;?></td>
                                                <td><?php echo $bk23;?></td>
                                                <td><?php echo $bk24;?></td>
                                                <td><?php echo $bk25;?></td>
                                                <td><?php echo $bk26;?></td>
                                                <td><?php echo $bk27;?></td>
                                                <td><?php echo $bk28;?></td>
                                                <td><?php echo $bk29;?></td>
                                                <td><?php echo $bk210;?></td>                                 
                                            </tr>

                                            <tr>
                                                <th>Fasilitas Rumah</th>
                                                <td><?php echo $bk31;?></td>
                                                <td><?php echo $bk32;?></td>
                                                <td style='background-color: yellow;'><?php echo $bk33;?></td>
                                                <td><?php echo $bk34;?></td>
                                                <td><?php echo $bk35;?></td>
                                                <td><?php echo $bk36;?></td>
                                                <td><?php echo $bk37;?></td>
                                                <td><?php echo $bk38;?></td>
                                                <td><?php echo $bk39;?></td>
                                                <td><?php echo $bk310;?></td>                                 
                                            </tr>

                                            <tr>
                                                <th>Luas Rumah</th>
                                                <td><?php echo $bk41;?></td>
                                                <td><?php echo $bk42;?></td>
                                                <td><?php echo $bk43;?></td>
                                                <td style='background-color: yellow;'><?php echo $bk44;?></td>
                                                <td><?php echo $bk45;?></td>
                                                <td><?php echo $bk46;?></td>
                                                <td><?php echo $bk47;?></td>
                                                <td><?php echo $bk48;?></td>
                                                <td><?php echo $bk49;?></td>
                                                <td><?php echo $bk410;?></td>                                 
                                            </tr>

                                             <tr>
                                                <th>Luas Tanah</th>
                                                <td><?php echo $bk51;?></td>
                                                <td><?php echo $bk52;?></td>
                                                <td><?php echo $bk53;?></td>
                                                <td><?php echo $bk54;?></td>
                                                <td style='background-color: yellow;'><?php echo $bk55;?></td>
                                                <td><?php echo $bk56;?></td>
                                                <td><?php echo $bk57;?></td>
                                                <td><?php echo $bk58;?></td>
                                                <td><?php echo $bk59;?></td>
                                                <td><?php echo $bk510;?></td>                                 
                                            </tr>

                                            <tr>
                                                <th>Jenis Lantai</th>
                                                <td><?php echo $bk61;?></td>
                                                <td><?php echo $bk62;?></td>
                                                <td><?php echo $bk63;?></td>
                                                <td><?php echo $bk64;?></td>
                                                <td><?php echo $bk65;?></td>
                                                <td style='background-color: yellow;'><?php echo $bk66;?></td>
                                                <td><?php echo $bk67;?></td>
                                                <td><?php echo $bk68;?></td>
                                                <td><?php echo $bk69;?></td>
                                                <td><?php echo $bk610;?></td>                                 
                                            </tr>

                                            <tr>
                                                <th>Jenis Dinding</th>
                                                <td><?php echo $bk71;?></td>
                                                <td><?php echo $bk72;?></td>
                                                <td><?php echo $bk73;?></td>
                                                <td><?php echo $bk74;?></td>
                                                <td><?php echo $bk75;?></td>
                                                <td><?php echo $bk76;?></td>
                                                <td style='background-color: yellow;'><?php echo $bk77;?></td>
                                                <td><?php echo $bk78;?></td>
                                                <td><?php echo $bk79;?></td>
                                                <td><?php echo $bk710;?></td>                                 
                                            </tr>

                                             <tr>
                                                <th>Jenis Atap</th>
                                                <td><?php echo $bk81;?></td>
                                                <td><?php echo $bk82;?></td>
                                                <td><?php echo $bk83;?></td>
                                                <td><?php echo $bk84;?></td>
                                                <td><?php echo $bk85;?></td>
                                                <td><?php echo $bk86;?></td>
                                                <td><?php echo $bk87;?></td>
                                                <td style='background-color: yellow;'><?php echo $bk88;?></td>
                                                <td><?php echo $bk89;?></td>                                 
                                                <td><?php echo $bk810;?></td>                                 
                                            </tr>
                                            
                                            <tr>
                                                <th>Fasilitas Toilet</th>
                                                <td><?php echo $bk91;?></td>
                                                <td><?php echo $bk92;?></td>
                                                <td><?php echo $bk93;?></td>
                                                <td><?php echo $bk94;?></td>
                                                <td><?php echo $bk95;?></td>
                                                <td><?php echo $bk96;?></td>
                                                <td><?php echo $bk97;?></td>
                                                <td><?php echo $bk98;?></td>
                                                <td style='background-color: yellow;'><?php echo $bk99;?></td>
                                                <td><?php echo $bk910;?></td>                                 
                                            </tr>

                                            <tr>
                                                <th>Pembuangan Toilet</th>
                                                <td><?php echo $bk101;?></td>
                                                <td><?php echo $bk102;?></td>
                                                <td><?php echo $bk103;?></td>
                                                <td><?php echo $bk104;?></td>
                                                <td><?php echo $bk105;?></td>
                                                <td><?php echo $bk106;?></td>
                                                <td><?php echo $bk107;?></td>
                                                <td><?php echo $bk108;?></td>
                                                <td><?php echo $bk109;?></td>
                                                <td style='background-color: yellow;'><?php echo $bk1010;?></td>                                 
                                            </tr> 

                                            <tr>
                                                <th>Jumlah</th>
                                                <th><?php echo $jk1111;?></th>
                                                <th><?php echo $jk1112;?></th>
                                                <th><?php echo $jk1113;?></th>
                                                <th><?php echo $jk1114;?></th>
                                                <th><?php echo $jk1115;?></th>
                                                <th><?php echo $jk1116;?></th>
                                                <th><?php echo $jk1117;?></th>
                                                <th><?php echo $jk1118;?></th>
                                                <th><?php echo $jk1119;?></th>
                                                <th><?php echo $jk11110;?></th>
                                            </tr>
                                                       

                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Data Perhitungan Prioritas Kriteria AHP</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">

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
                                                <th class="border-0">Jumlah</th>
                                                <th class="border-0">Prioritas Kriteria</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <tr>
                                                <th>Pekerjaan</th>
                                                <td><?php echo $pw11;?></td>
                                                <td><?php echo $pw12;?></td>
                                                <td><?php echo $pw13;?></td>
                                                <td><?php echo $pw14;?></td>
                                                <td><?php echo $pw15;?></td>
                                                <td><?php echo $pw16;?></td>
                                                <td><?php echo $pw17;?></td>
                                                <td><?php echo $pw18;?></td>
                                                <td><?php echo $pw19;?></td>
                                                <td><?php echo $pw110;?></td>                                 
                                                <th><?php echo $jb111;?></th>                                 
                                                <th><?php echo $rata112;?></th>                                 
                                            </tr>

                                            <tr>
                                                <th>Jumlah Keluarga</th>
                                                <td><?php echo $pw21;?></td>
                                                <td><?php echo $pw22;?></td>
                                                <td><?php echo $pw23;?></td>
                                                <td><?php echo $pw24;?></td>
                                                <td><?php echo $pw25;?></td>
                                                <td><?php echo $pw26;?></td>
                                                <td><?php echo $pw27;?></td>
                                                <td><?php echo $pw28;?></td>
                                                <td><?php echo $pw29;?></td>
                                                <td><?php echo $pw210;?></td>
                                                <th><?php echo $jb211;?></th>                                 
                                                <th><?php echo $rata212;?></th>                                  
                                            </tr>

                                            <tr>
                                                <th>Fasilitas Rumah</th>
                                                <td><?php echo $pw31;?></td>
                                                <td><?php echo $pw32;?></td>
                                                <td><?php echo $pw33;?></td>
                                                <td><?php echo $pw34;?></td>
                                                <td><?php echo $pw35;?></td>
                                                <td><?php echo $pw36;?></td>
                                                <td><?php echo $pw37;?></td>
                                                <td><?php echo $pw38;?></td>
                                                <td><?php echo $pw39;?></td>
                                                <td><?php echo $pw310;?></td>
                                                <th><?php echo $jb311;?></th>                                 
                                                <th><?php echo $rata312;?></th>                                   
                                            </tr>

                                            <tr>
                                                <th>Luas Rumah</th>
                                                <td><?php echo $pw41;?></td>
                                                <td><?php echo $pw42;?></td>
                                                <td><?php echo $pw43;?></td>
                                                <td><?php echo $pw44;?></td>
                                                <td><?php echo $pw45;?></td>
                                                <td><?php echo $pw46;?></td>
                                                <td><?php echo $pw47;?></td>
                                                <td><?php echo $pw48;?></td>
                                                <td><?php echo $pw49;?></td>
                                                <td><?php echo $pw410;?></td>
                                                <th><?php echo $jb411;?></th>                                 
                                                <th><?php echo $rata412;?></th>                                   
                                            </tr>

                                             <tr>
                                                <th>Luas Tanah</th>
                                                <td><?php echo $pw51;?></td>
                                                <td><?php echo $pw52;?></td>
                                                <td><?php echo $pw53;?></td>
                                                <td><?php echo $pw54;?></td>
                                                <td><?php echo $pw55;?></td>
                                                <td><?php echo $pw56;?></td>
                                                <td><?php echo $pw57;?></td>
                                                <td><?php echo $pw58;?></td>
                                                <td><?php echo $pw59;?></td>
                                                <td><?php echo $pw510;?></td>
                                                <th><?php echo $jb511;?></th>                                 
                                                <th><?php echo $rata512;?></th>                                   
                                            </tr>

                                            <tr>
                                                <th>Jenis Lantai</th>
                                                <td><?php echo $pw61;?></td>
                                                <td><?php echo $pw62;?></td>
                                                <td><?php echo $pw63;?></td>
                                                <td><?php echo $pw64;?></td>
                                                <td><?php echo $pw65;?></td>
                                                <td><?php echo $pw66;?></td>
                                                <td><?php echo $pw67;?></td>
                                                <td><?php echo $pw68;?></td>
                                                <td><?php echo $pw69;?></td>
                                                <td><?php echo $pw610;?></td>
                                                <th><?php echo $jb611;?></th>                                 
                                                <th><?php echo $rata612;?></th>                                   
                                            </tr>

                                            <tr>
                                                <th>Jenis Dinding</th>
                                                <td><?php echo $pw71;?></td>
                                                <td><?php echo $pw72;?></td>
                                                <td><?php echo $pw73;?></td>
                                                <td><?php echo $pw74;?></td>
                                                <td><?php echo $pw75;?></td>
                                                <td><?php echo $pw76;?></td>
                                                <td><?php echo $pw77;?></td>
                                                <td><?php echo $pw78;?></td>
                                                <td><?php echo $pw79;?></td>
                                                <td><?php echo $pw710;?></td>
                                                <th><?php echo $jb711;?></th>                                 
                                                <th><?php echo $rata712;?></th>                                   
                                            </tr>

                                             <tr>
                                                <th>Jenis Atap</th>
                                                <td><?php echo $pw81;?></td>
                                                <td><?php echo $pw82;?></td>
                                                <td><?php echo $pw83;?></td>
                                                <td><?php echo $pw84;?></td>
                                                <td><?php echo $pw85;?></td>
                                                <td><?php echo $pw86;?></td>
                                                <td><?php echo $pw87;?></td>
                                                <td><?php echo $pw88;?></td>
                                                <td><?php echo $pw89;?></td>                                 
                                                <td><?php echo $pw810;?></td>
                                                <th><?php echo $jb811;?></th>                                 
                                                <th><?php echo $rata812;?></th>                                   
                                            </tr>
                                            
                                            <tr>
                                                <th>Fasilitas Toilet</th>
                                                <td><?php echo $pw91;?></td>
                                                <td><?php echo $pw92;?></td>
                                                <td><?php echo $pw93;?></td>
                                                <td><?php echo $pw94;?></td>
                                                <td><?php echo $pw95;?></td>
                                                <td><?php echo $pw96;?></td>
                                                <td><?php echo $pw97;?></td>
                                                <td><?php echo $pw98;?></td>
                                                <td><?php echo $pw99;?></td>
                                                <td><?php echo $pw910;?></td>
                                                <th><?php echo $jb911;?></th>                                 
                                                <th><?php echo $rata912;?></th>                                  
                                            </tr>

                                            <tr>
                                                <th>Pembuangan Toilet</th>
                                                <td><?php echo $pw101;?></td>
                                                <td><?php echo $pw102;?></td>
                                                <td><?php echo $pw103;?></td>
                                                <td><?php echo $pw104;?></td>
                                                <td><?php echo $pw105;?></td>
                                                <td><?php echo $pw106;?></td>
                                                <td><?php echo $pw107;?></td>
                                                <td><?php echo $pw108;?></td>
                                                <td><?php echo $pw109;?></td>
                                                <td><?php echo $pw1010;?></td>
                                                <th><?php echo $jb1011;?></th>                                 
                                                <th><?php echo $rata1012;?></th>                                  
                                            </tr> 

                                            <tr>
                                                <th>Jumlah</th>
                                                <th><?php echo $jpw111;?></th>
                                                <th><?php echo $jpw112;?></th>
                                                <th><?php echo $jpw113;?></th>
                                                <th><?php echo $jpw114;?></th>
                                                <th><?php echo $jpw115;?></th>
                                                <th><?php echo $jpw116;?></th>
                                                <th><?php echo $jpw117;?></th>
                                                <th><?php echo $jpw118;?></th>
                                                <th><?php echo $jpw119;?></th>
                                                <th><?php echo $jpw1110;?></th>
                                                <td><?php echo $jpw1111;?></td>                                 
                                                <td><?php echo $jpw1112;?></td> 
                                            </tr>
                                                       

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>

                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card" style='width:140%;'>
                                <div class="card-body">
                                <h5 class="text-muted">Rasio Perhitungan</h5>
                                <div class="metric-value d-inline-block">
                                <h1 class="mb-1"><?php echo "λ Maks = ".$maks;?></h1>
                                <h1 class="mb-1"><?php echo 'CI = '. $ci; ?> <= 0.1</h1>
                                <h1 class="mb-1"><?php echo 'CR = '. $cr; ?></h1>
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