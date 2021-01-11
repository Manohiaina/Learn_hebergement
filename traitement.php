<?php
	session_start();
	include ('data.php');
	$longueur=$_GET['long'];
	$indice_mot;
	$indice=rand(0,2);
	for($i=0;$i<4;$i++){
		for($a=0;$a<3;$a++){
				if(strlen($mot[$i][$a])==$longueur){
					$indice_mot=$i;
				}
			}	
		}
	for($i=0;$i<$longueur;$i++){
			$_SESSION['affiche'][$i]=' ';
		}
	$_SESSION['erreur']=0;
	$_SESSION['mot']=$mot[$indice_mot][$indice];
	$_SESSION['longueur']=$longueur;
	header('Location: jeupendu.php');
?>
