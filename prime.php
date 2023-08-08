<!-- Write a PHP program to create a Web page and check whether the Entered Value is Prime or not. -->

<!DOCTYPE html>
<html>
    <head>
        <title>Prime Number</title>
    </head>
    <body>
        <form method="post">
            <label>Enter a number: </label>
            <input type="number" name="num">
            <input type="submit" name="submit" value="Submit">
        </form>
        <?php
            if(isset($_POST['submit'])){
                $num = $_POST['num'];
                $flag = 0;
                for($i = 2; $i <= $num/2; $i++){
                    if($num % $i == 0){
                        $flag = 1;
                        break;
                    }
                }
                if($flag == 0){
                    echo "$num is a prime number";
                }
                else{
                    echo "$num is not a prime number";
                }
            }
        ?>
    </body>
</html>