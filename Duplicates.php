<?php  
//Delete duplicate Elements from array in sorted order.
    $arr = [3,8,9,3,1,7,2, 8];
    $sorted = array();
    for($x=1; $x<=100; $x++) {
        if (in_array($x, $arr)) {
            array_push($sorted, $x);
        }
    }
    print_r($sorted);

?>  