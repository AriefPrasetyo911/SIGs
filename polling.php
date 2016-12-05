<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Polling</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">
    <script type="text/javascript">
	function focuson()
	{
		document.form1.voting.focus();
		document.form1.kode.focus();
	}
	function check()
	{
		if(!document.form1.voting[0].checked && !document.form1.voting[1].checked && !document.form1.voting[2].checked && !document.form1.voting[3].checked && !document.form1.voting[4].checked && !document.form1.voting[5].checked && !document.form1.voting[6].checked && !document.form1.voting[7].checked && !document.form1.voting[8].checked && !document.form1.voting[9].checked && !document.form1.voting[10].checked && !document.form1.voting[11].checked && !document.form1.voting[12].checked && !document.form1.voting[13].checked && !document.form1.voting[14].checked && !document.form1.voting[15].checked && !document.form1.voting[16].checked && !document.form1.voting[17].checked && !document.form1.voting[18].checked && !document.form1.voting[19].checked && !document.form1.voting[20].checked && !document.form1.voting[21].checked)
		{
			alert("Anda Belum Memilih Objek Wisata");
			return false;
		}
	}
	</script>
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
            <ul class="nav navbar-right top-nav">
                <li>
                    <a href="index.php">Home</a>
                </li>
               <li>
                    <a href="about.php">About</a>
                </li>
                <li>
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
                    <li class="active">
                        <a href="polling.php">Polling</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Home
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
			   <form action="process/vote.php" method="post" name="form1" onSubmit="return check()">
               <div class="control-group form-group" >
                   		<label>Silakan pilih satu Objek Wisata di bawah ini yang paling menarik menurut anda:</label>
                        <?php
                          include("process/db.php");
					      $queri	= mysql_query('select * from sig_data_place order by name');
						  while($row	= mysql_fetch_object($queri))
						  {
						   echo "<br>"."<input type='radio' name='polling' value='$row->name'>".$row->name; 
                    	  };?>
                </div>
                <button type="submit" class="btn btn-default">Vote</button>
                </form>
                <hr>
                 <div class="row">
                    <div class="col-lg-12">
                    <div class="panel panel-primary">
                     <div class="panel-heading">
                         <h3 class="panel-title">Hasil Polling</h3>
                     </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                      <th>Nama Objek Wisata</th>
                                      <th>Jumlah Persen Suara</th>
                                      <th>Jumlah Suara</th>
                                      <th>Jumlah Seluruh Suara</th>
                                      <th>Rank</th>
                                    </tr>
                                </thead>
                                <?php
								error_reporting(0);
								$no = 1;
							    $totaldata	= mysql_fetch_assoc(mysql_query("select SUM(mark) as total from sig_polling"));
								//queri
								$queri = "SELECT * FROM `sig_polling` order by mark desc";
								$ambil = mysql_query($queri);
								if(mysql_num_rows($ambil) != 0 )
								{
									while($urai = mysql_fetch_assoc($ambil))
									{
								?>
                                <tbody>
                                    <tr>
                                       <td><?php echo $urai['name'];?></td>
                                       <td><?php echo round(($urai['mark']/$totaldata['total'])*100);?> %</td>
                                       <td><?php echo $urai['mark']?></td>
                                       <td><?php echo $totaldata['total']?></td>
                                       <td><?php echo $no++;?></td>
                                     </tr>
                                </tbody>
                                 <?php }
								 }
								 else
								 {?>
								  <tbody>
                                   <tr>
                                      <td colspan="5" align="center"> Belum Ada Data </td>
                                   </tr>
                                  </tbody>
								 <?php }?>
                            </table>
                        </div>
                    </div>
                    </div>
                </div><!-- /.row -->
                <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p align="center">Copyright &copy; <?php echo date('Y');?> </p>
                    </div>
                </div>
            </footer> 
            </div><!-- /.container-fluid -->
        </div><!-- /#page-wrapper -->
	   </div><!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
</body>
</html>
