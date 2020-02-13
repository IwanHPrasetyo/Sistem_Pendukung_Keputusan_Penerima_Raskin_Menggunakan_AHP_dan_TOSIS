<?php  
session_start();

$Id = $_SESSION['Id'];
$Nama = $_SESSION['Nama_Admin'];

// if($Id == "" || $Nama == ""){

//     header("location:../");

//   }

include_once("koneksi.php");
// $NIK = $_POST['NIK'];
// $Nama = $_POST['Nama'];
// $Alamat = $_POST['Alamat'];
// $JenisKelamin = $_POST['JenisKelamin'];
// $Umur = $_POST['Umur'];
// $Pendidikan = $_POST['Pendidikan'];
// $Pekerjaan = $_POST['Pekerjaan'];
// $JumlahKeluarga = $_POST['JumlahKeluarga'];
// $Rumah = $_POST['Rumah'];
// $LuasRumah = $_POST['LuasRumah'];
// $LuasTanah = $_POST['LuasTanah'];
// $JanisLantai = $_POST['JanisLantai'];
// $JanisDinding = $_POST['JanisDinding'];
// $JanisAtap = $_POST['JanisAtap'];
// $FasilitasToilet = $_POST['FasilitasToilet'];
// $PembuanganToilet = $_POST['PembuanganToilet'];

// $Nilai_Pendidikan = 0;
// $Nilai_Pekerjaan = 0;
// $Nilai_Rumah = 0;
// $Nilai_LuasRumah = 0;
// $Nilai_LuasTanah = 0;
// $Nilai_JenisLantai = 0;
// $Nilai_JenisDinding = 0;
// $Nilai_JenisAtap = 0;
// $Nilai_JenisToilet = 0;
// $Nilai_JenisPembuangan = 0;

// //Kondisi Penilaiain Pendidikan
// if ($Pendidikan == "Tidak Sekolah") {
//     $Nilai_Pendidikan = 5;
// } elseif ($Pendidikan == "SD") {
//     $Nilai_Pendidikan = 4;
// } elseif ($Pendidikan == "SMP") {
//     $Nilai_Pendidikan = 3;
// } elseif ($Pendidikan == "SMA") {
//     $Nilai_Pendidikan = 2;
// } elseif ($Pendidikan == "Sarjana") {
//     $Nilai_Pendidikan = 1;
// }

// //Kondisi Penilaian Pekerjaan

// if ($Pekerjaan == "Petani") {
//     $Nilai_Pekerjaan = 5;
// } else if ($Pekerjaan == "Pekerja Bangunan") {
//     $Nilai_Pekerjaan = 4;
// } else if ($Pekerjaan == "Peternak") {
//     $Nilai_Pekerjaan = 3;
// } else if ($Pekerjaan == "Pedagang") {
//     $Nilai_Pekerjaan = 2;
// } else if ($Pekerjaan == "PNS") {
//     $Nilai_Pekerjaan = 1;
// }

// //Kondisi Fasilitas Rumah
// if ($Rumah == "Kontrak") {
//     $Nilai_Rumah = 5;
// } elseif ($Rumah == "Milik Sendiri") {
//     $Nilai_Rumah = 1;
// }

// //Kondisi Luas Rumah
// if ($LuasRumah >= 1 && $LuasRumah <= 20) {
//     $Nilai_LuasRumah = 5;
// } elseif ($LuasRumah >= 21 && $LuasRumah <= 40) {
//     $Nilai_LuasRumah = 4;
// } elseif ($LuasRumah >= 41 && $LuasRumah <= 50) {
//     $Nilai_LuasRumah = 3;
// } elseif ($LuasRumah >= 51 && $LuasRumah <= 80) {
//     $Nilai_LuasRumah = 2;
// } elseif ($LuasRumah > 80) {
//     $Nilai_LuasRumah = 1;
// }

// //Kondisi Luas Tanah
// if ($LuasTanah >= 0 && $LuasTanah <= 99) {
//     $Nilai_LuasTanah = 5;
// } elseif ($LuasTanah >= 100 && $LuasTanah <= 199) {
//     $Nilai_LuasTanah = 4;
// } elseif ($LuasTanah >= 200 && $LuasTanah <= 299) {
//     $Nilai_LuasTanah = 3;
// } elseif ($LuasTanah >= 300 && $LuasTanah <= 399) {
//     $Nilai_LuasTanah = 2;
// } elseif ($LuasTanah >= 400) {
//     $Nilai_LuasTanah = 1;
// }

