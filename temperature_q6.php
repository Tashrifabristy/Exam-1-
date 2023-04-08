<?php
$tempareture="78,60,62,68,71,68,73,85,66,64,76,63,81,76,73,68,72,73,75,65,74,63,67,65";
$temp_array=explode(',' , $tempareture);
$post=0;
$temp_post=count($temp_array);
foreach($temp_array as $temp){
    $post+= $temp;
}
$avg_temp=$post/$temp_post;
echo" Average tempareture is : ".$avg_temp."
";
?>