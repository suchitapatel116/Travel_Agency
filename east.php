<html>
<head>
<script>
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


</script>

<style>
img
{
border: 2px solid black;
margin-left:10px;
cursor:hand;
}
</style>
</head>
<body>
<h1>EAST ZONE</h1>

<table>
<tr> <td> <img src="images/east1.jpg" width="300" height="300" onClick="des1()"></img> </td> 
 <td>  <img src="images/east2.jpg" width="300" height="300" onClick="des2()"></img> </td>
<td> <img src="images/east3.jpg" width="300" height="300"></img>  </td>
</tr>

<tr> <td> WEST BENGAL </td> 

 <td> SEVEN SISTERS </td> 
 
 <td> MAP ROUTE </td> </tr>


<tr>
<td> <div id=d1> </td>
&nbsp; &nbsp;
<td> <div id=d2> </td>
</tr>

</table>
</body>

</html>