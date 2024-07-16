<html>
<?php
function cuboidPerimeter($a, $b, $c) {
   
    $perimeter = 4 * ($a + $b + $c);
    return $perimeter;
}
$a = 8; 
$b = 4; 
$c = 5; 

$perimeter = cuboidPerimeter($a, $b, $c);
echo "Perimeter : ".$perimeter;
?>
</html>