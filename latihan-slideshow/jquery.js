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