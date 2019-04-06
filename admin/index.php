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
<h2 style="padding : 10px;"><center>Admin Login</center></h2>

<br>
	<center>
	<form action=" " method="post">
	
		<table>
			<tr>
				<td width = "200" height = "50"><b>Username</b></td>
				<td width = "200" height = "50"><input style="width:200px;height:30px;border-radius:20px;"type="text" name="un" placeholder="   Enter Username"></td>
			</tr>
			<tr>
				<td width = "200" height = "50"><b>Password</b></td>
				<td width = "200" height = "50"><input style="width:200px;height:30px;border-radius:20px;" type="password" name= "ps" placeholder="   Enter Password"></td>
			</tr>
			<tr>
			<td><input style="width:200px;height:30px;border-radius:20px;" type="submit" name="sub" value="Login"></td>
			
			</tr>
		</table>
		</form>
		<?php
		if(isset($_POST['sub']))
		{
			 $un = $_POST['un'];
			 $ps = $_POST['ps'];
			 $q="select * from admin";
			 $run=mysqli_query($link,$q);
			 $row=mysqli_fetch_array($run);
			 echo $u=$row['un'];
			 echo $p=$row['ps'];
			 if($un==$u && $ps==$p){
				 header("Location:ahome.php");
		}
		else{
			header("Location:index.php?wrong user");
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
