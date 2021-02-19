<html>
<body bgcolor="pink">
<form  method="post" action="empmain.html">
<center>
<br>
<br>
<?php
include_once 'conn.php';
if(isset($_POST['submit']))
{
$id=$_POST['id'];
$title=$_POST['ename'];
$author=$_POST['desig'];
$pname=$_POST['salary'];

$sql="INSERT INTO employee(Eid,Ename,Designation,Salary)
VALUES('$id','$title','$author','$pname')";
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