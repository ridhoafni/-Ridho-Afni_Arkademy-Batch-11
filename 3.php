<?php
echo "<pre>";
$rows = 5;
for ($i = 1; $i <= $rows; $i++) {
    for ($j = $i; $j <= $rows; $j++) {
        echo " ";
    }
    for($j=1; $j<=(2*$i-1); $j++){
        if($i == $rows || $j == 1 || $j==(2*$i-1)){
            echo "*";
        }else{
            echo " ";
        }
    }
    echo "<br>";
}
?>