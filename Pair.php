<?php
//How to find all the unique pairs of integer array whose sum is equal to a given number?

	$arr = [1,4,8,9,2,5,7,-1, -7, 17];
	$n = sizeof($arr);
	$sum = 10;
	for ($i = 0; $i < $n; $i++)
		for ($j = $i + 1; $j < $n; $j++)
			if ($arr[$i] + $arr[$j] == $sum){
				
				echo $arr[$i]." - ";
			    echo $arr[$j]."</br>";
			      
			}
?>
