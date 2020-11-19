<?php
/* Cristina Dinca
03 dec 2015
Affichez la table de multiplication d'un nombre donné (une constante), puis d'un nombre au hazard compris entre 0 et 10.
Les multiples doivent être stockés dans un tableau avant dêtre affiché.
*/

// Déclaration des variables et constantes
define('nbMultiples',10);
//define('NB',7);
$nb = rand(0,10);
$tabMultiples = array();

// Calcul des multiples 
for($i=0;$i<nbMultiples;$i++){
	$tabMultiples[$i] = $nb*($i+1);
}

// Affichage
foreach($tabMultiples as $indice => $value) {
	echo "<p>".($indice+1)." * ".$nb." = ".$value."</p>";
}
?>

