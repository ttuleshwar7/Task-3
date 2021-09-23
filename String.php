<?php
//Count the occurrence of each character in a string and print output in array format with each character in array format?
$str = "i am a string";   
$f = array();  
   
for($i = 0; $i < strlen($str); $i++) {  
    array_push($f, 1);  
    for($j = $i+1; $j <strlen($str); $j++) {  
        if($str[$i] == $str[$j]) {  
            $f[$i]++;  
              
            //Set $string[$j] to 0 to avoid printing visited character  
            $str[$j] = '0';  
        }  
    }  
}  
   

print("Characters - frequencies<br>");  
for($i = 0; $i < count($f); $i++) {  
    if($str[$i] != ' ' && $str[$i] != '0'){  
        print($str[$i] . " - " . $f[$i]);  
        print("<br>");  
    }  
}  
?>  