// //Kondisi Jenis Lantai
// if ($JanisLantai == "Tanah") {
//     $Nilai_JenisLantai = 3;
// } elseif ($JanisLantai == "Semen/Bata Merah") {
//     $Nilai_JenisLantai = 2;
// } elseif ($JanisLantai == "Keramik") {
//     $Nilai_JenisLantai = 1;
// }

// //Kondisi Jenis Dinding
// if ($JanisDinding == "Anyaman Bambu") {
//     $Nilai_JenisDinding = 3;
// } elseif ($JanisDinding == "Tembok Bata") {
//     $Nilai_JenisDinding = 2;
// } elseif ($JanisDinding == "Tembok Semen") {
//     $Nilai_JenisDinding = 1;
// }

// //Kondisi Jenis Atap
// if ($JanisAtap == "Seng") {
//     $Nilai_JenisAtap = 4;
// } elseif ($JanisAtap == "Asbes") {
//     $Nilai_JenisAtap = 3;
// } elseif ($JanisAtap == "Genteng") {
//     $Nilai_JenisAtap = 2;
// } elseif ($JanisAtap == "Beton") {
//     $Nilai_JenisAtap = 1;
// }

// //Kondisi Fasilitas Toilet
// if ($FasilitasToilet == "Bersama") {
//     $Nilai_JenisToilet = 2;
// } elseif ($FasilitasToilet == "Milik Sendiri") {
//     $Nilai_JenisToilet = 1;
// }

// //Kondisi Pembuangan Toilet
// if ($PembuanganToilet == "Kolam/Sawah/Sungai/Danau") {
//     $Nilai_JenisPembuangan = 3;
// } elseif ($PembuanganToilet == "Lubang Tanah") {
//     $Nilai_JenisPembuangan = 2;
// } elseif ($PembuanganToilet == "Tangki") {
//     $Nilai_JenisPembuangan = 1;
// }

// echo $Pekerjaan;

// $sql = mysqli_query($conn, "insert into tb_penduduk values ('$NIK','$Nama','$Alamat','$JenisKelamin'
//             ,'$Umur','$Pendidikan','$Pekerjaan','$JumlahKeluarga','$Rumah','$LuasRumah'
//             ,'$LuasTanah','$JanisLantai','$JanisDinding','$JanisAtap','$FasilitasToilet','$PembuanganToilet')") or die(mysqli_error());

// // if ($sql) {

//   $sql1 = mysqli_query($conn, "insert into tb_nilai_penduduk values ('$NIK','$Nilai_Pekerjaan','$JumlahKeluarga','$Nilai_Rumah','$Nilai_LuasRumah'
//             ,'$Nilai_LuasTanah','$Nilai_JenisLantai','$Nilai_JenisDinding','$Nilai_JenisAtap','$Nilai_JenisToilet','$Nilai_JenisPembuangan')") or die(mysqli_error());

//   $sqlk1 	=	mysqli_query($conn,"insert into nilai_topsis value('','1','$NIK','$Nilai_Pekerjaan')")or die(mysqli_error());
//   $sqlk2 	=	mysqli_query($conn,"insert into nilai_topsis value('','2','$NIK','$JumlahKeluarga')")or die(mysqli_error());
//   $sqlk3 	=	mysqli_query($conn,"insert into nilai_topsis value('','3','$NIK','$Nilai_Rumah')")or die(mysqli_error());
//   $sqlk4 	=	mysqli_query($conn,"insert into nilai_topsis value('','4','$NIK','$Nilai_LuasRumah')")or die(mysqli_error());
//   $sqlk5 	=	mysqli_query($conn,"insert into nilai_topsis value('','5','$NIK','$Nilai_LuasTanah')")or die(mysqli_error());
//   $sqlk6 	=	mysqli_query($conn,"insert into nilai_topsis value('','6','$NIK','$Nilai_JenisLantai')")or die(mysqli_error());
//   $sqlk7 	=	mysqli_query($conn,"insert into nilai_topsis value('','7','$NIK','$Nilai_JenisDinding')")or die(mysqli_error());
//   $sqlk8 	=	mysqli_query($conn,"insert into nilai_topsis value('','8','$NIK','$Nilai_JenisAtap')")or die(mysqli_error());
//   $sqlk9 	=	mysqli_query($conn,"insert into nilai_topsis value('','9','$NIK','$Nilai_JenisToilet')")or die(mysqli_error());
//   $sqlk10 	=	mysqli_query($conn,"insert into nilai_topsis value('','10','$NIK','$Nilai_JenisPembuangan')")or die(mysqli_error());

