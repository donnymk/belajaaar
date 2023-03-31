<p id="tulisan"></p>
<script>
	var jsonobjek={"nama":"Desrizal", "umur":28, "teman":["Nurmi", "Sarah", "Albert"]};
	var jsonstr=JSON.stringify(jsonobjek);
	//alert(typeof jsonstr); //string
	document.getElementById("tulisan").innerHTML=jsonstr;
</script>