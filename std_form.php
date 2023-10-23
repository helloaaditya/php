<!-- student form  -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- form html -->
    <form action="std_form.php" method="post">
        <input type="text" name="name" placeholder="Enter your name">
        <br>
        <input type="text" name="roll" placeholder="Enter your roll">
        <br>
        <input type="text" name="class" placeholder="Enter your class">
        <br>
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    // form php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $roll=$_POST['roll'];
        $class=$_POST['class'];
        echo "Name: $name <br>";
        echo "Roll: $roll <br>";
        echo "Class: $class <br>";
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