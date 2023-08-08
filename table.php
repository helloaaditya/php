<!-- Design a simple web page to generate multiplication table for a given number using PHP -->

<!DOCTYPE html>
<html>
<head>
    <title>Table</title>
</head>
<body>
    <form action="table.php" method="post">
        <input type="text" name="num" placeholder="Enter a number">
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $num = $_POST['num'];
        for($i=1; $i<=10; $i++){
            echo "$num * $i = ".$num*$i."<br>";
        }
    }
    ?>
</body>
</html>
