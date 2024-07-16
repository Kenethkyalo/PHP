<?php 
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="glassesrus"; // Database name 
$tbl_name="customers"; // Table name 
// Connect to server and select database
$connection=mysqli_connect("$host", "$username", "$password")or die("cannot 
connect"); ("$db_name")or die("cannot select DATABASE"); 
if($_POST)
{ 
// Get values from form 
$title=$_POST['title']; 
$surname=$_POST['surname']; 
$firstname=$_POST['firstname']; 
$lastname=$_POST['lastname']; 
$email=$_POST['email']; 
// Insert data into mysql 
$sql="INSERT INTO $tbl_name(Title,Surname,Firstname,Lastname,Email) 
values('$title','$surname','$firstname','$lastname','$email')"; 
$result=mysqli_query($connection, $sql); 
if($result)
{ 
echo "<H1 style='color:#0000FF'>Successful Customer Registration</H1>"; 
} 
else 
{ 
echo "customer not registred successfully";
} 
} 
?> 