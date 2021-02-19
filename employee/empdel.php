<html>
<head>
<title>delete data</title>
</head>
<body bg color="lightpink">
<center>
<?php
	include_once'conn.php';
$sql="SELECT* FROM employee";
$result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0)
{
?>
<br><br>
<table border="2">
<tr>
<th>Eid</th>
<th>Ename </th>
<th>Designation</th>
<th>Salary</th>

</tr>

<?php
$i=0;
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Eid"];?></td>
<td><?php echo $row["Ename"];?></td>
<td><?php echo $row["Designation"];?></td>
<td><?php echo $row["Salary"];?></td>

</tr>

<?php
$i++;
}
?>
</table>
<br><br>

<form method="post" action="empdel2.php">
Enter the id to delete:&nbsp&nbsp
<input type="text" name="id" >
<br><br>
<input type="submit" name="submit" value="submit">
</form>
<?php
}
else{
echo "No result found...";
}
mysqli_close($conn);
?>
</center>
</body>
<html>