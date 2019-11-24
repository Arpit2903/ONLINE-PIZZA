  <html>
<head>
<h1 align="center">FINAL BILL</h1>
</head>
<body>
	<?php
		$link=new mysqli("localhost","root","","pizza");
		$res=$link->query("select max(billno) from bill");
		$row=mysqli_fetch_row($res);
		$bno=$row[0];
		$bno++;
		
		session_start();
		$us=$_SESSION['myuser'];
		
		$res=$link->query("select sum(qty),sum(amount) from cart");
		$row=mysqli_fetch_row($res);
		$qt=$row[0];
		$amt=$row[1];
		
		$disc=$amt*0.1;
		$pay=$amt-$disc;
		$link->query("insert into bill values($bno,'$us',$qt,$amt,$disc,$pay)");
		$link->query("delete from cart");
		echo "<br> AMOUNT PAID";
		
		$link->close();
	?>
</body>
</html>	