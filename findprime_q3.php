<?php
$post=$_REQUEST['Data'];

function primeCheck($post){
	if ($post == 1)
	return 0;
	for ($i = 2; $i <= $post/2; $i++){
		if ($post % $i == 0)
		return 0;
	}
	return 1;
}


$flag = primeCheck($post);
if ($flag == 1)
	echo "Prime";
else
	echo "Not Prime"


?>