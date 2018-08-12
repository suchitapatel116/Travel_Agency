<html>
<head>
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
/*z-index:1;*/
}

#vernav ul
{
list-style-type:none;
/*background-color:green;
padding:10px;*/
}
#vernav ul li
{
display:inline-block;
padding:10px;
spacing:10px;
}
#vernav ul li:hover
{
/*background-color:#333;*/
color:#ddd;
cursor:hand;
font-size:30px;
}

#submenu ul li:hover
{
font-size:18px;
color:#aab;
}
</style>

<script src="jquery.min.js"></script>
<script>
$(document).ready(function()
{
    $("#sub1").hide(0);
	$("#img_all").hide(0);
	
	$("#l1").mouseover(function()
	{
	$("#sub1").slideDown(2000);
	});
	  $("#l1").mouseout(function()
	  {
	  $("#sub1").slideUp(5000);
  	  });

		
	  $("#sub1").click(function()
	  {
		$("#start_cont").hide(0);	
		$("#img_all").show(0);
  	  });
	  
});
</script>

<script>
function show(a)
{
var e=document.getElementById("content");
e.innerHTML='<object type="text/html" data='+a+' width=790 height=600>';
}

function disp(a)
{
var e=document.getElementById("img_cont");
e.innerHTML='<object type="text/html" data='+a+' width=500 height=450>';
}
</script>

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
<li id="l1" onClick="show('north.php')" align="center"> NORTH </li>
	<div id="submenu">
	<ul id="sub1" style="font-size:14px;">
	<li onClick="disp('images/back3.jpg')">Heritage tour</li>
	<li onClick="disp('images/wildlife-safari.jpg')">Wildlife tour</li>
	<li onClick="disp('images/himalayan.jpg')">Himalayan tour</li>
	<li onClick="disp('images/pilgrimage.jpg')">Pilgrimage tour</li>
	<li onClick="disp('images/golden-triangle.jpg')">Golden triangle tour</li>
	<li onClick="disp('images/adventure.jpg')">Adventure tour</li>
	</ul>
	</div>
<li onClick="show('south.php')"align="center"> SOUTH </li>
<li onClick="show('east.php')"align="center"> EAST </li>
<li onClick="show('west.php')"align="center"> WEST </li>
</ul>

</div>
</div>


<div id="content" style="position:absolute; top:200; left:210; height:600; width:790;">

	<div id="start_cont">
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

	<div id="img_all" style="padding-left:20px;">
	
	<div id="img_header"><h2> NORTH ZONE	</h2></div>
	<div id="img_cont" style="float:left; width:450; height:300;">	</div>
	
	<div style="float:right; width:200px; height:700px;">
	<marquee behaviour="scroll" direction="up">
	<img src="images/2.jpg" height="100" width="150"></img>
	<img src="images/11.jpg" height="100" width="150"></img>
	<img src="images/12.jpg" height="100" width="150"></img>
	<img src="images/30.jpg" height="100" width="150"></img>
	<img src="images/roll1.png" height="100" width="150"></img>
	<img src="images/roll2.gif" height="100" width="150"></img>
	<img src="images/roll3.png" height="100" width="150"></img>
	</marquee>
	</div>
	
	</div>
	
	
</div>

</body>
</html>