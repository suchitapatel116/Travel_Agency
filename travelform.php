<html>
<head>
<script>
function Checkadd()
{
var e=document.getElementById("tadd");
var val= f1.tadd.value;
var pat="^[A-Z a-z 0-9]{3,60}$";
var exp=new RegExp(pat);

if(f1.tadd.value.length==0)
{
//e.src="images/reddot.png";
	document.getElementById("faddd").style.border="2px solid red";
}
else
{
if(exp.test(val))
{
//e.src="images/whitedot.png";
	document.getElementById("faddd").style.border="none";	
}
else
{
//e.src="images/reddot.png"
	document.getElementById("faddd").style.border="2px solid red";
}
}
}

function Checkna()
{
var e=document.getElementById("tna");
var val=f1.tna.value;
var pat="^[a-z A-Z]{3,10}$";
var exp=new RegExp(pat);
if(f1.tna.value.length==0)
{
//e.src="images/reddot.png";
	document.getElementById("fna").style.border="2px solid red";
}
else
{
if(exp.test(val))
{
//e.src="images/whitedot.png";
	document.getElementById("fna").style.border="1px solid gray";
}
else
{
//e.src="images/reddot.png";
	document.getElementById("fna").style.border="2px solid red";
}
}
}
function Checkage()
{
var e=document.getElementById("tage");
var val=f1.tage.value;
var pat="^[0-9]{1,3}$";
var exp=new RegExp(pat);
if(f1.tage.value.length==0)
{
//e.src="images/reddot.png";
	document.getElementById("fage").style.border="2px solid red";
}
else
{
if(exp.test(val))
{
//e.src="images/whitedot.png";
	document.getElementById("fage").style.border="1px solid gray";
}
else
{
//e.src="images/reddot.png";
	document.getElementById("fage").style.border="2px solid red";
}

}
}

function Checkph()
{
var e=document.getElementById("tph");
var val=f1.tph.value;
var v1=val.charAt(0);
var v2=val.substring(1,val.length);
var pat1="^[9 8 7]{1}$";
var pat2="^[0-9]{9}$";
var e1=new RegExp(pat1);
var e2=new RegExp(pat2);
if(f1.tph.value.length==0)
{
//e.src="images/reddot.png";
	document.getElementById("fph").style.border="2px solid red";
}
else
{
if(e1.test(v1) && e2.test(v2))
{
//e.src="images/whitedot.png";
	document.getElementById("fph").style.border="1px solid gray";
}
else
{
//e.src="images/reddot.png";
	document.getElementById("fph").style.border="2px solid red";
}
}
}


function Checkma()
{
var e=document.getElementById("tma");
var val=f1.tma.value;
var pat="^[\\w]*[\\w]\@[\\w]\.*[\\w]$";
var exp=new RegExp(pat);
if(f1.tma.value.length==0)
{
//e.src="images/reddot.png";
	document.getElementById("fma").style.border="2px solid red";
}
else
{
if(exp.test(val))
{
//e.src="images/whitedot.png";
	document.getElementById("fma").style.border="1px solid gray";
}
else
{
//e.src="images/reddot.png";
	document.getElementById("fma").style.border="2px solid red";
}
}
}
</script>

</head>
<body background='images/Library_page.jpg'>

<form name="f1" action="dbinsert.php">
<h1 style="color:blue"><center>REGISTRATION FORM</center></h1>
<hr style="box-shadow: 5px 5px 5px green">
<center>
<table>
<!--<tr>
<td>Enter id:</td><td><input type="text" name="tid" onBlur="Checkid()"  >
<img src="images/whitedot.png" id="tid" width=30 height=30></img></td>
</tr>-->

<tr>
<td>Name:</td><td><input id="fna" type="text" name="tna" onBlur="Checkna()" >
<!--img src="images/whitedot.png" id="tna" width=5 height=5></img></td-->
</tr>

<tr>
<td>Age:</td><td><input id="fage" type="text" name="tage" onBlur="Checkage()"  >
<!--img src="images/whitedot.png" id="tage" width=30 height=30></img></td-->
</tr>

<tr>
<td>Address:</td><td><textarea id="faddd" name="tadd" onBlur="Checkadd()" rows=7 cols=25 ></textarea>
<!--img src="images/whitedot.png" id="tadd" width=30 height=30></img></td-->
</tr>

<tr>
<td>Gender</td><td><input type="radio" name="r1" value="male" checked=true>Male
<input type="radio" name="r1" value="female" >Female</td>
</tr>

<tr>
<td>Phone:</td><td><input id="fph" type="text" name="tph" onBlur="Checkph()" >
<!--img src="images/whitedot.png" id="tph" width=30 height=30></img></td-->
</tr>

<tr>
<td>E-mail:</td><td><input id="fma" type="email" name="tma" onBlur="Checkma()"  >
<!--img src="images/whitedot.png" id="tma" width=30 height=30></img></td-->
</tr>

<tr>
<td><input type="submit" name="b1" value="Submit" ></td>
<td><input type="reset" name="r1" value="Reset" ></td>
</tr>
</table>
</center>
</form>

<br><br>
<a href="index.php"><img src="images/backarrow.png" width=30 height=30></img></a>

</body>
</html>
