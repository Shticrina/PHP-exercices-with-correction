<?php
// Cristina Dinca
/* Définir une fonction nommée yacombien( caractère, chaîne de caractères, booléen)
   Le but de la fonction est de compter le nombre d'occurrences d'un caractère dans une chaîne.
   Le booléen permet d'indiquer si la fonction doit être sensible à la casse ou non (par défaut oui).
*/
$c = "e";
$str = "Ma belle Ebony";

function validation($ch) {
	if(is_numeric($ch) || strlen($ch)<1) {
		return false;
	} else return true;
}

function yacombien($caractere,$chaine,$casse=true) {
	$compt = 0;
	if (!validation($chaine) || !validation($caractere) || !is_bool($casse)) {
		return 'false';
	} else if(!$casse) {
		$caractere = strtolower($caractere);
		$chaine = strtolower($chaine);
		
		for($i=0;$i<strlen($chaine);$i++) {
			if(substr($chaine,$i,1)==$caractere) { 
				$compt++;
			}
		}
	} else {
		for($i=0;$i<strlen($chaine);$i++) {
			if(substr($chaine,$i,1)==$caractere) { 
				$compt++;
			}
		}
	}
	if($compt==0) return false;
	else return $compt;
}
echo '<p>Y a combien de <em>'.$c.'</em> dans <em>'.$str.'</em> ?</p>';
echo '<p>(en respectant la casse => true)-> '.yacombien($c,$str,true).'</p>';
echo '<p>(sans respecter la casse => false)-> '.yacombien($c,$str,false).'</p>';
echo '<p>(sans mentionner la casse)-> '.yacombien($c,$str).'</p>';

echo '<p>Y a combien de <em>'."aeiou".'</em> dans <em>'.$str.'</em> ?</p>';
echo '<p>(casse => true)-> '.yacombien("aeiou",$str).'</p>';

echo '<p>Y a combien de <em>'.$c.'</em> dans <em>'.$str.'</em> ?</p>';
echo '<p>(casse => heuuu)-> '.yacombien($c,$str,"heuuu").'</p>';
?>