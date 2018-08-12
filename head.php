<html>
<head>
<style>
body
{
padding: 10 px;
//margin: 0;
//overflow-y:scroll;
background-image:url('images/travel.jpg');
background-size:cover;
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
	 // float: left;
	 //z-index:5;
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
z-index:5;		//gives upper effect
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
#nonim
{
width:10;
height:10;
}

</style>
</head>
<body>



<div style="float:left;">
<img src="images/logo.png" height="100" width="150"></img>
<img src="images/logo3.png" height="100" width="100"></img>
</div>

<div style="float:right;">
<img src="images/logo2.png" height="100" width="150"></img>
</div>


<h1 align=center>HK travels</h1>





<h2 style="font-family:Papyrus">
<div id="nav">
	<div id="mavw">
	
	<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="#">Hotels &nbsp;&nbsp;<img id="nonim" src="images/down.png" width=10 height=10></img></a>
		<ul>
            <li><a href="hotel.php">Domestic</a></li>
            <li><a href="abroad.php">International</a></li>
        </ul>
	</li>
    <li><a href="bus.php">Buses</a></li>
    <li><a href="#">Holidays &nbsp;&nbsp;<img id="nonim" src="images/down.png" width=10 height=10></img></a>
		<ul>
            <li><a href="holiday.php">Domestic</a></li>
            <li><a href="#">International</a></li>
            <li><a href="#">Weekends</a></li>
        </ul>
	</li>
    <li><a href="#">Bookings</a></li>
	<li><a href="#">Comments</a></li>
	<li><a href="Aboutus.php">About us</a></li>
	</ul>
	
	</div>
</div>
<h2>


</body>
</html>