<?php
	function tester_gagner($long){
		$rep=0;
		for($i=0;$i<$long;$i++){
			if($_SESSION['affiche'][$i]==' '){
				$rep=1;
			}
		}
		return $rep;
	}

?>