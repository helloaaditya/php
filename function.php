<!-- function in php -->
<?php
function add($a, $b)
{
    return $a + $b;
}
echo add(2, 3);
echo "<br>";
function add1($a, $b = 10)
{
    return $a + $b;
}
echo add1(2);
echo "<br>";

//type conversion in php 

$a = 10;
echo $a;
echo "<br>";
echo gettype($a);
echo "<br>";
echo settype($a, "string");
echo "<br>";
echo gettype($a);
echo "<br>";
echo $a;
echo "<br>";
echo settype($a, "double");
echo "<br>";

