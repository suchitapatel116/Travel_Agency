<html>
<head>
<style>
#back
{
background:rgba(255,255,255,0.95);
font-size:18px;
//font-family:lucida console;
text-decoration:none;
padding:15px;
padding-left:30px;
}
#lo
{
cursor:hand;
}
</style>
</head>
<body>
<?php
include('head.php');

		session_start();
		if($_SESSION['keepses']=="no")
		{
		header("location:index.php");
		}
		
?>

<div id="back"> <!--style=" position:absolute; top:200; left:210; height:600; width:1200;"-->

<?php
echo "welcome, ".$_SESSION['myvar'];
?>

<form name="flogout" action="logoutcheck.php" align="right">
<input type="submit" id="lo" name="blogout" value="logout">
</form>

<h1 style="font-size:30px"><center>Welcome</center></h1>

<form name="fi" action="userbooked.php">
<table>

<tr>
<td>Select package</td>
<td><select>
<option>Kashmir</option>
<option>Rajesthan</option>
<option>Kerela</option>
<option>Goa</option>
<option>Delhi</option>
</select></td>
</tr>

<tr><td><br><input type="radio" name="ri" value="flight">Flight</td></tr>
<tr><td><input type="radio" name="ri" value="flight">Train</td></tr>
<tr><td><input type="radio" name="ri" value="flight">Bus</td></tr>

<tr><td><br>No of persons:</td></tr>
<tr><td><input type="checkbox" name="cbi">Adult</td><td><input type="text" name="perad"></td></tr>
<tr><td><input type="checkbox" name="cbi">Children</td><td><input type="text" name="perch"></td></tr>
<tr><td><input type="checkbox" name="cbi">Senior citizens</td><td><input type="text" name="perse"></td></tr>

<tr><td><br>Payment mode:</td></tr>
<tr><td><input type="radio" name="ri2" value="cheque">Cheque</td></tr>
<tr><td><input type="radio" name="ri2" value="credit">Credit card</td></tr>
<tr><td><input type="radio" name="ri2" value="debit">Debit card</td></tr>

<tr><td>Comments</td>
<td><br><textarea rows=3 cols=25></textarea></td>
<td><br><br><input type="button" name="comm" value="post"></td>
</tr>

<tr>
<td><br><br><input type="submit" name="bi" value="submit"></td>
</tr>

</table>
</form>


</div>

	
</body>
</html>