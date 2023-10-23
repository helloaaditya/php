<!-- Write a PHP program to illustrate Associative Arrays -->

<!DOCTYPE html>
<html>
<head>
    <title>Associative Array</title>
</head>
<body>
    <h4>Associative Array</h4>
    <?php
    $arr = array("a" => 1, "b" => 2, "c" => 3, "d" => 4);
    echo "The array is: ";
    foreach($arr as $key => $value){
        echo $key." => ".$value."<br>";
        echo $arr["a"];
    }
    ?>
</body>
</html>