<?php

/**
 *
 */
class Topsis
{
  private $db;
  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=database_raskin', "root", "");
    // $this->db = new PDO('mysql:host=mysql.idhostinger.com;dbname=u241789732_putri', "u241789732_root", "39133494");
  }

  

  public function get_data_kriteria(){
    $stmt = $this->db->prepare("SELECT * FROM tb_kriteria ORDER BY Kode_Kriteria");
    $stmt->execute();
		return $stmt;
  }

  public function get_data_produk(){
    $stmt = $this->db->prepare("SELECT*FROM tb_nilai_penduduk ORDER BY NIK");
    $stmt->execute();
    return $stmt;
  }

  public function get_data_kriteria_id($id){
    $stmt = $this->db->prepare("SELECT*FROM tb_kriteria WHERE Kode_Kriteria='$id' ORDER BY Kode_Kriteria");
    $stmt->execute();
		return $stmt;
  }

  public function get_data_nilai_id($id){
    $stmt = $this->db->prepare("SELECT*FROM nilai_topsis WHERE NIK='$id' ORDER BY Kode_Kriteria");
    $stmt->execute();
    return $stmt;
  }

  public function pembagi($id){
    $stmt = $this->db->prepare("SELECT Nilai FROM nilai_topsis WHERE Kode_Kriteria='$id'");
    $stmt->execute();
    $pembagi=0;
    while ($data=$stmt->fetch(PDO::FETCH_ASSOC)) {

      $pangkat=pow($data['Nilai'],2);
      $pembagi=$pembagi+$pangkat;
    }
    $hasil=sqrt($pembagi);
    return $hasil;
  }

  public function insert_data_max_min($Kode_Kriteria, $Nilai){
    $stmt = $this->db->prepare("INSERT INTO max_min_topsis (Kode_Kriteria, Nilai_Max_Min) VALUE ('$Kode_Kriteria','$Nilai')");
    $stmt->execute();
  }

  public function delete_min_max(){
    $stmt = $this->db->prepare("DELETE FROM max_min_topsis");
    $stmt->execute();
  }

  public function min_max(){
    $stmt = $this->db->prepare("SELECT Kode_Kriteria, max(Nilai_Max_Min) AS max, min(Nilai_Max_Min) AS min FROM max_min_topsis GROUP BY Kode_Kriteria ");
    $stmt->execute();
    return $stmt;
  }

}

 ?>
