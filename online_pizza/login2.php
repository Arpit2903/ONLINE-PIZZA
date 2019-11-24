<html>
<head>
<h1 align="center">LOGIN FORM</h1>
</head>
<body>
<?php
if(!isset($_COOKIE['allow']))
{
if(!isset($_REQUEST['sub']))
{
?>
<fieldset> <legend> LOGIN </legend>
		<form name="f1" method="post" action="<?php $_SERVER['PHP_SELF']?>">
			<table align="center">
				<tr><td>USER NAME:<br><input type="text" name="tus"><br></td></tr>
				<tr><td>PASSWORD:<br><input type="password" name="tps"><br></td></tr>
				<tr>
					<td>
						<input type="checkbox" name="keep" value="KEEP ME">
						keep me logged in<br><br>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="sub" value="LOGIN">&nbsp&nbsp
						<input type="submit" name="sub" value="SIGN_UP">&nbsp&nbsp
						<input type="reset" name="res" value="CANCEL">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
<?php
}
else
{
	$us=$_REQUEST['tus'];
	$pa=$_REQUEST['tps'];
	$sub=$_REQUEST['sub'];
	if($sub=="LOGIN")
	{
		$link=new mysqli("localhost","root","","pizza");
		$res=$link->query("select * from login where una='$us' and pass='$pa'");
		$link->close();
		if($res->num_rows>0)
		{
			if(isset($_REQUEST['keep']))
			{
				setcookie("allow","direct",time()+24*30);
				setcookie("myuser",$us,time()+24*30);
			}
			
			session_start();
			$_SESSION['myuser']=$us;
			echo "<br> AUTHORISED USER";
			
		}
		else{
			header("location:login2.php");
		}
	}
	else if($sub=="SIGN_UP")
	{
		$link=new mysqli("localhost","root","","pizza");
		$link->query("insert into login values('$us','$pa')");
		$link->close();
		header("location:login2.php");
		
	}
}
}
else{
session_start();	
$_SESSION['myuser']=$_COOKIE['myuser'];
header("location:order.php");
}
?>
</body>
</html>