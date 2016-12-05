<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cari Rute Antar Objek Wisata</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeE1e5VLRy7Zz7WxLhook3Eqpqc9b8lMo"></script>
	<script>
	var directionsDisplay;
	var directionsService = new google.maps.DirectionsService();
	
	function initialize() {
	  directionsDisplay = new google.maps.DirectionsRenderer();
	  var mapOptions = {
		zoom: 15,
		center: new google.maps.LatLng(-7.389480,109.363132),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	  };
	  var map = new google.maps.Map(document.getElementById('map-canvas'),
		  mapOptions);
	  directionsDisplay.setMap(map);
	  directionsDisplay.setPanel(document.getElementById('directions-panel'));
	
	  var control = document.getElementById('control');
	  //control.style.display = 'block';
	  map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);
	}
	
	function calcRoute() {
	  var start = document.getElementById('start').value;
	  var end = document.getElementById('end').value;
	  var request = {
		origin: start,
		destination: end,
		travelMode: google.maps.TravelMode.DRIVING
	  };
	  directionsService.route(request, function(response, status) {
		if (status == google.maps.DirectionsStatus.OK) {
		  directionsDisplay.setDirections(response);
		}
	  });
	}
	
	google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

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
                    <li class="active">
                        <a href="cari_rute_antar_objek_wisata.php">Cari Rute Antar Objek Wisata</a>
                    </li>
                    <li>
                        <a href="cari_rute_berdasar_posisi.php">Cari Rute Berdasarkan Posisi Saat Ini</a>
                    </li>
                    <li>
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

                <div class="control-group form-group" >
                   		<label>Dari</label>
                    	<select class="form-control" id="start" onchange="calcRoute();">
                        	<option selected="selected">- Silakan Pilih Lokasi - </option>
                            <?php
                            include("process/db.php");
							  $queri	= mysql_query('select * from sig_data_place order by name');
							  while($row	= mysql_fetch_object($queri))
							  {
								echo "<option value='$row->lat, $row->lon'>".$row->name."</option>";
							  };?>
                        </select>
                 	 </div>
                 	<div class="control-group form-group">
                   		<label>Ke</label>
                    	<select class="form-control" id="end" onchange="calcRoute();">
                        	<option selected="selected">- Silakan Pilih Lokasi - </option>
                            <?php
                            include("process/db.php");
							  $queri	= mysql_query('select * from sig_data_place order by name');
							  while($row	= mysql_fetch_object($queri))
							  {
								echo "<option value='$row->lat, $row->lon'>".$row->name."</option>";
							  };?>
                        </select>
                 	</div>
                <hr>
                 <div class="row">
                    <div class="col-lg-12">
                    <div class="panel panel-primary">
                     <div class="panel-heading">
                         <h3 class="panel-title">Peta Objek Wisata</h3>
                     </div>
                   	 <div id="map-canvas" style="width:100%; height:500px;"></div>
                    </div>
                    </div>
                </div><!-- /.row -->
                <div class="row">
                	<div class="col-lg-12">
                      	<h4>Rute yang dapat dilalui:</h4>
                        <hr />
                        <div id="directions-panel"></div>
                    </div>
                </div>
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
    <script src="js/jquery-1.11.0.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</html>