//     echo "
//       <script>
//         alert('Data Berhasil Ditambahkan');
//         window.location = '../Admin/pages/tabel-penduduk.php';
//       </script>
//       ";

// } elseif (!$sql) {

//     echo "
//             <script>
//               alert('Data Sudah Ditambahkan');
//               window.location = '../Admin/pages/form-penduduk.php';
//             </script>
//             ";

// }
       
          
          // $sql_data_nilai 	=	mysqli_query($conn,"INSERT into data_nilai_guru_total values('$nip','$Id','$kep_sosial','$kep_belajar','$peng_sekolah','$man_sda','$kewirausahaan','$super_belajar')")or die(mysqli_error());
          // //$data_nilai       = mysqli_fetch_array($sql_data_nilai); 
          
          // $sql_jumlah_data    = mysqli_query($conn,"SELECT count(*) as Jumlah, NIK from tb_nilai_penduduk group by NIK");
          

          // while ($data_jumlah=$sql_jumlah_data->fetch_array()) {


          //         $NIK = $data_jumlah['NIK'];
                
          //         $sql_rata  = mysqli_query($conn,"SELECT NIK, AVG(K1) as K1, AVG(K2) as K2, AVG(K3) as K3, AVG(K4) as K4,AVG(K5) as K5, AVG(K6) as K6, AVG(K7) as K7, , AVG(K8) as K8, AVG(K9) as K9, AVG(K10) as K10 FROM tb_nilai_penduduk where NIK = '$NIK'")or die(mysqli_error());
          //         $data_rata = mysqli_fetch_array($sql_rata);

          //         $kep_sosial2    = $data_rata['kep_sosial'];
          //         $kep_belajar2   = $data_rata['kep_belajar'];
          //         $peng_sekolah2  = $data_rata['peng_sekolah'];
          //         $man_sda2       = $data_rata['man_sda'];
          //         $kewirausahaan2 = $data_rata['kewirausahaan'];
          //         $super_belajar2 = $data_rata['super_belajar'];

                  // $sql_nilai_penduduk=mysqli_query($conn,"Delete from tb_nilai  where NIK='$NIK'")or die(mysqli_error());
                  
                  

                  // $sql 	    =	mysqli_query($conn,"INSERT into data_nilai_guru values('$NIP','$kep_sosial2','$kep_belajar2','$peng_sekolah2','$man_sda2','$kewirausahaan2','$super_belajar2')")or die(mysqli_error());

                  // $no 	= mysqli_query($conn,"select max(id_nilai) as nilai from nilai_topsis")or die(mysqli_error());

                  // $data_no  = mysqli_fetch_array($no);

                  // $not 	= $data_no['nilai']+1;

                  // $sql_rangking=mysqli_query($conn,"Delete from tb_rangking")or die(mysqli_error());
                  // $sql_nilai_penduduk=mysqli_query($conn,"Delete from nilai_topsis where NIP='$NIP'")or die(mysqli_error());
                  
                    
                  // $sql1 	=	mysqli_query($conn,"insert into nilai_topsis value('','1','$NIP','$kep_sosial2')")or die(mysqli_error());
                  // $sql2 	=	mysqli_query($conn,"insert into nilai_topsis value('','2','$NIP','$kep_belajar2')")or die(mysqli_error());
                  // $sql3 	=	mysqli_query($conn,"insert into nilai_topsis value('','3','$NIP','$peng_sekolah2')")or die(mysqli_error());
                  // $sql4 	=	mysqli_query($conn,"insert into nilai_topsis value('','4','$NIP','$man_sda2')")or die(mysqli_error());
                  // $sql5 	=	mysqli_query($conn,"insert into nilai_topsis value('','5','$NIP','$kewirausahaan2')")or die(mysqli_error());
                  // $sql6 	=	mysqli_query($conn,"insert into nilai_topsis value('','6','$NIP','$super_belajar2')")or die(mysqli_error());

          // }

	 

