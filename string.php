<!-- demonstarte substr()in php using heredoc -->

<?php
$str = <<<EOD
The quick brown fox jumps over the lazy dog.
EOD;
echo substr($str, 4, -4);

$str = <<<'EOD'
The quick brown fox jumps over the lazy dog.
EOD;
echo substr($str, 4, -4);

$str = 'abcdef';
echo strlen($str); // 6
echo "length of $str is $strlen"; // bcd

// use substr_count()

$text = 'This is a test';
echo strlen($text); // 14
if (substr_count('is', $text) > 0){
    echo "is found";
}
else{
    echo "is not found";
}

// use substr_replace()
$string = '<NAME>';
echo substr_replace($string, 'Justin', 1, 4);

?>


