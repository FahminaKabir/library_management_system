<?php
include("connection.php");
?>
<html>
<head>
<title>
homepage
</title>
<link rel="stylesheet"type="text/css" href="css/s1.css">
</head>

<body style = "background-image : url('img/b.png');">

<div id="header">
<h1 id="hd">Libary Management System</h1>
</div>
<div id="nav">
<ul>
<li><b><a href="ahome.php">Home</a></b></li>
<li><b><a href="ib.php">Insert Book</a></b></li>
<li><b><a href="bl.php">Book List</a></b></li>
<li><b><a href="sb.php">Sell Book</a></b></li>
<li><b><a href="msg.php">Message</a></b> </li>
</ul>
</div>
<div id="container">

<br>
	<center>
	
	<h1>Book List</h1>
	<table border="1" align="center">
	 <tr>
	   <th width="200" height="50">Name</th>
	   <th width="200" height="50">Price</th>
	   <th width="200" height="50">Genre</th>
	
	</tr>
	<?php
	$q="select * from book";
	$run=mysqli_query($link,$q);
	while($row=mysqli_fetch_array($run))
	{ 
    $name=$row['name'];
	$price=$row['price'];
	$Genre=$row['Genre'];
	
	
	?>
	<tr>
	<td width="200" height="50"><center><?php echo $name?></center></td>
	<td width="200" height="50"><center><?php echo $price?></center></td>
	<td width="200" height="50"><center><?php echo $Genre?></center></td>
	</tr>
	<?php
	
	}
	?>
	
	</table>
	</center>
</div>
<div id ="footer">
		<br><br><br><br><br><br><br>
		<h6 style="color : Navy"align= "center">&copy 16.01.04.054 and  16.01.04.053</h6>
		</div>
</body>


</html>
