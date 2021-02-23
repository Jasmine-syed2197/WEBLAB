<html>
<body bgcolor="yellowgreen">
<form action="main.html" method="post">
<center>
<br>
<br>
<?php
include_once 'conn.php';
if(isset($_POST['submit']))
{
$fname=$_POST['uname'];
$pass=$_POST['password'];
$gen=$_POST['gender'];
$em=$_POST['email'];
$ph1=$_POST['code'];
$ph2=$_POST['phno'];
$sql="INSERT INTO formtable(Name,Password,Gender,Email,Phonenum1,Phonenum2)
VALUES('$fname','$pass','$gen','$em','$ph1','$ph2')";
if(mysqli_query($conn,$sql))
{
echo "new record created successfully!<br>";

}
else
{
echo "Error:".$sql."".mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<br><br><input type="submit" value="BACK TO HOME PAGE" name="submit">
</center>
</form>
</body>
</html>