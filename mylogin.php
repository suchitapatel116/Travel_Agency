<html>
<head>

<script>
function check()
{
if(f1.t1.value=="me" && f1.p1.value=="me")
{
window.location="next.htm";
}
else
{
alert("wrong info");
window.location="back.htm";
}
}

var col=["red","blue","green","magenta","cyan","purple","pink"];
var j=0;
var c=document.getElementById("aa");
setInterval("c.style.color=col[j++%col.length];",1000);

</script>
</head>

<body style="background-image:url(1.jpg); background-size:cover">

<form name="f1" >

<table align="center" style="display:block; border:5px solid black; padding:40">
<tr>
<td colspan=2>
<h1 id="aa"><center>LOGIN</center></h1>
</td>
</tr>
<tr>
<td>Enter Id:</td><td><input type="text" name="t1"></td>
</tr>
<br>
<tr>
<td>Enter Password:</td><td><input type ="password" name="p1"></td>
</tr>
<tr>
<td>
<input type="button" name="b1" value="Log in" onClick="check()">
<input type="reset" name="b1" value="reset">
</td>
</tr>
</table>
</form>



</body>

</html>