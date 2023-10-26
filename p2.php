<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label>Enter a character:</label>
        <input type="text" name="char">
        <input type="submit" name ="submit" value ="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $char=$_POST['char'];
        $char=strtoupper($char);
        if(strlen($char!=1)){
            echo "Invalid input";
        }
        else if($char=='A' || $char=='E'||$char=='I'||$char=='0'||$char=='U'){
            echo "The character $char is vowel";
        }
        else{
            echo "$char is consonant";}
    }
    ?>
</body>
</html>