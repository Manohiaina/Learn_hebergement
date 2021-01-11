<?php
session_start();
$lettre=$_GET['alph'];
$test=0;
for($i=0;$i<$_SESSION['longueur'];$i++)
{
	if($_SESSION['mot'][$i]==$lettre)
	{
		$_SESSION['affiche'][$i]=$lettre;
		$test=1;
	}
}
if($test==0)
{
	$_SESSION['erreur']++;
}
header('Location: jeupendu.php');
?>
