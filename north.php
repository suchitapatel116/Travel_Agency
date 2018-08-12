<html>
<head>
<!--script>
function des1()
{
var e=document.getElementById("d1");
e.innerHTML="package- 7000/-(per person) <br> 6 nights 7 days";

var e=document.getElementById("d2");
e.innerHTML=" ";
}


function des2()
{
var e=document.getElementById("d2");
e.innerHTML="package- 20,000/-(per person) <br> 14 nights 15 days";

var e=document.getElementById("d1");
e.innerHTML=" ";
}

</script-->


<style>
img
{
border: 2px solid black;
margin-left:10px;
cursor:hand;
}

#left_menu
{
margin-right:10px;
}
#left_menu ul
{
list-style:none;
font-size:20px;
}
#left_menu ul li
{
display:block;
padding:10px;
cursor:hand;
}
</style>

<script>
function show(a)
{
var e=document.getElementById("img_cont");
e.innerHTML='<object type="text/html" data='+a+' width=520 height=450>';
}
</script>

</head>
<body>

<h1>NORTH ZONE</h1>


<div id="img_cont" style="float:left;">
<img src="images/varanasi-north.jpg" width="450" height="300"></img>
</div>

<div id="left_menu" style="float:right;">
<ul>
<li onClick="show('images/back3.jpg')">Heritage tour</li>
<li onClick="show('images/wildlife-safari.jpg')">Wildlife tour</li>
<li onClick="show('images/himalayan.jpg')">Himalayan tour</li>
<li onClick="show('images/pilgrimage.jpg')">Pilgrimage tour</li>
<li onClick="show('images/golden-triangle.jpg')">Golden triangle tour</li>
<li onClick="show('images/adventure.jpg')">Adventure tour</li>
</ul>
</div>

<!--table>
<tr> <td> <img src="images/west1.jpg" width="300" height="300" onClick="des1()"></img> </td> 
 <td>  <img src="images/west2.jpg" width="300" height="300" onClick="des2()"></img> </td>
<td> <img src="images/west3.jpg" width="300" height="300"></img>  </td>
</tr>

<tr> <td> WEST BENGAL </td> 

 <td> SEVEN SISTERS </td> 
 
 <td> MAP ROUTE </td> </tr>


<tr>
<td> <div id=d1> </td>
&nbsp; &nbsp;
<td> <div id=d2> </td>
</tr>

</table-->
</body>
</html>