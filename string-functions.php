<?php

$name = "Hanzla";
echo $name;
echo '<br>';
echo strlen($name);
echo '<br>';
echo 'The lenght of '.$name.' is '.strlen($name); 
echo '<br>';
$sentance = 'This is a sentance witten in php';
echo $sentance;
echo '<br>';
echo 'The lenght of sentance is '. str_word_count($sentance); 
echo '<br>';
echo strrev($sentance);
echo '<br>';
echo strpos($sentance,"is");
echo '<br>';
echo str_replace("Hanzl","Hamza",$name);
echo '<br>';
echo str_repeat("repeating ",8);
echo '<br>';
echo ltrim("    Left Trimmed");
echo '<br>';
echo rtrim("    Right Trimmed       ");

