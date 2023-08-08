<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "String in php";
    echo "<br>";
    $str = "Hello World";
    echo $str;
    echo "<br>";
    echo strlen($str);
    echo "<br>";
    echo str_word_count($str);
    echo "<br>";
    echo strrev($str);
    echo "<br>";
    echo strpos($str, "World");
    echo "<br>";
    echo str_replace("World", "Rahul", $str);
    echo "<br>";
    echo str_repeat($str, 2);
    echo "<br>";
    echo substr($str, 2, 5);
    echo "<br>";
    echo substr_replace($str, "Rahul", 2, 5);
    echo "<br>";



    // //single quote
    // echo 'This is a $str';
    // echo "<br>";
    // //double quote
    // echo "This is a $str";
    // echo "<br>";

    // //useing \

    // echo "This is a \" $str \"";
    // echo "<br>";

    // //statement inside double quotes
    // echo "This is a $str[0]";
    // echo "<br>";
    // echo "This is a $str[1]";
    // echo "<br>";

    //concatenation
    // echo $str . " " . "This is a concatenation";
    // echo "<br>";
    
    // //delimiters
    // echo "This is a {$str}";
    // echo "<br>";
    // echo "This is a ${str}";
    // echo "<br>";

    
    
    // //heredoc and nowdocs
    // $name = "Rahul";
    // $age = 20;
    // $str = <<<EOD
    // <h1>My name is $name
    // And I am from "BCA".
    //  </h1>
    // <p>My age is $age</p>
    // EOD;
    // echo $str;
    // echo "<br>";
    // $str = <<<'EOD'
    // <h1>My name is $name
    // And I am from "BCA".
    // </h1>
    // <p>My age is $age</p>
    // EOD;
    ?>
</body>
</html>