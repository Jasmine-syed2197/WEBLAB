<html>
 <head>
 <title>View data</title>
 </head>
<body bgcolor="Lightpink">
<form action="empmain.html" method="post">
<center>
	<?php
		include_once'conn.php';
	$sql="SELECT * FROM employee";
	$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result) > 0) 
		{
	?>
<br><br>
  <table  border="2">
  
  <tr>
    <th>Eid</th>	
    <th>Ename</th>
    <th>Designation</th>	
   <th>Salary</th>	
   
    </tr>

	<?php
	$i=0;
	while($row = mysqli_fetch_assoc($result)) {
	?>
<tr>
 <td><?php echo $row["Eid"]; ?></td>

    <td><?php echo $row["Ename"]; ?></td>
<td><?php echo $row["Designation"]; ?></td>
<td><?php echo $row["Salary"]; ?></td>
  
</tr>

	<?php
	$i++;
	}
	?>
</table>
	

 	<?php
	}
	else{
   	 echo "No result found";
	}
	?>
<br>
<br>
<input type="submit" value="Back to home page"name="submit">
</center>
</form>
 </body>
</html>
