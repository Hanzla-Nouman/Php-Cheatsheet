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
echo '<br>';
echo date('j:i:s');
echo '<br>';
$favColor = array('hanzla'=>'blue','asad'=>'green','usama'=>'red');
foreach ($favColor as $key => $value) {
    echo $key.' likes color '.$value.'<br>';
}
echo '<br>';
$multi_arr = array(array(1,0,3,4),array(5,7,7,8),array(9,4,8,3));
for ($i=0; $i < count($multi_arr); $i++) { 
    for ($j=0; $j < count($multi_arr[$i]); $j++) { 
        echo $multi_arr[$i][$j].' ';
    }
    echo '<br>';
}

$num = 78;
function print_value(){
    global $num;
    echo "The number is $num";
};
print_value();