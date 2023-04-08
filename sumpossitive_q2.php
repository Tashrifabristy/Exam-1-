<?php
$array=[-1,-50,30,20,100];
$sum= 0;
foreach($array as $data){
    if($data>0){
        $sum=$sum+$data;
    }
    
}
echo"$sum";
?>