spl_autoload_register(function($class){
  require_once $class.'.php';

 


});

$topsis = new Topsis();
 ?>

<!--Tampil Data Kriteria-->

<h2>Kriteria</h2>
<table border="1" cellspacing="0" width="400" height="200">
  <tr>
    <th>No</th>
    <th>Nama Kriteria</th>
    <th>Bobot</th>
  </tr>

  <?php
    $no=1;
    $kriteria = $topsis->get_data_kriteria();
    $jml_kriteria = $kriteria->rowCount();
    while ($data_kriteria = $kriteria->fetch(PDO::FETCH_ASSOC)) {
  ?>

  <tr>
    <td>K<?php echo $data_kriteria['Kode_Kriteria']; ?></td>
    <td><?php echo $data_kriteria['Nama_Kriteria']; ?></td>
    <td><?php echo $data_kriteria['Bobot']; ?></td>
  </tr>

  <?php } ?>
</table>

<br><br><hr>

<!--Tampil Data Penduduk -->
<h2>Data Nilai Penduduk</h2>
<table border="1" cellspacing="0" width="400" height="200">
  <tr>
    <th>NIK</th>
    <th>Pekerjaan</th>
    <th>Jumlah Keluarga</th>
    <th>Fasilitas Rumah</th>
    <th>Luas Rumah</th>
    <th>Luas Tanah</th>
    <th>Jenis Lantai</th>
    <th>Jenis Dindin</th>
    <th>Jenis Atap</th>
    <th>Fasilitas Toilet</th>
    <th>Pembuangan Toilet</th>
  </tr>

  <?php
    $no=1;
    $produk = $topsis->get_data_produk();
    while ($data_produk = $produk->fetch(PDO::FETCH_ASSOC)) {
  ?>
  <tr>
    <td><?php echo $data_produk['NIK']; ?></td>
    <td><?php echo $data_produk['K1']; ?></td>
    <td><?php echo $data_produk['K2']; ?></td>
    <td><?php echo $data_produk['K3']; ?></td>
    <td><?php echo $data_produk['K4']; ?></td>
    <td><?php echo $data_produk['K5']; ?></td>
    <td><?php echo $data_produk['K6']; ?></td>
    <td><?php echo $data_produk['K7']; ?></td>
    <td><?php echo $data_produk['K8']; ?></td>
    <td><?php echo $data_produk['K9']; ?></td>
    <td><?php echo $data_produk['K10']; ?></td>
  </tr>

<?php } ?>
</table>

<br><br><hr>

<h2>Produk Kriteria</h2>
<table border="1" cellspacing="0" height="200" width="600">

  <tr>
    <th rowspan="2">NIK</th>
    <th colspan="<?php echo $jml_kriteria; ?>">Kriteria</th>
  <tr>
  <?php
  $kriteria = $topsis->get_data_kriteria();
  while ($data_kriteria = $kriteria->fetch(PDO::FETCH_ASSOC)) {
  ?>
    <th>K<?php echo $data_kriteria['Kode_Kriteria']; ?></th>

  <?php } ?>
  </tr>

  <?php
  $produk = $topsis->get_data_produk();
  while ($data_produk = $produk->fetch(PDO::FETCH_ASSOC)) {
  ?>
    <tr>
      <td><center><?php echo $data_produk['NIK']; ?></center></td>
      <?php
      $nilai = $topsis->get_data_nilai_id($data_produk['NIK']);
      while ($data_nilai = $nilai->fetch(PDO::FETCH_ASSOC)) { 

//header ("location: ../Admin/pages/tabel-penduduk.php");
      	?>
        <td><center><?php echo $data_nilai['Nilai']; ?></center></td>

      <?php } ?>
    </tr>

  <?php } ?>
</table>

<br><br><hr>

