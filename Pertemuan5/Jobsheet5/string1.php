<?php
$loremIpsum = "Lorem ipsum dolor sit amet, consectetur 
adipiscing elit. Ut finibus sapien sit amet nisl consectetur viverra. 
Ut non lacus eget massa consequat vulputate";

echo "<p> {$loremIpsum} </p>";
echo "Panjang karakter: " . strlen( $loremIpsum ) ."<br>";
echo "Panjang kata: " . str_word_count( $loremIpsum ) ."<br>";
echo "<p>". strtoupper( $loremIpsum ) ."</p>";
echo "<p>". strtolower( $loremIpsum ) ."</p>";
?>