<html>
<head>
<script>
function show(a)
{
var e=document.getElementById("conte");
e.innerHTML='<object type="text/html" data='+a+' width=1200 height=600>';
}

</script>
<style>
img
{
border: 2 px solid black;
margin-left:10px;
}
#conte
{
background:rgba(255,255,255,0.95);
}
#list
{
background:rgba(99,99,99,0.7); 
position:absolute;
top:200; 
left:10; 
height:600; 
width:200;
font-size:26px;
//z-index:1;
}

#vernav ul
{
list-style-type:none;
//background-color:green;
//padding:10px;
}
#vernav ul li
{
display:inline-block;
padding:10px;
spacing:10px;
}
#vernav ul li:hover
{
//background-color:#333;
color:#ddd;
cursor:hand;
font-size:30px;
}

</style>
</head>
<body>

<?php
include('head.php');
?>

<div id="list" align="left">

	<div id="vernav">
<ul id="htl">
<li onClick="show('northht.php')">NORTH</li>
<li onClick="show('southht.php')"> SOUTH </li>
<li onClick="show('eastht.php')" > EAST </li>
<li onClick="show('westht.php')" > WEST</li>
</ul>
	</div>
</div>


<div id="conte" style=" position:absolute; top:200; left:210; height:600; width:1200; z-index:-1">
<br><pre>	Welcome to HK travels</pre>
<br>
<div style="float:left; margin-left:10px; width:750px; height:300px;">

<marquee>
<img src="images/hm1.jpg" height="300" width="350"></img>
<img src="images/hm2.jpeg" height="300" width="350"></img>
<img src="images/hm3.jpg" height="300" width="350"></img>
<img src="images/hm4.jpg" height="300" width="350"></img>
<img src="images/hm5.jpg" height="300" width="350"></img>
<img src="images/hm6.jpg" height="300" width="350"></img>
<img src="images/hm7.jpg" height="300" width="350"></img>
</marquee>
</div>

</div>


</body>
</html>