<?php 
$porcrapas=0;
$porcraparig=0;

function raprap($npas,$nri){
global $porcrapas;
global $porcraparig;
$porcrapas=($npas/($npas+$nri)*100);
$porcraparig=($nri/($npas+$nri)*100);

	}
	$a=raprap(rand(1,50),rand(1,50));


	echo "porcetagem rapazes é ".$porcrapas. "% e o porcentagem raparigas é de ".$porcraparig. '%' ;
 ?>
