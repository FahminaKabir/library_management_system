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
	<form action="" method="post" enctype="multipart/form-data">
	<table>
	<tr>
	<td width="200px" height="50px">Enter Book Name</td>
	<td width="200px" height="50px"><input type="text"name="bname"placeholder="Enter Book Name"></td>
	
	
	</tr>
	<tr>
	<td width="200px" height="50px">Enter Book Price</td>
	<td width="200px" height="50px"><input type="text"name="price"placeholder="Enter Book Price"></td>
	
	
	</tr>
	<tr>
	<td width="200px" height="50px">Enter Book Genre</td>
	<td width="200px" height="50px">
	<select name="Genre">
	<option>Ditective</option>
	<option>Science Fiction</option>
	<option>Horror</option>
	<option>Biography</option>
	</select>
	
	</td>
	</tr>
	<tr>
	<td width="200px" height="50px">Enter Book Image</td>
	<td width="200px" height="50px"><input type="file"name="img"></td>
	
	
	</tr>
	<tr>
	<td><input type="submit" name="sub" value="save"</td>
	
	
	</tr>
	
	
	
	</table>
	</form>
	<?php
	if(isset($_POST['sub']))
	{
	$name=$_POST['bname'];
	 $price=$_POST['price'];
	 $Genre=$_POST['Genre'];
	 $image=$_FILES['img']['name'];
	$image_tmp=$_FILES['img']['tmp_name'];
	move_uploaded_file($image_tmp,"../im/$image");
	
	if(mysqli_query($link,"insert into book (name,Genre,price,img) values ('$name', '$Genre','$price', '$image')"))
	{
		echo "<script>alert('data inserted')</script>";
	}
	else
	{
		echo "<script>alert('data not inserted')</script>";
	}
	}
	?>
		
	</center>
</div>
<div id ="footer">
		<br><br><br><br><br><br><br>
		<h6 style="color : Navy"align= "center">&copy 16.01.04.054 and  16.01.04.053</h6>
		</div>
</body>


</html>
