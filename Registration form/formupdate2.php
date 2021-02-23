<html>
 <head>
 <title> Update data</title>
 </head>
<body bgcolor="cyan">
 <form method="post" action="formupdate3.php">
<center>


<?php
include_once 'conn.php';
$rid = $_POST['id'];
$sql = "SELECT * FROM formtable where id='$rid'";
$result=mysqli_query($conn,$sql);
	
		if (mysqli_num_rows($result) > 0) 
		{
	?>
<br><br>
  	
   

	<?php
	
	if($row = mysqli_fetch_assoc($result)) {
	?>
                  Form id:&nbsp&nbsp <input type="text" value="<?php echo $row["id"]; ?>" name="id"><br><br>
	<b
>UserName &nbsp&nbsp</b>
    	<input type="text" value="<?php echo $row["Name"]; ?>" name="upduname"><br><br>

	<b>Password &nbsp&nbsp</b>
	<input type="text" value="<?php echo $row["Password"]; ?>" name="password2"><br><br>
	<b>Gender&nbsp&nbsp</b>
	 <input type="radio" name="gender"value="male" <?php if($row["Gender"]=="male"){ echo "checked";}?>/> Male
     	<input type="radio" name="gender"value="female"<?php if($row["Gender"]=="female"){ echo "checked";}?>/> Female<br><br>

	<b>Email &nbsp&nbsp</b>
	<input type="text" value="<?php echo $row["Email"]; ?>" name="email"><br><br>

	<b>Phone number &nbsp&nbsp</b>

	<select name="code">
      	<option <?php if($row["Phonenum1"]=="977"){echo "selected";}?> >977</option>
     	 <option <?php if($row["Phonenum1"]=="978"){echo "selected";}?> >978</option>
      	<option <?php if($row["Phonenum1"]=="979"){echo "selected";}?> >979</option>
     	 <option <?php if($row["Phonenum1"]=="973"){echo "selected";}?> >973</option>
     	 <option <?php if($row["Phonenum1"]=="972"){echo "selected";}?> >972</option>
     	 <option <?php if($row["Phonenum1"]=="974"){echo "selected";}?> >974</option>
     	</select>
	<input type="text" value="<?php echo $row["Phonenum2"]; ?>" name="phonenum2"><br><br>

	<input type="Submit" value="Update"name="submit" >
	<?php
	
	}
	?>

	

 	<?php
	}
	else{
   	 echo "No result found";
	}
	?>
</center>
</form>
 </body>
</html>
