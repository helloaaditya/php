<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type ="number" name="num" value ="enter a number:">
        <input type ="submit" name="submit" value = "submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $num=$_POST['num'];
        $flag=0;
        for ($i=2; $i<=$num/2; $i++){
            if($num%$i==0){
                $flag=1;
                break;
            }
        }
        if ($flag==0){
            echo"$num is Prime Number";
        }
        else{
            echo"$num is not prime number.";
        }
    }
    ?>
</body>
</html>