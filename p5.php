<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arr=array(2,4,6,7,"adi",4.5,TRUE);
    for($i=0;$i<count($arr);$i++){
       echo"$arr[$i]"."<br>";
    }
    print_r($arr);

    //merge
    $arr2=array(4,8,5,"kumar");
    $merge=array_merge($arr,$arr2);
    for($i=0;$i<count($merge);$i++) {
        echo"$merge[$i]";
    }
    ?>
</body>
</html>