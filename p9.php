<html>
    <head>
        <title>Program 9</title>
    </head>
    <body>
        <form action="" method="post">
            <label for="number">Enter the length of the series:</label>
            <input type="number" name="number" id="number">
            <input type="submit" name="submit" value="Submit">
        </form>
        
        <?php
        function fibonacci($n) {
            if ($n == 0) {
                return 0;
            } else if ($n == 1) {
                return 1;
            } else {
                return (fibonacci($n - 1) + fibonacci($n - 2));
            }
        }
        if (isset($_POST['submit'])) {
            $n = $_POST['number'];
            for ($i = 0; $i < $n; $i++) {
                echo fibonacci($i), " ";
            }
        }
        ?>
    </body>
</html>