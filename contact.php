<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistem Informasi Geografis Pariwisata Kabupaten Purbalingga">
    <meta name="author" content="Arief Budi Prasetyo">

    <title>Contact Us</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="wrapper"> 
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Sistem Informasi Geografis Objek Wisata Kabupaten Purbalingga</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right navbar-nav top-nav">
                <li>
                    <a href="index.php">Home</a>
                </li>
               <li>
                    <a href="about.php">About</a>
                </li>
                <li class="active">
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
            <!-- Sidebar Menu Items - akan menjadi dropdown jika dilihat di layar kecil-->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a class="navbar-brand">Menu Utama</a>
                    </li>
                    <li>
                        <a href="buku_tamu.php">Buku Tamu</a>
                    </li>
                    <li>
                        <a href="daftar_objek_wisata.php">Daftar Objek Wisata</a>
                  </li>
                    <li>
                        <a href="cari_rute_antar_objek_wisata.php">Cari Rute Antar Objek Wisata</a>
                    </li>
                    <li>
                        <a href="cari_rute_berdasar_posisi.php">Cari Rute Berdasarkan Posisi Saat Ini</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper"> 	
            <div class="container-fluid" style="height:100%;"> 
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                         <li>
                           <i class="fa fa-dashboard"></i> Home
                         </li>
                         <li class="active">
                                <i class="fa"></i>Cari Objek Wisata
                         </li>
                        </ol>
                        <h1 class="page-header">
                           <small>Dinas Pariwisata Kabupaten Purbalingga</small>
                        </h1>
                    </div>
                </div><!-- /.row -->
                <div class="row">
                     <div class="col-lg-12">
                        <p>
                        Alamat :
                        </p>
                        <p>
                        Jalan Kapten P. Tendean No. 10 Purbalingga <br>
                        Purbalinnga, Jawa tengah<br>
                        53313<br>
                        </p>
                        <hr>
                        <p><i class="fa fa-phone"></i> 
                            <abbr title="Phone"></abbr>	: (0281) 893269</p>
                        <p><i class="fa fa-envelope-o"></i> 
                            <abbr title="Email"></abbr>	: - <a href="mailto:name@example.com"></a>
                        </p>
                        <p><i class="fa fa-clock-o"></i> 
                    	<abbr title="Hours"></abbr>		: 08.00 - 15.00</p>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            <hr/>
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p align="center">Copyright &copy; <?php echo date('Y');?> <br /> </p>
                    </div>
                </div>
            </footer>  
        </div><!-- /#page-wrapper -->
    </div><!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="assert/js/jquery-1.11.0.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="assert/js/bootstrap.min.js"></script>
</body>
</html>
