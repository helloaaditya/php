<!-- create two variable add them and multiply withany integer value. -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$a=10;
$b=20;
$c=$a+$b;
$d=5.25;
$e=$d*($a*$b);
echo "Addition $a and $b is $c";
echo "<br>";
echo "Multiplication of $a and $b is $e";

//avg of three variables
$avg= ($a+$b+$d)/3;
echo "<br>";
echo "Avg. of $a $b and $d is $avg";

//convert centimeter to inches
$cm=100;
$inches=$cm/2.54;
echo "<br>";
echo "$cm in inches $inches";

//concatinet using dot operators
$fname="BCA";
$lname="Students";
echo "<br>";
echo $fname.= " ".$lname;

?>
</body>
</html>

