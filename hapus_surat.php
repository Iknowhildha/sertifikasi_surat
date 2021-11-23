<?php
//memanggil koneksi ke database
include("koneksi.php");
$id = $_GET['id'];
$sql = $koneksi->query("select * from arsip_surat where id ='$id'");
$data = $sql->fetch_assoc();
$pdf = $data['file_surat'];
//melakukan pengecekkan file di direktori files
if (file_exists("files/$pdf")){
	unlink("files/$pdf"); // jika ada file maka akan dihapus
}
//menghapus data di database
$sql = $koneksi->query("delete from arsip_surat where id = '$id'");

if ($sql) {
	
	header('Location:index.php');
	
}
?>