<html>
	<head>
	<script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/highcharts.js" type="text/javascript"></script>
    <script type="text/javascript">
	
	var chart1;
	$(document).ready(function() {
		chart1 = new Highcharts.Chart({
			chart: {
            	renderTo: 'container',
	            type: 'column'
    	    },   
        	title: {
            	text: 'Grafik Jumlah Mahasiswa Pemrograman Web '
	        },
    	    xAxis: {
        	    categories: ['Kelas']
	        },
    	    yAxis: {
        	    title: {
            	text: 'Jumlah Mahasiswa'
            }
        },
		series:             
            
			[
				<?php 
				include "koneksi.php";	//memanggil koneksi
				$sql = mysql_query("SELECT * FROM tb_kelas") or die (mysql_error());
				while ($data = mysql_fetch_array($sql)) {
					$namakelas = $data['kelas'];
					$sqljumlahkelas = mysql_query("SELECT jumlah_mahasiswa FROM tb_kelas WHERE kelas='$namakelas'")
						or die (mysql_error());
					while ($datajumlah = mysql_fetch_array($sqljumlahkelas)) {
						$jumlah = $datajumlah['jumlah_mahasiswa'];
					}
				?>
					{
						name: '<?php echo $namakelas; ?>',
						data: [<?php echo $jumlah; ?>]
					},
				<?php 
				} 
				?>
            ]
		});
	});	
</script>

	</head>
	<body>
		<div id='container'></div>		
	</body>
</html>
