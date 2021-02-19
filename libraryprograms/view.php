<html>
 <head>
 <title>View data</title>
 </head>
<body bgcolor="Lightpink">
<form action="libmain.html" method="post">
<center>
	<?php
		include_once'conn.php';
	$sql="SELECT * FROM library";
	$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result) > 0) 
		{
	?>
<br><br>
  <table  border="2">
  
  <tr>
    <th>BookId</th>	
    <th>Title</th>
    <th>Author</th>	
   <th>Publisher</th>	
    <th>Price</th>
   <th>QTY</th>	
    </tr>

	<?php
	$i=0;
	while($row = mysqli_fetch_assoc($result)) {
	?>
<tr>
 <td><?php echo $row["bookid"]; ?></td>

    <td><?php echo $row["title"]; ?></td>
<td><?php echo $row["author"]; ?></td>
<td><?php echo $row["publishername"]; ?></td>
    <td><?php echo $row["price"]; ?></td>
<td><?php echo $row["quantity"];  ?></td>

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
