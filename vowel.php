<!-- Write a PHP program to create a Web page and check whether the Entered Character is a Vowel,using any of the Conditional statements. -->

<!DOCTYPE html>
<html>
    <head>
        <title>Vowel</title>
    </head>
    <body>
        <form method="post">
            <label>Enter a character: </label>
            <input type="text" name="char">
            <input type="submit" name="submit" value="Submit">
        </form>
        <?php
            if(isset($_POST['submit'])){
                $char = $_POST['char'];
                $char = strtoupper($char);
                if($char == 'A' || $char == 'E' || $char == 'I' || $char == 'O' || $char == 'U'){
                    echo "$char is a vowel";
                }
                else{
                    echo "$char is not a vowel";
                }
            }
        ?>
    </body>
</html>