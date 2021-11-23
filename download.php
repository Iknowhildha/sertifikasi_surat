<?php
//jka mendapatkan data file surat
if(isset($_POST['file_surat'])){
    $file = $_POST['file_surat'];
    header('Content-type: application/pdf');//menambahkan tipe file yang akan diunduh
    header('Content-Disposition: attachment; filename="'.$file.'"'); //mengunduh file
    readfile('mystery_folder/'.$file);
    exit();
}
?>