<!DOCTYPE html>
<html>
    <head>
        <title>Largest number in 2D Array</title>
    </head>
    <body>
        <form method="post">
            <label>Enter the array: </label>
            <input type="text" name="arr">
            <input type="submit" name="submit" value="Submit">
        </form>
        <?php
            if(isset($_POST['submit'])){
                $arr = $_POST['arr'];
                $arr = explode(";", $arr);
                $max = 0;
                for($i = 0; $i < count($arr); $i++){
                    $arr[$i] = explode(",", $arr[$i]);
                    for($j = 0; $j < count($arr[$i]); $j++){
                        if($arr[$i][$j] > $max){
                            $max = $arr[$i][$j];
                        }
                    }
                }
                echo "The largest number is $max";
            }
        ?>
    </body>
</html>