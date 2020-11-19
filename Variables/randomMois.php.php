<meta charset="utf-8" />
<?php
/*  Cristina Dinca
	03 dec 2015
	Affichez un mois de l'année au hazard.
	Les mois doivent être stockés dans un tableau. */

// Déclaration des variables et constantes
$tabMois = array("janvier","février","mars","avril","mai","juin","juillet","août","septembre","octobre","novembre","décembre");

echo "<p>".$tabMois[mt_rand(0,sizeof($tabMois)-1)]."</p>";
// Affichage
/*foreach($tabMultiples as $indice => $value) {
	echo "<p>".($indice+1)." * ".$nb." = ".$value."</p>";
}*/
?>

