<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
        date_default_timezone_set('Asia/Kolkata');
        if(isset($_COOKIE['lastvisit'])){
            $last = $_COOKIE['lastvisit'];
            // echo "<h1>Welcome Back!</h1>";
            echo "<p>Your last visit was on: $last</p>";
        }
        else{
            // echo "<h1>Hello, New Visitor!</h1>";
            echo "<p>This is your first time visiting this page.</p>";
        }

        $currentDateTime = date('Y-m-d H:i:s');
        setcookie('lastvisit', $currentDateTime, time()+60*60*24*365);
        ?>
    </div>
</body>
</html>