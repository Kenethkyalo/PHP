<html>
<form method="post">
Enter first Number :
<input type="number" name="a" /><br><br>
Enter second Number :
<input type="number" name="b" /><br><br>
Enter third Number :
<input type="number" name="c" /><br><br>
<input type="submit" name="submit" value="Add">

</form>
<?php
if(isset($_POST['submit']))

{
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    $perimeter = 4*($a+$b+$c);
   echo "Perimeter :".$perimeter;
}
?>

</html>