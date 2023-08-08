<!-- simple switch php program -->


<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <!-- calculator -->

    <form action="switch.php" method="post">
        <input type="text" name="num1" placeholder="Enter first number">
        <br>
        <input type="text" name="num2" placeholder="Enter second number">
        <br>
        <input type="text" name="op" placeholder="Enter operator">
        <br>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $op=$_POST['op'];
        switch($op){
            case '+':
                echo $num1+$num2;
                break;
            case '-':
                echo $num1-$num2;
                break;
            case '*':
                echo $num1*$num2;
                break;
            case '/':
                echo $num1/$num2;
                break;
            default:
                echo "Invalid operator";
        }
    }
    ?>
    <style>
        input{
            margin: 10px;
            padding: 10px;
        }
        button {
            margin: 10px;
            padding: 10px;
        }
        body{
            text-align: center;
        }
    </style>

</body>
</html>