<?php 
	include_once("koneksi.php");
	//session_start();


					$id        	   = $_GET['id'];
					
					
         $sql =mysqli_query($conn,"DELETE from tb_penduduk WHERE NIK='$id'");
         $sql2 =mysqli_query($conn,"DELETE from nilai_topsis WHERE NIK='$id'");
         $sql2 =mysqli_query($conn,"DELETE from tb_nilai_penduduk WHERE NIK='$id'");
         $sql2 =mysqli_query($conn,"DELETE from tb_ranking WHERE NIK='$id'");
								

if ($sql) {
	echo "
	<script>
	  alert('Data Berhasil Dihapus');
	  window.location = '../Admin/pages/tabel-penduduk.php';
	</script>
	";
}

else{

	echo "
	<script>
	  alert('Data Gagal Dihapus');
	  window.location = '../Admin/pages/tabel-penduduk.php';
	</script>
	";	
}							


      
         									
	
 ?>