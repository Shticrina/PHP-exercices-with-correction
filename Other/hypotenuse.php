<?php
/* Calcul de l'hypothénuse d'un triangle
 * Formule mathématique:
 * 	Hypo = racine(cote1²+cote2²)
 */
 //Solution 1:
function hypotenuse($cote1, $cote2){
	return sqrt(pow($cote1,2)+pow($cote2,2));
}

echo hypotenuse(5,10);
?>
<hr />
<?php

//Solution 2: la fonction prédéfinie hypot
function hypotenuse2($cote1, $cote2){
	return hypot($cote1,$cote2);
}

echo hypotenuse2(5,10);
?>