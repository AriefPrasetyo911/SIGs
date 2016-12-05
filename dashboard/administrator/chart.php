<html>
<head>
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="Highcharts/js/highcharts.js" type="text/javascript"></script>
 
<?php
require('../../process/db.php');
?>
<script type="text/javascript">
 
$(function() {
var chart;
$(document).ready(function() {
chart = new Highcharts.Chart({
chart: {
renderTo: 'container',
plotBackgroundColor: null,
plotBorderWidth: null,
plotShadow: false
},
title: {
text: 'Grafik Kendaraan Masuk'
},
tooltip: {
formatter: function() {
return '<b>'+
this.point.name +'</b>: '+ Highcharts.numberFormat(this.percentage, 2) +' % ('+ this.y +' Kendaraan)';
}
},
plotOptions: {
pie: {
allowPointSelect: true,
cursor: 'pointer',
dataLabels: {
enabled: true,
color: '#000000',
connectorColor: 'green',
formatter: function() {
return '<b>' + this.point.name + '</b>: ' + this.percentage + ' %';
}
}
}
},
series: [{
type: 'pie',
name: 'Browser share',
data: [
<?php
$query = mysql_query("SELECT Hak_Akses FROM sig_auth_user");
 
while ($row = mysql_fetch_assoc($query)) {
$akses = $row['Hak_Akses'];
 
$data = mysql_fetch_array(mysql_query("SELECT Hak_Akses FROM sig_auth_user where Hak_Akses = '$akses'"));
$jumlah = $data['Hak_Akses'];
?>['<?php echo $akses ?>', <?php echo $jumlah; ?>],<?php
}
?>
 
]
}]
});
});
 
});
</script>
</head>
<body>
 
<div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
 
</body>
</html>