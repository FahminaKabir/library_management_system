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
<li><b><a href="index.php">Home</a></b></li>
<li><b><a href="books.php">Book Search</a></b></li>
<li><b><a href="contact.php">Contact</a></b></li>
<li><b><a href="about.php">About us</a></b> </li>
</ul>
</div>
<div id="container">
<div id="left">
<h1 style="color : Navy;">Biographical Books</h1>
<?php
	$c="Biography";

	$q="select * from book where Genre like '%$c%'";
	$run=mysqli_query($link,$q);
	while($row=mysqli_fetch_array($run))
	{ 
    $name=$row['name'];
	$price=$row['price'];
	$img=$row['img'];

?>
<div id = "a"><center><?php echo"<img src= 'im/$img'>";?></center></div>
<?php
	}
	?>?


</div>
<div id="right">
<h1 style="color : Navy">Genre</h1>
<a href="dit.php"><b>Detective</b><a><br><br><br><br>

<a href="sci.php"><b>Science Fiction</b><a><br><br><br><br>

<a href="hor.php"><b>Horror</b><a><br><br><br><br>

<a href="bio.php"><b>Biography</b><a><br><br><br><br>





</div>
</div>
<div id ="footer">
		<br><br><br><br><br><br><br>
		<h6 style="color : Navy"align= "center">&copy 16.01.04.054 and  16.01.04.053</h6>
		</div>
</body>


</html>
