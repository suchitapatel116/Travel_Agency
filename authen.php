<html>
<body>
<?php

$id=$_REQUEST['tid'];
$pas=$_REQUEST['tpas'];

$link=mysql_connect("localhost","root");
$db=mysql_select_db("travel",$link);

$result=mysql_query("select * from idpas");

$f=0;
	while($rec=mysql_fetch_row($result))
	{
		if($rec[0]==$id && $rec[1]==$pas)
		{
		$f=1;
		
				session_start();
				$_SESSION['keepses']="yes";
					//to print user name on all page get the var
				$_SESSION['myvar']=$id;
			
			//set cookie
			if($_REQUEST['cb'])  //['cb'].checked)
			{
			setcookie("keep","yes");
			}
			
		header("location:info.php");
		}
	
	}
if($f==0)
{
header("location:index.php");
}

mysql_close($link);
?>

</body>
</html>