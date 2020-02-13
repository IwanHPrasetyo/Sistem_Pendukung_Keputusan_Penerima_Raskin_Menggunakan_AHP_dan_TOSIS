<?php 
  include_once("koneksi.php");
  //session_start();
  

$NIK = $_POST['NIK'];
$Nama = $_POST['Nama'];
$Alamat = $_POST['Alamat'];
$JenisKelamin = $_POST['JenisKelamin'];
$Umur = $_POST['Umur'];
$Pendidikan = $_POST['Pendidikan'];
$Pekerjaan = $_POST['Pekerjaan'];
$JumlahKeluarga = $_POST['JumlahKeluarga'];
$Pendapatan = $_POST['Pendapatan'];
$Rumah = $_POST['Rumah'];
$LuasRumah = $_POST['LuasRumah'];
$LuasTanah = $_POST['LuasTanah'];
$JanisLantai = $_POST['JanisLantai'];
$JanisDinding = $_POST['JanisDinding'];
$JanisAtap = $_POST['JanisAtap'];
$FasilitasToilet = $_POST['FasilitasToilet'];
$PembuanganToilet = $_POST['PembuanganToilet'];

          
          
            
$sql = mysqli_query($conn,"update tb_penduduk set Nama = '$Nama', Alamat = '$Alamat'
, Jenis_Kelamin = '$JenisKelamin', Umur = '$Umur', Pendidikan ='$Pendidikan'
, Pekerjaan ='$Pekerjaan', Jumlah_Keluarga = '$JumlahKeluarga', Pendapatan='$Pendapatan'
, Kepemilikan_Rumah = '$Rumah', Luas_Rumah = '$LuasRumah', Luas_Tanah ='$LuasTanah'
, Jenis_Lantai = '$JanisLantai', Jenis_Dinding ='$JanisDinding', Jenis_Atap ='$JanisAtap'
, Fasilitas_Toilet = '$FasilitasToilet', Tempat_Pembuangan_Tinja ='$PembuanganToilet' where NIK = '$NIK'")or die (mysqli_error()); 
            
       
    

    if($sql){

      echo "
      <script>
        alert('Data Berhasil Diubah');
        window.location = '../Admin/pages/tabel-penduduk.php';
      </script>
      ";

    }

    elseif(!$sql){
      
            echo "
            <script>
              alert('Data Gagal Diubah');
              window.location = '../Admin/pages/form-edit-penduduk.php';
            </script>
            ";
            
      
          }

      

         
  
      
   
					
	
	
 ?>