<h2>Matrik Ternormalisasi</h2>
<table border="1" cellspacing="0" height="200" width="1200">

  <tr>
    <th rowspan="2">Produk</th>
    <th colspan="<?php echo $jml_kriteria; ?>">Kriteria</th>
  <tr>
  <?php
  $kriteria = $topsis->get_data_kriteria();
  while ($data_kriteria = $kriteria->fetch(PDO::FETCH_ASSOC)) {
  ?>
    <th>C<?php echo $data_kriteria['Kode_Kriteria']; ?></th>

  <?php } ?>
  </tr>

  <?php
  $produk = $topsis->get_data_produk();
  while ($data_produk = $produk->fetch(PDO::FETCH_ASSOC)) {
  ?>
    <tr>
      <td><center>K<?php echo $data_produk['NIK']; ?></center></td>
      <?php
      $nilai = $topsis->get_data_nilai_id($data_produk['NIK']);
      while ($data_nilai = $nilai->fetch(PDO::FETCH_ASSOC)) {
      $pembagi = $topsis->pembagi($data_nilai['Kode_Kriteria']);
      ?>
      <td><center><?php echo $hasil=$data_nilai['Nilai']/$pembagi; ?></center></td>

    <?php } ?>
    </tr>
  <?php  } ?>

</table>

<br><br><hr>
<!--Pembobotan-->

<h2>Pembobotan Matrik Ternormalisasi</h2>
<table border="1" cellspacing="0" height="200" width="1200">

  <tr>
    <th rowspan="2">Produk</th>
    <th colspan="<?php echo $jml_kriteria; ?>">Kriteria</th>
  <tr>
  <?php
  $kriteria = $topsis->get_data_kriteria();
  while ($data_kriteria = $kriteria->fetch(PDO::FETCH_ASSOC)) {
  ?>
      <th>C<?php echo $data_kriteria['Kode_Kriteria']; ?></th>

  <?php } ?>
  </tr>

  <?php
  $max_min=array();
  //$_hasil_pembobotan=array();

  $produk = $topsis->get_data_produk();
  while ($data_produk = $produk->fetch(PDO::FETCH_ASSOC)) {
  ?>
    <tr>
      <td><center>K<?php echo $data_produk['NIK']; ?></center></td>
      <?php

      $nilai = $topsis->get_data_nilai_id($data_produk['NIK']);
      while ($data_nilai = $nilai->fetch(PDO::FETCH_ASSOC)) {
        $pembagi = $topsis->pembagi($data_nilai['Kode_Kriteria']);
      ?>
      <td>
        <center>
          <?php
            $hasil=$data_nilai['Nilai']/$pembagi;
            // pembobotan
            $bobot=$topsis->get_data_kriteria_id($data_nilai['Kode_Kriteria']);
            while ($data_bobot = $bobot->fetch(PDO::FETCH_ASSOC)) {
              $pembobotan=$hasil*$data_bobot['Bobot'];
              echo $pembobotan;
              // $max_mins['nilai']= $data_nilai['nilai'];
              $max_mins['pembobotan']= $pembobotan;
              $max_mins['Kode_Kriteria']= $data_nilai['Kode_Kriteria'];
              $max_mins['NIK']= $data_produk['NIK'];
              array_push($max_min,$max_mins);


            }
            // end pembobotan
             //print_r($max_min);

           ?>
         </center>
       </td>
    <?php } ?>
    </tr>
  <?php  } ?>

</table>
<br><br>
<hr>

<?php
 //print_r($max_min);

foreach ($max_min as $insert_data) {
  $topsis->insert_data_max_min($insert_data['Kode_Kriteria'], $insert_data['pembobotan']);
// print_r($insert_data['Kode_Kriteria']);
}

$data_hasil_min_max=array();
$data= $topsis->min_max();
while ($data_min_max=$data->fetch(PDO::FETCH_ASSOC)){
  //print_r($data_min_max);
 $data_hasil_min_maxs['Kode_Kriteria']= $data_min_max['Kode_Kriteria'];
 $data_hasil_min_maxs['min']= $data_min_max['min'];
 $data_hasil_min_maxs['max']= $data_min_max['max'];
 array_push($data_hasil_min_max,$data_hasil_min_maxs);

}

$topsis->delete_min_max();
 //print_r($data_hasil_min_max);
// print_r($max_min);
 ?>

