<head>
<script type="text/javascript" src="lib/jquery-1.4.4.js"></script>
<script type="text/javascript" src="lib/sylvester.js"></script>
<script type="text/javascript" src="lib/jquery.masonry.min.js"></script>
<script type="text/javascript" src="lib/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/purecssmatrix.js"></script>
<script type="text/javascript" src="js/jquery.animtrans.js"></script>
<script type="text/javascript" src="js/jquery.zoomooz.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$(".zoom").click(function(evt) {
evt.stopPropagation();
$(this).zoomTo();
});
$(window).click(function(evt) {
evt.stopPropagation();
$("body").zoomTo();
});
$("body").zoomTo();
});
</script>
	<style type="text/css">
* {
margin: 0;
padding: 0;
}

/*Text Styles*/

#headline {
text-align: center;
margin: 20px 0;
}

h1 {
font-family: ‘Arvo’, Georgia, Times, serif;
font-size: 50px;
line-height: 65px;
}

p {
font-family: ‘PT Sans’, Helvetica, Arial, sans-serif;
font-size: 13px;
line-height: 25px;
}
/*Gallery Styles*/

#gallery {
width: 720px;
height: 370px;
margin: 0 auto;
padding: 10px;
background: #383131;
}

/*List Styles*/
ul {
list-style-type: none;
position: absolute;
width: 720px;
}

#gallery ul li {
float: left;
margin: 10px;
background: white;
height: 100px;
width: 100px;
}

#gallery ul li:hover {
border: 3px solid white;
margin: 7px;
}

#gallery ul li img{
height: 100px;
width: 100px;
}

</style>
</head>
<body>
<div id="headline">
<h1>Galeri Foto</h1>
<p>Klik pada gambar untuk memperbesar foto dan klik di luar foto untuk memperkecilnya. Keren kan?</p>
</div>

<img class="zoom" src="img/1.jpg"/></li>
<li class="zoom"><img src="img/2.jpg"/></li>
<li class="zoom"><img src="img/3.jpg"/></li>
</body>