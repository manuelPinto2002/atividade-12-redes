<?php 
function parimpar($n){
	if ($n %2==0) {
		return true;
	}
	else{
		return false;
	}
}
$n=rand(1,1000);
if (parimpar($n)) {
	echo $n." é par";
}
else{
	echo $n." é impar";
}

 ?>