<h2>Min Max</h2>
 <table border="1" cellspacing="0">
   <tr>
     <th>Id Kriteria</th>
     <th>Min</th>
     <th>Max</th>
   </tr>

<?php foreach ($data_hasil_min_max as $data) { ?>

   <tr>
     <td>C<?php echo $data['Kode_Kriteria']; ?></td>
     <td><?php echo $data['min']; ?></td>
     <td><?php echo $data['max']; ?></td>
   </tr>
   <?php } ?>
 </table>
</table>
<br><br>

<hr><br>

<h2>Hasil Pangkat</h2>

<table border="1" cellspacing="0">
  <tr>
    <th>Id Produk</th>
    <th>Id Kriteria</th>
    <th>Hasil Pangkat</th>
  </tr>
<?php foreach ($max_min as $row) { ?>
  <tr>
    <td><?php echo $row['NIK']; ?></td>
    <td><?php echo $row['Kode_Kriteria']; ?></td>
    <td><?php  $row['pembobotan']; ?>
    <?php foreach ($data_hasil_min_max as $data) {
      if ($row['Kode_Kriteria']==$data['Kode_Kriteria']) {
        $hasil=$data['max']-$row['pembobotan'];
        $pangkat=pow($hasil,2);

      }
    }
    echo number_format($pangkat,2);
    ?>
    </td>
  </tr>
  <?php } ?>
</table>
<br><br><br>

<table border="1" cellspacing="0" width="400" height="200">
  <tr>
    <th>Id Produk</th>
    <th>D+</th>
    <th>D-</th>
    <th>V1</th>
  </tr>

<?php
$ranking_array=array();
$produk = $topsis->get_data_produk();
while ($data_produk = $produk->fetch(PDO::FETCH_ASSOC)) {
  
?>
<tr>
<td>
  <?php echo $data_produk['NIK']; ?>
</td>
<?php
$nilai_d_plus=0;
$nilai_d_min=0;
    foreach ($max_min as $row) {
       foreach ($data_hasil_min_max as $data) {
          if ($row['Kode_Kriteria']==$data['Kode_Kriteria']) {
            $hasil_plus=$data['max']-$row['pembobotan'];
            $hasil_min=$data['min']-$row['pembobotan'];
            $pangkat_plus=pow($hasil_plus,2);
            $pangkat_min=pow($hasil_min,2);
          }
        }
      if ($data_produk['NIK']==$row['NIK']) {
        $nilai_d_plus=$nilai_d_plus+$pangkat_plus;
        $nilai_d_min=$nilai_d_min+$pangkat_min;
      }
    }
  ?>
  <td>
    <?php
    echo number_format($nilai_d_plus,2); ?>
  </td>
  <td>
    <?php
    echo number_format($nilai_d_min,2); ?>
  </td>
  <td>
    <?php
    $bagi=$nilai_d_min+$nilai_d_plus;
    echo $nilai_v=number_format($nilai_d_min/$bagi,2); ?>
  </td>
    <?php
    $ranking_arrays['nilai_v'] = $nilai_v;
    $ranking_arrays['NIK'] =  $data_produk['NIK'];
    array_push($ranking_array,$ranking_arrays);
    ?>
</tr>
<?php } ?>
</table>
<br><br>
<hr>

<h2>Ranking</h2>
<table border="1" cellspacing="0" width="400" height="200">
  <tr>
    <th>Ranking</th>
    <th>Nama Penduduk</th>
    <th>Nilai</th>
  </tr>
<?php
$no=1;
rsort($ranking_array);
$sql = mysqli_query($conn, "Delete from tb_ranking");
foreach ($ranking_array as $ranking) {

	$NIK  = $ranking['NIK'];
  $nilai = $ranking['nilai_v'];

$sql=mysqli_query($conn,"insert into tb_ranking value('$no','$NIK','$nilai')")or die(mysqli_error());
$sql2=mysqli_query($conn,"select * from tb_penduduk where NIK = '$NIK'")or die(mysqli_error());
$row = mysqli_fetch_array($sql2);
  ?>
  <tr>
    <td>
      <?php echo $no++; ?>
    </td>
    <td><?php echo $row['Nama']; ?></td>
    <td><?php echo $ranking['nilai_v']; ?></td>
  </tr>
  <?php } 



   	

 ?>
</table>


