<html>
<body bgcolor="pink">
<form  method="post" action="libmain.html">
<center>
<br>
<br>
<?php
include_once 'conn.php';
if(isset($_POST['submit']))
{
$id=$_POST['id'];
$title=$_POST['title'];
$author=$_POST['author'];
$pname=$_POST['pname'];
$price=$_POST['price'];
$qty=$_POST['quantity'];
$sql="INSERT INTO library(bookid,title,author,publishername,price,quantity)
VALUES('$id','$title','$author','$pname','$price','$qty')";
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