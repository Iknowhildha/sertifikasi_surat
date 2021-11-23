<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Arsip Surat</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><i class="fa fa-file"></i> <strong>ARSIP SURAT</strong></a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="index.php"><i class="fa fa-dashboard"></i> Arsip</a>
                    </li>
                    <li>
                        <a href="about.php"><i class="fa fa-desktop"></i> About</a>
                    </li>
                </ul>

            </div>
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="page-header">
                            Arsip Surat >> Unggah
                        </h1>
                    </div>

                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            Unggah surat yang telah terbit pada form ini untuk diarsipkan <br>
                            Catatan: Gunakan file berformat PDF
                        </ol>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- form yang mengarah ke file simpan_surat.php yang berfungsi untuk menyimpan
                                        data surat -->
                                        <form action="simpan_surat.php" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label>Nomor Surat</label>
                                                <input class="form-control" id="nomor_surat" name="nomor_surat">
                                            </div>
                                            <div class="form-group">
                                                <label>Kategori</label>
                                                <select class="form-control" id="kategori" name="kategori">
                                                    <option value="">-- Pilih Kategori --</option>
                                                    <?php 
                                            include 'koneksi.php'; //memanggil koneksi ke database
                                            //query untuk menampilkan data pada tabel kategori
                                            $ambil = $koneksi->query("SELECT * FROM kategori ORDER BY nama_kategori ASC");?>
                                                    <?php while($data = $ambil->fetch_assoc()){?> //untuk memecah data
                                                    yang diambil
                                                    <option value="<?php echo $data['id_kategori']; ?>">
                                                        <?php echo $data['nama_kategori']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Judul</label>
                                                <input class="form-control" id="judul" name="judul"
                                                    placeholder="Enter text">
                                            </div>
                                            <div class="form-group">
                                                <label>File Surat (PDF)</label>
                                                <input type="file" id="file_surat" name="file_surat">
                                            </div>

                                            <a href="index.php" class="btn btn-default">Kembali</a>
                                            <input type="submit" class="btn btn-info" value="Simpan"></input>

                                        </form>
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->

                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                    <!-- /. ROW  -->

                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
        <!-- /. WRAPPER  -->
        <!-- JS Scripts-->
        <!-- jQuery Js -->
        <script src="assets/js/jquery-1.10.2.js"></script>
        <!-- Bootstrap Js -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Metis Menu Js -->
        <script src="assets/js/jquery.metisMenu.js"></script>
        <!-- Custom Js -->
        <script src="assets/js/custom-scripts.js"></script>


</body>

</html>
