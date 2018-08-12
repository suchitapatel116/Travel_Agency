<html>
<body>
<?php

$na=$_REQUEST['tna'];
$age=$_REQUEST['tage'];
$add=$_REQUEST['tadd'];
$gen=$_REQUEST['r1'];
$ph=$_REQUEST['tph'];
$ma=$_REQUEST['tma'];

$link=mysql_connect("localhost","root");
$db=mysql_select_db("travel",$link);

mysql_query("insert into cust values('".$na."',".$age.",'".$add."','".$gen."',".$ph.",'".$ma."')");

echo "You are registered";



mysql_close($link);
?>


<br>
<a href="travelform.php"><img src="backarrow.png" width=30 height=30></img></a>


</body>
</html>