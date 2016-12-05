<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Awal</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeE1e5VLRy7Zz7WxLhook3Eqpqc9b8lMo&sensor=true"></script>
    <script type="text/javascript">
        var map;
        var center = new google.maps.LatLng(-7.389480,109.363132);
      	var geocoder = new google.maps.Geocoder();
		var infowindow = new google.maps.InfoWindow();
		 
		function init() {
			var mapOptions = {
			  zoom: 13,
			  center: center,
			  mapTypeId: google.maps.MapTypeId.ROADMAP
			}
			 
			map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
			makeRequest('get_locations.php', function(data) {
				var data = JSON.parse(data.responseText);
				for (var i = 0; i < data.length; i++) {
					displayLocation(data[i]);
				}
			});
		}
				
		function makeRequest(url, callback) {
			var request;
			if (window.XMLHttpRequest) {
				request = new XMLHttpRequest(); // IE7+, Firefox, Chrome, Opera, Safari
			} else {
				request = new ActiveXObject("Microsoft.XMLHTTP"); // IE6, IE5
			}
			request.onreadystatechange = function() {
				if (request.readyState == 4 && request.status == 200) {
					callback(request);
				}
			}
			request.open("GET", url, true);
			request.send();
		}
		
		function displayLocation(location) {
			var content =   '<div class="infoWindow"><strong>'  + location.name + '</strong>'
							+ '<br/>'     + location.address + '</div>';
			if (parseInt(location.lat) == 0) {
				geocoder.geocode( { 'address': location.address }, function(results, status) {
					if (status == google.maps.GeocoderStatus.OK) {
						 
						var marker = new google.maps.Marker({
							map: map,
							position: results[0].geometry.location,
							title: location.name
						});
						 
						google.maps.event.addListener(marker, 'click', function() {
							infowindow.setContent(content);
							infowindow.open(map,marker);
						});
					}
				});
			} else {
				var position = new google.maps.LatLng(parseFloat(location.lat), parseFloat(location.lon));
				var marker = new google.maps.Marker({
					map: map,
					position: position,
					title: location.name
				});
				 
				google.maps.event.addListener(marker, 'click', function() {
					infowindow.setContent(content);
					infowindow.open(map,marker);
				});
			}
		}
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
            <ul class="nav navbar-right navbar-nav top-nav">
                <li class="active">
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

                <div class="row">
                    <div class="col-lg-12">
                    <div class="panel panel-primary">
                     <div class="panel-heading">
                         <h3 class="panel-title">Peta Objek Wisata</h3>
                     </div>
                    <body onload="init();">
                     	<div id="map_canvas" style="width:100%; height:500px"></div>      
                    </body>
                    </div>
                    </div>
                </div><!-- /.row -->
                <hr>
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
</html>
