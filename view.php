<html>
<head>
<title>View Records</title>
</head>
<body>
<!--style sheet-->
<style type = "text/css">
p
{ font-family:tahoma,helvetica, sans-serif;
font-weight: normal;
font-size: 14pt;
}
</style>
<p><a href="home.php">Home</a> 
| <a href="insert.php">Insert New Record</a> 
</p>
<?php
include('connect.php');
$result = ("SELECT * FROM customers") or die();
echo "<table border='1' cellpadding='10' width='80%' align='center'>";
echo "<tr>
<th><font color='Red'>Id</font></th>
<th><font color='Red'>Title</font></th>
<th><font color='Red'>Surname</font></th>
<th><font color='Red'>Firstname</font></th>
<th><font color='Red'>Lastname</font></th>
<th><font color='Red'>Email Address</font></th>
<th><font color='Red'>Date Registered</font></th>
<th colspan='2'><font color='Red' >Operations</font></th></tr>";
while($row =( $result ))
{
echo "<tr>";
echo '<td><b><font color="#663300">'.$row['Id'].'</font></b></td>';
echo '<td><b><font color="#663300">'.$row['Title'].'</font></b></td>';
echo '<td><b><font color="#663300">'.$row['Surname'].'</font></b></td>';
echo '<td><b><font color="#663300">'.$row['Firstname'].'</font></b></td>';
echo '<td><b><font color="#663300">'.$row['Lastname'].'</font></b></td>';
echo '<td><b><font color="#663300">'.$row['Email'].'</font></b></td>';
echo '<td><b><font color="#663300">'.$row['RegisteredDate'].'</font></b></td>';
echo '<td><b><font color="#663300"><a 
href="edit.php?id='.$row['Id'].'">Edit</a></font></b></td>';
echo '<td><b><font color="#663300"><a 
href="delete.php?id='.$row['Id'].'">Delete</a></font></b></td>';
echo "</tr>";
}
echo "</table>";
?>
<p><a href="insert.php">Insert new record</a></p>
</body>
</html>
