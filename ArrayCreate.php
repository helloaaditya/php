<!-- Write a PHP program to illustrate Indexed Arrays -->

<!DOCTYPE html>
<html>
<head>
    <title>Indexed Array</title>
</head>
<body>
    <h4>Indexed Array</h4>
    <?php
    $arr = array(1, 2, 3, 4, 5);
    echo "The array is: ";
    for($i = 0; $i < count($arr); $i++){
        echo $arr[$i]." ";
    }
    //using print_r
    print_r($arr);
    
    
    $arr1 = array(1, 2, 3, 4, 5);
    $arr2 = array(6, 7, 8, 9, 10);
    $arr3 = array_merge($arr1, $arr2);
    echo "<br>The merged array is: ";
    for($i = 0; $i < count($arr3); $i++){
        echo $arr3[$i]." ";
    }
    ?>
</body>
</html>