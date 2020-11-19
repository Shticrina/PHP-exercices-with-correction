<meta charset="utf-8" />
<?php
// Cristina Dinca - Date and Time
date_default_timezone_set('Europe/Brussels');
$tabJour = array('dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi');
$tabMois = array('janvier','f&eacute;vrier','mars','avril','mai','juin','juillet',
				 'août','septembre','octobre','novembre','d&eacute;cembre');

// 13.	Quels seront tous les vendredi 13 de l'année?
echo '<p>............................................... ex 13 ...............................................</p>';

$today = getdate();

echo 'Tous les vendredi 13 de l\'année sont :<ul>';
for($i=1;$i<13;$i++) { // pour chaque mois
	$change = mktime(0,0,0,$i,13);
	if(date('w',$change)==5) { // si on trouve un vendredi 13, on l'affiche
		echo '<li>'.$tabJour[date('w',$change)].', '.date('d',$change).' '.$tabMois[date('m',$change)-1].'</li>';
	} 
}	
echo '</ul>';

// 14.	Combien de lundi y a-t-il en janvier cette année?
echo '<p>............................................... ex 14 ................................................</p>';

$startJanv = mktime(0,0,0,1,1);
$finJanv = mktime(0,0,0,2,0);

$cpt = 0;

for($i=1;$i<=7;$i++) {
	if(date('w',$startJanv)==1) { // si on trouve un premier lundi, on le garde
		$prLundi = date('d',$startJanv);
	} else { // sinon, on passe au prochain jour du mois
		$startJanv = mktime(0,0,0,1,date($i+1,$startJanv));
	}
}

echo 'Les lundi du mois de janvier :<ol>';

// une fois qu'on a trouvé le premier lundi, on compte de 7 en 7
while($startJanv<=$finJanv) {
	echo '<li>'.date('d/m',$startJanv).'</li>';
	$cpt++;
	$startJanv = mktime(0,0,0,1,date('d',$startJanv)+7);
}

echo '</ol>=> Nombre des lundi du mois de janvier : '.$cpt.'.';

// 15.	Quels sont les mois de cette année qui commencent un lundi?
echo '<p>............................................... ex 15 ...............................................</p>';
echo 'Les mois de cette année qui commencent un lundi :<ul>';

$maDate = mktime(0,0,0,1,1); // on commence en janvier cette année
$tabMoisLundi = Array();

for($i=0;$i<12;$i++) { // pour chaque mois
	if(date('w',$maDate)==1) { // si le premier du mois est un lundi, on le garde dans un tableau
		array_push($tabMoisLundi,$tabMois[date('m',$maDate)-1]);
	}
	
	$maDate = mktime(0,0,0,date($i+1,$maDate),1);
}

foreach($tabMoisLundi as $value) {
	echo '<li>'.$value.'</li>';
}
?>