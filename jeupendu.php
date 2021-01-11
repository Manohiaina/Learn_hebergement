<?php
	session_start();
	$mot=$_SESSION['mot'];
	$longueur=$_SESSION['longueur'];
	include('function.php');
	var_dump($_SESSION['mot']);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Jeu</title>
        <meta charset="UTF-8"> 
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	
	<body>
        <h2 style="text-align:center ; color:green">JEU DU PENDU</h2>
	<?php if(tester_gagner($longueur)==0) { ?>
		<?php for($i=0;$i<$longueur;$i++) { ?>
			<input style="width:100px; height:100px; font-size:100px; "type="submit" name="alpha" value="<?php echo $_SESSION['affiche'][$i]; ?>" />
		<?php }  ?>
		<h1>POUR UNE FOIS QUE TU GAGNE!</h1>
	<?php } elseif ($_SESSION['erreur']<7) { ?>	
		<h2>Choisissez une lettre</h2>
			<p>
				<?php for($i=0;$i<$longueur;$i++) { ?>
					<input style="width:100px; height:100px; font-size:100px; "type="submit" name="alpha" value="<?php echo $_SESSION['affiche'][$i]; ?>" />
				<?php }  ?>
			</p>		
		<div style="text-align:center" id="lettre">
			<?php for($i=65;$i<91;$i++) { ?>
				<a href="trait.php?alph=<?php echo chr($i); ?>"><input type="submit" name="lettre" value="<?php echo chr($i); ?>" /></a>
			<?php } ?>
		</div>
		
		<a href="trait.php?joker=1" ><img src="photo/joker.jpg" /></a>
		
		<?php if(($_SESSION['erreur']!=0)&&($_SESSION['erreur']<7)) { ?>
			<img style="float:center;" src="photo/<?php echo $_SESSION['erreur']; ?>.jpg">
		<?php } ?>
	<?php } elseif ($_SESSION['erreur']>=7) { ?>		
		<img style="float:center;" src="photo/<?php echo $_SESSION['erreur']; ?>.jpg">
		<h1>RAVO IMBECILE TU AS PERDU SALE MERDE!</h1>
		<p>Reponse: <?php echo $mot ?> </p>
	<?php } ?>
		<br/><br/>
		<a href="rejouer.php"><input type="submit" value="Redemarer le jeu" /></a>
	</body>
</html>
