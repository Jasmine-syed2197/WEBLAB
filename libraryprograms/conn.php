<?php
$servername="localhost";
$username='root';
$password='';
$dbname="librarymanagement";
 
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
die('Could not connect My sql:' .mysql_error());
}
else
{
echo "Database Connected";
}
?>