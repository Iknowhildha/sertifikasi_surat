<?php 
    //memanggil koneksi ke database
    include "koneksi.php";
    //membaca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['file_surat']['tmp_name'];
$file_surat   = $_FILES['file_surat']['name'];
// menentukan folder untuk menyimpan file
$folder = "files/$file_surat";
// tanggal waktu sekarang
date_default_timezone_set('Asia/Jakarta');      
$waktu_pengarsipan = date("Y/m/d h:i:sa");
// Apabila file berhasil di upload
if (move_uploaded_file($lokasi_file,"$folder")){
  echo '<script language="javascript" type="text/javascript">
alert("data berhasil di simpan!");</script>';
echo "<meta http-equiv='refresh' content='0; url=index.php'>";
  
  // Masukkan informasi file ke database
  $konek = mysqli_connect("localhost","root","","sertifikasi_surat");

  $query = "INSERT INTO arsip_surat (nomor_surat, judul, id_kategori, waktu_pengarsipan, file_surat)
            VALUES('$_POST[nomor_surat]', '$_POST[judul]', '$_POST[kategori]','$waktu_pengarsipan ','$file_surat')";
            
  mysqli_query($konek, $query);
}
else{
  echo '<script language="javascript" type="text/javascript">
alert("data gagal di simpan!");</script>';
echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}
?>
