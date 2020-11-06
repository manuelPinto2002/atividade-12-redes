<?php 
$porcrapas=0;
$porcraparig=0;

function raprap($npas,$nri){
global $porcrapas;
global $porcraparig;
$porcrapas=($npas/($npas+$nri)*100);
$porcraparig=($nri/($npas+$nri)*100);

	}
	$a=raprap(1,2);
$npas=rand(1,50);
$nri=rand(1,50);

	echo "n rapazes é ".$porcrapas. " e o n raparigas é de ".$porcraparig ;
 ?>
