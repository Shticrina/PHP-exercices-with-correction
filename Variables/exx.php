<?php
$nom = 'Dica';
$prenom = 'Verzulica';
$age = 16;
$majeur = true;
$date_naissance = '15/02/2012';

define('MAJ',17);

//<!--  ex 1d  si 2-->
if($age<MAJ) {
	echo '<p style="color:red">Tu as '.$age.' ans, tu est mineur.</p>';
} else {
	echo '<p style="color:green">Tu as '.$age.' ans, tu est bien majeur.</p>';
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Variables premier</title>
</head>
<body>
<!--  ex 1b -->
	<ul>
		<li><?php echo $nom;?></li>
		<li><?php echo $prenom;?></li>
		<li><?php echo $age.' ans';?></li>
	</ul>
<?php
echo '<p>Je m\'appelle <strong>'.$prenom.' '.$nom.'</strong> et j\'ai '.$age.' ans.</p>';
?>
<!--  ex 1c -->
<?php
echo '<p>Le '.$date_naissance.' j\'aurai <strong>'.($age+1).' ans</strong>!</p>';
?>
</body>
</html>