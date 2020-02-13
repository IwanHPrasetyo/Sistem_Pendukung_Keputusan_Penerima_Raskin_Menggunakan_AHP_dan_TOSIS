<?php
include_once "koneksi.php";
//session_start();

$NIK = $_POST['NIK'];
$Nama = $_POST['Nama'];
$Alamat = $_POST['Alamat'];
$JenisKelamin = $_POST['JenisKelamin'];
$Umur = $_POST['Umur'];
$Pendidikan = $_POST['Pendidikan'];
$Pekerjaan = $_POST['Pekerjaan'];
$JumlahKeluarga = $_POST['JumlahKeluarga'];
$Rumah = $_POST['Rumah'];
$LuasRumah = $_POST['LuasRumah'];
$LuasTanah = $_POST['LuasTanah'];
$JanisLantai = $_POST['JanisLantai'];
$JanisDinding = $_POST['JanisDinding'];
$JanisAtap = $_POST['JanisAtap'];
$FasilitasToilet = $_POST['FasilitasToilet'];
$PembuanganToilet = $_POST['PembuanganToilet'];

$Nilai_Pendidikan = 0;
$Nilai_Pekerjaan = 0;
$Nilai_Rumah = 0;
$Nilai_LuasRumah = 0;
$Nilai_LuasTanah = 0;
$Nilai_JenisLantai = 0;
$Nilai_JenisDinding = 0;
$Nilai_JenisAtap = 0;
$Nilai_JenisToilet = 0;
$Nilai_JenisPembuangan = 0;

//Kondisi Penilaiain Pendidikan
if ($Pendidikan == "Tidak Sekolah") {
    $Nilai_Pendidikan = 5;
} elseif ($Pendidikan == "SD") {
    $Nilai_Pendidikan = 4;
} elseif ($Pendidikan == "SMP") {
    $Nilai_Pendidikan = 3;
} elseif ($Pendidikan == "SMA") {
    $Nilai_Pendidikan = 2;
} elseif ($Pendidikan == "Sarjana") {
    $Nilai_Pendidikan = 1;
}

//Kondisi Penilaian Pekerjaan

if ($Pekerjaan == "Petani") {
    $Nilai_Pekerjaan = 5;
} else if ($Pekerjaan == "Pekerja Bangunan") {
    $Nilai_Pekerjaan = 4;
} else if ($Pekerjaan == "Peternak") {
    $Nilai_Pekerjaan = 3;
} else if ($Pekerjaan == "Pedagang") {
    $Nilai_Pekerjaan = 2;
} else if ($Pekerjaan == "PNS") {
    $Nilai_Pekerjaan = 1;
}

//Kondisi Fasilitas Rumah
if ($Rumah == "Kontrak") {
    $Nilai_Rumah = 5;
} elseif ($Rumah == "Milik Sendiri") {
    $Nilai_Rumah = 1;
}

//Kondisi Luas Rumah
if ($LuasRumah >= 1 && $LuasRumah <= 20) {
    $Nilai_LuasRumah = 5;
} elseif ($LuasRumah >= 21 && $LuasRumah <= 40) {
    $Nilai_LuasRumah = 4;
} elseif ($LuasRumah >= 41 && $LuasRumah <= 50) {
    $Nilai_LuasRumah = 3;
} elseif ($LuasRumah >= 51 && $LuasRumah <= 80) {
    $Nilai_LuasRumah = 2;
} elseif ($LuasRumah > 80) {
    $Nilai_LuasRumah = 1;
}

//Kondisi Luas Tanah
if ($LuasTanah >= 0 && $LuasTanah <= 99) {
    $Nilai_LuasTanah = 5;
} elseif ($LuasTanah >= 100 && $LuasTanah <= 199) {
    $Nilai_LuasTanah = 4;
} elseif ($LuasTanah >= 200 && $LuasTanah <= 299) {
    $Nilai_LuasTanah = 3;
} elseif ($LuasTanah >= 300 && $LuasTanah <= 399) {
    $Nilai_LuasTanah = 2;
} elseif ($LuasTanah >= 400) {
    $Nilai_LuasTanah = 1;
}

//Kondisi Jenis Lantai
if ($JanisLantai == "Tanah") {
    $Nilai_JenisLantai = 3;
} elseif ($JanisLantai == "Semen/Bata Merah") {
    $Nilai_JenisLantai = 2;
} elseif ($JanisLantai == "Keramik") {
    $Nilai_JenisLantai = 1;
}

//Kondisi Jenis Dinding
if ($JanisDinding == "Anyaman Bambu") {
    $Nilai_JenisDinding = 3;
} elseif ($JanisDinding == "Tembok Bata") {
    $Nilai_JenisDinding = 2;
} elseif ($JanisDinding == "Tembok Semen") {
    $Nilai_JenisDinding = 1;
}

//Kondisi Jenis Atap
if ($JanisAtap == "Seng") {
    $Nilai_JenisAtap = 4;
} elseif ($JanisAtap == "Asbes") {
    $Nilai_JenisAtap = 3;
} elseif ($JanisAtap == "Genteng") {
    $Nilai_JenisAtap = 2;
} elseif ($JanisAtap == "Beton") {
    $Nilai_JenisAtap = 1;
}

//Kondisi Fasilitas Toilet
if ($FasilitasToilet == "Bersama") {
    $Nilai_JenisToilet = 2;
} elseif ($FasilitasToilet == "Milik Sendiri") {
    $Nilai_JenisToilet = 1;
}

//Kondisi Pembuangan Toilet
if ($PembuanganToilet == "Kolam/Sawah/Sungai/Danau") {
    $Nilai_JenisPembuangan = 3;
} elseif ($PembuanganToilet == "Lubang Tanah") {
    $Nilai_JenisPembuangan = 2;
} elseif ($PembuanganToilet == "Tangki") {
    $Nilai_JenisPembuangan = 1;
}

echo $Pekerjaan;

$sql = mysqli_query($conn, "insert into tb_penduduk values ('$NIK','$Nama','$Alamat','$JenisKelamin'
            ,'$Umur','$Pendidikan','$Pekerjaan','$JumlahKeluarga','$Rumah','$LuasRumah'
            ,'$LuasTanah','$JanisLantai','$JanisDinding','$JanisAtap','$FasilitasToilet','$PembuanganToilet')") or die(mysqli_error());

if ($sql) {

  $sql1 = mysqli_query($conn, "insert into tb_nilai_penduduk values ('$NIK','$Nilai_Pekerjaan','$JumlahKeluarga','$Nilai_Rumah','$Nilai_LuasRumah'
            ,'$Nilai_LuasTanah','$Nilai_JenisLantai','$Nilai_JenisDinding','$Nilai_JenisAtap','$Nilai_JenisToilet','$Nilai_JenisPembuangan')") or die(mysqli_error());


    echo "
      <script>
        alert('Data Berhasil Ditambahkan');
        window.location = '../Admin/pages/tabel-penduduk.php';
      </script>
      ";

} elseif (!$sql) {

    echo "
            <script>
              alert('Data Sudah Ditambahkan');
              window.location = '../Admin/pages/form-penduduk.php';
            </script>
            ";

}
