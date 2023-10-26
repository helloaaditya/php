<!-- write a php code to find the factorial of a given number -->

<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>factorial</h2>
    <form action="" method="post">
        <input type="number" name="num" placeholder="Enter a number">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html> -->


<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
</head>
<body>
    <div class="container">
        <h2>Factorial Calculator</h2>
        <form method="post" action="">
            <label for="number">Enter a number:</label>
            <input type="text" name="number" id="number" required>
            <input type="submit" value="submit" name="submit">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $num = intval($_POST["number"]);

            function factorial($n) {
                if ($n <= 1) {
                    return 1;
                } else {
                    return $n * factorial($n - 1);
                }
            }

            if ($num < 0) {
                echo "<p>Factorial is not defined for negative numbers.</p>";
            } else {
                $result = factorial($num);
                echo "<p>The factorial of $num is $result</p>";
            }
        }
        ?>
    </div>
</body>
</html>

