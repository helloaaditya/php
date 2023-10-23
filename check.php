<!-- write a php progam to check the given number is amstromg or not  -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   // php progam to check the given number is amstromg or not
    $num=150;
    $sum=0;
    $temp=$num;
    while($temp!=0){
        $rem=$temp%10;
        $sum=$sum+($rem*$rem*$rem);
        $temp=$temp/10;
    }
    if($num==$sum){
        echo "$num is amstrong number";
    }
    else{
        echo "$num is not amstrong number";
    }
    ?>
</body>
</html>

