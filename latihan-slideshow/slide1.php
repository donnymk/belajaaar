<!DOCTYPE html>
<html>
<head>
	<title>CK SlideShow</title>	
	<style type="text/css">		
		#ck_slide{
			margin: 50px auto;
			width: 800px; 
			height: 500px; 
		}
		#ck_slide > div { 
			position: absolute; 			
		}
		img{
			width: 800px;
			height: 500px;	
		}
	</style>
</head>
<body>
	
	<div id="ck_slide">
		<div>
			<img src="gambar/gambar1.jpg">
		</div>
		<div>
			<img src="gambar/gambar2.jpg">
		</div>
		<div>
			<img src="gambar/gambar3.jpg">
		</div>
	</div>
	
	<script>
	$(document).ready(function(){
		$("#ck_slide > div:gt(0)").hide();
			setInterval(function() { 
			$('#ck_slide > div:first')
			.fadeOut(100)
			.next()
			.fadeIn(900)
			.end()
			.appendTo('#ck_slide');
		},  3000);
	});
</script>
</body>
</html>