<html>
<head>
	<img src="images/h2.JPG" width="100%" height="600" id="j1">
	<script>
		var e=document.getElementById("j1");
		var a=['images/h1.JPG','images/h3.JPG','images/h4.JPG'];
		i=0;
		setInterval("e.src=a[i++%3];",1200);
	</script>
</head>
	

</html>