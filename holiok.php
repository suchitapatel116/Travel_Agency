<html>
<head>
<script>

function show(a)
{
var e=document.getElementById("content");
e.innerHTML='<object type="text/html" data='+a+' width=790 height=600>';
}

</script>

<style>
#content
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


<!--div style="background-color:orange; top:200; left=0; height:600; width:200; ">
<div class="c1"-->

<div id="list" align="left">
	<div id="vernav">

<ul>
<li onClick="show('north.php')" align="center"> NORTH </li>
<li onClick="show('south.php')"align="center"> SOUTH </li>
<li onClick="show('east.php')"align="center"> EAST </li>
<li onClick="show('west.php')"align="center"> WEST </li>
</ul>

</div>
</div>


<div id="content" style="position:absolute; top:200; left:210; height:600; width:790;">
<br>
<pre>	Welcome to HK travels</pre><br>
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