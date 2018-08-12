<html>
<head>

<?php
if(isset($_COOKIE['keep']))
{
header("location:info.php");
}

?>

<script>
//this code has no effect
var w=window.innerWidth;
var h=window.innerHeight;

window.onload=function() 
{
var e=document.getElementById("backgnd");
e.style.height=h;
e.style.width=w-30;

var ee=document.getElementById("myimg");
ee.style.height=h;
ee.style.width=w-30;
</script>

<style>
body
{
//padding: 10 px;
//margin: 0;
//overflow-y:scroll;
//background-image:url('images/travel.jpg');
//background-size:cover;
//background-repeat:no-repeat;
background-attachment:fixed;
}
#nav
{
background-color:#222;
  //float: left;
z-index:5;
}
#navw
{
width:960px;
margin:0px;
text-align:left;
	  //float: left;
}
#nav ul
{
list-style-type:none;
padding:0 px;
margin: 0 px;
position: relative;
}
#nav ul li
{
display:inline-block;
padding: 10px;
spacing: 10px;
}
#nav ul li:hover
{
background-color:#333;
}
#nav ul li a,vistited
{
color:#ccc;
display: block;
padding:15 px;
text-decoration:none;
}
#nav ul li:hover
{
color:#ccc;
text-decoration:none;
}
#nav ul li:hover ul
{
display: block;
}
#nav ul ul
{
display:none;
position: absolute;
background-color: #333;
border: 5 px solid #222;
border-top:0 px;
margin-left: -15px;
padding: 10px;
}
#nav ul ul li
{
display: block;
//padding: 7px;
}
#nav ul ul li a,visited
{
color:#ccc;
}
#nav ul ul li a:hover
{
color:#099;
}

h1
{
font-family:Lucida Handwriting;
font-weight:bold;
font-size:52px;
}
form
{
font-weight:bold;
//font-size:42px;
}

</style>


<script>
/*
var im=["images/12.jpg","images/1m.jpg","images/2.jpg","images/3.jpg"];
var i=0;
var e=document.getElementById("ok");

//setInterval("e.style.background-image= 'url("images/" + imagePrefix + ".ipg")';//image= 'url(im[i++%im.length])';",600);
//setInterval("e.style.background-image:url('images/1m.jpg')",500);
//setInterval("e.src=im[i++%im.length];",600);

function ChangeBackgroungImageOfTab(imagePrefix)
{
    document.getElementById("backgnd").style.backgroundImage='url('images/" + imagePrefix + ".jpg')';
setTimeout("ChangeBackgroungImageOfTab(im[i++%im.length])",200);
}
ChangeBackgroungImageOfTab(im[i++%im.length]);
*/

</script>


</head>
<body>	<!--id="ok"-->

<div id="backgnd">   <!--style="background-size:cover;"-->
<img id="myimg" style="position:absolute; z-index:-1; top:0; left:0; width:100%; height:150%;" src="images/travel.jpg"></img>

<script>
var im=["images/back1.jpg","images/back2.jpg","images/back3.jpg","images/back4.jpg","images/back5.jpg","images/back6.jpg","images/back7.jpg","images/back8.jpg","images/back9.jpg"];
var i=0;
var ee=document.getElementById("myimg");
setInterval("ee.src=im[i++%im.length];",1300);

/*this doesnt work
var im=["back1.jpg","back2.jpg","back3.jpg","back4.jpg"];
var i=0;
var ee=document.getElementById("myimg");
setInterval("ee.src=images/im[i++%im.length];",1000);
*/
</script>



<div style="float:left;">
<img src="images/logo.png" height="100" width="150"></img>
<img src="images/logo3.png" height="100" width="100"></img>
</div>

<div style="float:right;">
<img src="images/logo2.png" height="100" width="150"></img>
</div>

<font color="#000000">
<h1 align=center id="aa">HK travels</h1>
</font>

<!--for heading color change-->
<script>

var c=["darkgoldenrod","saddlebrown","indigo","darkgreen","palevioletred","purple","navyblue","indianred","lavender"];
var j=0;
var h=document.getElementById("aa");

setInterval("h.style.color=c[j++%c.length];",1300);

</script>




<h2 style="font-family:Papyrus">
<div id="nav">
	<div id="mavw">
	
	<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="#">Hotels &nbsp;&nbsp;<img src="images/down.png" width=10 height=10></img></a>
		<ul>
            <li><a href="hotel.php">Domestic</a></li>
            <li><a href="abroad.php">International</a></li>
        </ul>
	</li>
    <li><a href="bus.php">Buses</a></li>
    <li><a href="#">Holidays &nbsp;&nbsp;<img src="images/down.png" width=10 height=10></img></a>
		<ul>
            <li><a href="holiday.php">Domestic</a></li>
            <li><a href="#">International</a></li>
            <li><a href="#">Weekends</a></li>
        </ul>
	</li>
    <li><a href="#">Bookings</a></li>
	<li><a href="#">Comments</a></li>
	<li><a href="aboutus.php">About us</a></li>
	</ul>

	</div>
</div>
</h2>




<!--login...-->

<br><br>

<div align="left" style="float:left;">

<form name="f1" action="authen.php"><!--style="background-image:url(1.jpg); background-size:cover"-->

<table cellspacing=10 style="display:block; border:5px solid black; padding:20; background:rgba(255,255,255,0.6); ">
<tr>
<td colspan=2>
<h3 id="aa"><center style="font-size:24px"><b>LOGIN</center></h3><BR>
</td>
</tr>
<tr>
<td><b>Enter Id:</td><td><input type="text" name="tid"></td>
</tr>
<br>
<tr>
<td><b>Enter Password:</td><td><input type ="password" name="tpas"></td>
</tr>
<tr>
<td></td>
<td>
<input type="submit" name="sub" value="Log in">
<input type="reset" name="b2" value="reset">
</td>
</tr>
<tr><td></td>
<td><input type="checkbox" name="cb">Keep me logged in</td>
</tr>
<tr>
</table>
</form>

<a href="travelform.php" style="color:#ffffcc; font-size:28px">Register here</a>

</div>

<br>
<div style=" margin-left:-7px; position:absolute; top:750px; width:1007px; height:250px; background:rgba(100,100,100,0.5);">

<marquee><!-- behaviour="scroll" direction="up"-->
<img src="images/hm1.jpg" height="250" width="350"></img>
<img src="images/hm2.jpeg" height="250" width="350"></img>
<img src="images/hm3.jpg" height="250" width="350"></img>
<img src="images/hm4.jpg" height="250" width="350"></img>
<img src="images/hm5.jpg" height="250" width="350"></img>
</marquee>
</div>


<br><br><br><br><br><br>
<!--div style="position:absolute; top:700px; "-->
<marquee behavior=alternate style="font-size:20; top:800px; color:#cc0000;">
<i>Travel, eat, enjoy.....repeat</i></marquee>

<!--/div-->

</div>


</body>
</html>