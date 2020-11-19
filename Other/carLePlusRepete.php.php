<?php
/* Cristina Dinca
27 nov 2015
sort, array etc. // Affichez le caractère le plus répété
*/

// Déclaration des variables, constantes, fonctions
$str = "speralifragilisiespiralidse"; 
echo '<p>Mon string est <em><strong>'.$str.' </strong></em>.</p>';
$str = strtolower($str);
echo '<p>Mon string en minuscule est <em><strong>"'.$str.'"</strong></em>.</p>';

$s = str_split($str);
var_dump($s);

sort($s);
var_dump($s);

$ss = implode($s);
echo '<p>Mon string ordonn&eacute; est <em><strong>"';
// var_dump($ss);
echo $ss;
echo '"</strong></em>.</p>';
$j = 0;
for($i=0;$i<strlen($ss)-1;$i++){
	if($ss[$i]!=$ss[$i+1]) {
		$cpt[$j] = substr_count($ss,$ss[$i],0);
		$j++;
	}
}
echo 'Cate bucati de <em>"a"</em> avem in sir? => ';
var_dump($cpt);

?>

