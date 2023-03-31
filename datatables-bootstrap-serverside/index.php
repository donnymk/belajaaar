<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>TUTORIALWEB.NET</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/dataTables.bootstrap.min.css" rel="stylesheet">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	
	<div class="container table-responsive">
		<h1>TUTORIALWEB.NET</h1>
		
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>PENGUSUL</th>
					<th>JENIS DIKLAT</th>
					<th>RUMPUN</th>
					<th>JABATAN</th>
					<th>NAMA DIKLAT</th>
					<th>JML CALON PESERTA</th>
				</tr>
			</thead>
		</table>
		
		<div id="serverresponse"></div>
	</div>
	
	<script src="js/jquery-1.12.3.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script>
	$(document).ready(function() {
		// $('#example').dataTable( {
			// "bProcessing": true,
			// "bServerSide": true,
			// "sAjaxSource": "data.php",
			// "aoColumns": [
			  // null,
			  // null,
			  // null,
			  // null,
			  // null,
			  // null,
			  // null
			  // {
				// "mData": "0", <!-- Ini adalah untuk Link ID urutan kolom seperti table mulai dari 0 untuk data pertama -->
				// "mRender": function ( data, type, full ) {
					// return '<a href="#" onclick="alert(\'ID adalah = '+data+'\')"><span class="label label-primary">Link ID<span></a>';
				  // }
			  // }
			// ]
		// } );
		
                    $.ajax({
                        url: 'data.php',
                        type: 'POST',
                        //data: 'idrumpun='+idrumpun+'&idjenisdiklat='+idjenisdiklat,
                        async: true,
                        cache:true,
                        success: function(b){
                            $('#serverresponse').html(b);
                        }
                    });		
	} );
	</script>
</body>
</html>