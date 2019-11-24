<html>
<head>
<style>
.mydes{
	font-size:32;
	cursor:hand;
	border-color:white;
	color:white;
}
</style>
<script>
 function show(a){
	 var e=document.getElementById("abc");
	 e.innerHTML="<object type='text/html' data="+a+" width=100% height=600>"; 
 }
</script>
</head>
<body>
	<div style="position:absolute;top:0;left:0;width:100%;height:150;background-color:red">
		<div style="position:absolute;top:5;left:5;width:120;height:140; background-image:url('images/i4.jpg')">
		</div>
		<div style="position:absolute;top:10;left:500;color:white;font-size:40pt">
			COMPACT PIZZA
		</div>
	</div>
	<div style="position:absolute;top:150;left:0;width:100%;height:50;background-color:blue">
		<table border="1" width="100%" height="50" class="mydes">
			<tr align="center">
				<td> <div onClick="show('home.php')">HOME</div></td>
				<td> <div onClick="show('login2.php')">LOGIN</div></td>
				<td> <div onClick="show('menu.php')">MENU</div></td>
				<td> <div onClick="show('order.php')">ORDER</div></td>
				<td> <div onClick="show('bill.php')">BILL</div></td>
				<td> <div>CONTACT US</div></td>
			</tr>
		
	</div>
<div id="abc" style="position:absolute;top:50;left:0;width:100%;height:600">

</div>

</body>
</html>