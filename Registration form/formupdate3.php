<html>
<body bgcolor="Lightblue">
<form action="main.html" method="post">
<center>
<?php
include_once 'conn.php';
if(isset($_POST['submit']))
{	 
	$uid=$_POST['id'];
	 $fname = $_POST['upduname'];
	$pass=$_POST['password2'];
	$gen = $_POST['gender'];
	$em=$_POST['email'];
	$ph1 = $_POST['code'];
	$ph2=$_POST['phonenum2'];
	$sql = "UPDATE formtable SET Name='$fname',Password='$pass',Gender='$gen',Email='$em',Phonenum1='$ph1',Phonenum2='$ph2' where id='$uid'";

	 if (mysqli_query($conn, $sql)) {
		echo "Updated successfully !<br><br>";
	 } 
	else
	 {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
<br>
<br>
<input type="submit" value="Back to home page"name="submit">
</center>
</body>
</html>
