<html>
<head>
	<h1 align="center">ORDER NOW</h1>
</head>

<body>
<?php
if(!isset($_REQUEST['sub']))
{
?>
<form name="f1" action="<?php $_SERVER['PHP_SELF'] ?>">
PIZZA NAME:<input type="text" name="pna"><br>
PIZZA SIZE:<input type="text" name="psi"><br>
QUANTITY:<input type="text" name="qty"><br><br>
<input type="submit" name="sub" value="ADD To CART">&nbsp&nbsp
<input type="submit" name="sub" value="GENERATE BILL">&nbsp&nbsp
<input type="reset" name="res" value="CANCEL">&nbsp&nbsp
</form>
<?php
}
else
{
	$sub=$_REQUEST['sub'];
	if($sub=="ADD To CART"){
		$pna=$_REQUEST['pna'];
		$psi=$_REQUEST['psi'];
		$qt=$_REQUEST['qty'];
		$link=new mysqli("localhost","root","","pizza");
		$res=$link->query("select price from menu where pname='$pna' and psize='$psi'");
		$row=mysqli_fetch_row($res);
		$pr=$row[0];
		$amt=$pr*$qt;
		$link->query("insert into cart values('$pna','$psi',$pr,$qt,$amt)");
		$link->close();
		header("location:order.php");
	}
	else if($sub=="GENERATE BILL"){
		header("location:bill.php");
	}
}
?>
</body>
</html>