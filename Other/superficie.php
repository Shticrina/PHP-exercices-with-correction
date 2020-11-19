<?php
/* Calcul de la superficie d'un triangle
 * Formule mathématique:
 * 	St = base*hauteur/2
 */
function superficie($base, $hauteur){
	return $base*$hauteur/2;
}

echo "Superficie: ".superficie(5,10,6)." cm&sup2;";
?>
<hr />
<?php
/* Calcul du périmètre d'un triangle
 * Formule mathématique:
 * 	Pt = cote1 + cote2 + cote3;
 */
function perimetre($cote1, $cote2, $cote3){
	return $cote1+$cote2+$cote3;
}

echo "P&eacute;rim&egrave;tre: ".perimetre(5,10,6)." cm";
?>