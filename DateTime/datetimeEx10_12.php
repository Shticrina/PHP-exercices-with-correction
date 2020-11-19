<meta charset="utf-8" />
<?php
// Cristina Dinca - Date and Time, ex 10 - 11 - 12
date_default_timezone_set('Europe/Brussels');
$tabJour = array('dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi');
$tabMois = array('janvier','f&eacute;vrier','mars','avril','mai','juin','juillet',
				 'août','septembre','octobre','novembre','d&eacute;cembre');
				 
// 10.	Écrivez un script qui indique la saison actuelle. Ex : printemps.
echo '<p>............................................... ex 10 ...............................................</p>';

$today = getdate();
//echo 'Nous sommes '.date('D').', '.date('d/m/Y');
//echo '<p>Nous sommes '.$tabJour[date('w')].', le '.date('d').' '.$tabMois[date('m')-1].' '.date('Y').' => <strong>';

$printempsD = mktime(0,0,0,3,21);
//echo '<p>Début printemps : '.date('d/M/Y',$printempsD).'</p>';
$printempsF = mktime(0,0,0,6,20);
$eteF = mktime(0,0,0,9,20);
$automneF = mktime(0,0,0,12,20);

if($today>=$printempsD && $today<=$printempsF) {
	echo 'C\'est le printemps!';
} else if($today>$printempsF && $today<=$eteF) {
	echo 'C\'est l\'été!';
} else if($today>$eteF && $today<=$automneF) {
	echo 'C\'est l\'automne!';
} else {
	echo 'C\'est l\'hiver!';
}
echo '</strong></p>';

// 11.	Combien y a-t-il eu d'années bissextiles durant le précédent millénaire?
echo '<p>............................................... ex 11 ................................................</p>';
$cpt = 0;
$prAnneeBis = getdate();

$annee = mktime(0, 0, 0, 2, 3,2000); // on commence par le février 2000, en bas

for($i=1;$i<=4;$i++) {
	if(date('L',$annee)==1) { //si l'année est bissextile
		$prAnneeBis = date('Y',$annee);
	} else {
		// sinon, passe à l'année précedente
		$annee = mktime(0,0,0,2,3,date('Y',$annee)-1);
	}
}
	
echo '<p>prAnneeBis : '.$prAnneeBis.'</p>';

for($j=$prAnneeBis;$j>=1001;$j-=4) {
	$cpt++;
}
echo '<p>Nombre d\'années bissextiles entre 1001 et 2000 : '.$cpt.'</p>';

// 12.	Quel jour de la semaine serons-nous cette année pour la St-Nicolas?
echo '<p>............................................... ex 12 ...............................................</p>';

$stNicolas = mktime(0, 0, 0, 12, 6);
echo 'Cette année, St. Nicolas tombe un '.$tabJour[date('w',$stNicolas)].'.';
echo '<p>L\'année prochaine, St. Nicolas tombe un '.$tabJour[date('w',mktime(0,0,0,12,6,date('Y')+1))].'.</p>';
?>