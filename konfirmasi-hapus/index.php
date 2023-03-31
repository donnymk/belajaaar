<?php
	
	// Koneksi database
	$conn = new mysqli('localhost','root','','db_contoh');

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Modal Konfirmasi Saat Akan Menghapus Data</title>

		<link href="bootstrap.min.css" rel="stylesheet">
		
		<script src="jquery.min.js"></script>
		<script src="bootstrap.min.js"></script>
	

	</head>
<body>

	<div style="width:50%;margin:0 auto">

		<h2>Data Mahasiswa</h2>

		<table class="table table-bordered">
			<tr>
				<th>NIM</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Aksi</th>
			</tr>

			<?php 
				$sql = $conn->query("SELECT * FROM mahasiswa");

				while ( $r = $sql->fetch_assoc() ) { ?>

					<tr>
						<td><?php echo $r['nim'] ?></td>
						<td><?php echo $r['nama'] ?></td>
						<td><?php echo $r['alamat'] ?></td>
						<td><a href="javascript:;" data-id="<?php echo $r['nim'] ?>" data-toggle="modal" data-target="#modal-konfirmasi">Hapus</a></td>
					</tr>

			<?php } ?>

		</table>

	</div>

	<!-- modal konfirmasi-->
	<div id="modal-konfirmasi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Konfirmasi</h4>
				</div>

				<div class="modal-body btn-info">
					Apakah Anda yakin ingin menghapus data ini?
				</div>

				<div class="modal-footer">
					<a href="javascript:;" class="btn btn-danger" id="hapus-true">Ya</a>
					<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
				</div>

			</div>
		</div>
	</div>


<script>

	$(document).ready(function(){

		$('#modal-konfirmasi').on('show.bs.modal', function (event) {
			var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan

			// Untuk mengambil nilai dari data-id="" yang telah kita tempatkan pada link hapus
			var id = div.data('id') 

			var modal = $(this)

			// Mengisi atribut href pada tombol ya yang kita berikan id hapus-true pada modal.
			modal.find('#hapus-true').attr("href","pembatalan.php?id="+id); 

		})
		
	});

</script>

</body>
</html>