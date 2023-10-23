<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="arr">
        <input type ="submit" name="submit" value="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $arr=$_POST['arr'];
        $arr=explode(";",$arr);
        $max=0;
        for($i=0;$i<count($arr); $i++){
            $arr[$i]= explode(",",$arr[$i]);
            for($j=0;$j<count($arr[$i]); $j++){
                if($arr[$i][$j]>$max){
                $max=$arr[$i][$j];
                }
            }
        }
            echo "Max is ".$max."";
        }
    ?>
</body>
</html>