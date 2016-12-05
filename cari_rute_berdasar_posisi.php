<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cari Rute Berdasarkan Posisi Pengguna</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeE1e5VLRy7Zz7WxLhook3Eqpqc9b8lMo"></script>
    <script type="text/javascript">     
    	var map;
		var geocoder = new google.maps.Geocoder();
		var infowindow = new google.maps.InfoWindow();
		var directionsService = new google.maps.DirectionsService();
		var directionsDisplay = new google.maps.DirectionsRenderer();
		 
		function init() {
			var mapOptions = {
			  zoom: 15,
			  mapTypeId: google.maps.MapTypeId.ROADMAP
			}
			map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
			directionsDisplay.setMap(map);
			directionsDisplay.setPanel(document.getElementById('directions_panel'));
			 
			// Detect user location
			if(navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(function(position) {
					var userLocation = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
					var infowindow = new google.maps.InfoWindow({
					map: map,
					position: userLocation,
					content:
						'<h5>Lokasi Saat Ini:</h5>' +
						'<h6>Latitude	: ' + position.coords.latitude + '</h6>' +
						'<h6>Longitude	: ' + position.coords.longitude + '</h6>'
				});
				
				map.setCenter(userLocation); 
					geocoder.geocode( { 'latLng': userLocation }, function(results, status) {
						if (status == google.maps.GeocoderStatus.OK) {
							document.getElementById('start').value = results[0].formatted_address;
						}
					});
				}, function() {
					alert('Geolocation is supported, but it failed');
				});
			}
		}
		 
			function addOption(selectBox, text, value) {
					var option = document.createElement("OPTION");
					option.text = text;
					option.value = value;
					selectBox.options.add(option);
			}
				 
			function calculateRoute() {
					var start = document.getElementById('start').value;
					var destination = document.getElementById('destination').value;
					 
					var request = {
						origin: start,
						destination: destination,
						travelMode: google.maps.DirectionsTravelMode.DRIVING
					};
					directionsService.route(request, function(response, status) {
						if (status == google.maps.DirectionsStatus.OK) {
							directionsDisplay.setDirections(response);
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
                    <li class="active">
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

                <form id="services">
                      <div class="control-group form-group">
                        <div class="controls">
                            <label>Lokasi Sekarang</label>
                            <input type="text" class="form-control" id="start" disabled/>
                        </div>
                      </div>
					  <div class="control-group form-group">
                        <div class="controls">
                            <label>Lokasi Tujuan</label><br>
                            <select class="form-control" id="destination">
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
                     </div>
                    <input type="button" value="Tampilkan Rute" onclick="calculateRoute();" />
                </form>
                <hr>
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
                <div class="row">
                	<div class="col-lg-12">
                      	<h4>Rute yang dapat dilalui:</h4>
                        <hr />
                        <div id="directions_panel"></div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div><!-- /#page-wrapper -->
	   </div><!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
