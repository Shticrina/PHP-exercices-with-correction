<meta charset="utf-8" />
<?php
// Cristina Dinca - Date and Time

date_default_timezone_set('Europe/Brussels');

$azi = time();
// asta nu : echo $azi;
echo 'Nous sommes '.date('D').' le '.date('d/j/Y',$azi);
var_dump(getdate($azi));

echo '<p>ex 2................................................................</p>';
$tabJour = array('dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi');
$tabMois = array('janvier','f&eacute;vrier','mars','avril','mai','juin','juillet',
				 'août','septembre','octobre','novembre','d&eacute;cembre');
				 
$noel = mktime (0, 0, 0, 12, 25);
echo 'Cette année, Noël tombe un '.$tabJour[date('w',$noel)];

echo '<p>ex 3 a) ................................................................</p>';
setlocale(LC_TIME,'french'); //fr_FR.utf8
echo 'Nous sommes '.strftime('%A').', le '.strftime('%d %B');

echo '<p>..........sans localisation.................</p>';
echo 'Nous sommes '.$tabJour[date('w',$azi)].', le '.date('d',$azi).' '.$tabMois[date('m',$azi)-1];

echo '<p>ex 3 b) ................................................................</p>';
$date3 = mktime (0, 0, 0, 2, 17, 2006);
echo 'Ce '.$tabJour[date('w',$date3)].', nous sommes le '.date('d',$date3).' '.$tabMois[date('m',$date3)-1].' '.$date3['y'].'.';

echo '<p>ex 4 ................................................................</p>';
$date2 = mktime(0, 0, 0, 3, 23, 2010);
$rez = $date2 + 24*60*60*15;

echo 'Nous serons le '.date('d/M/Y',$rez);

echo '<p>ex 5 ................................................................</p>';
$tabMois30 = Array();
$tabMois31 = Array();
$jourFev = 0;

for($i=1;$i<13;$i++) {
	$joursMois = date('t',mktime(0, 0, 0, $i)); // nb de jours du mois $i
	if($joursMois==30) {
		array_push($tabMois30,$tabMois[$i-1]);
	} elseif($joursMois==31) {
		array_push($tabMois31,$tabMois[$i-1]);
	} else {
		$jourFev = $joursMois;
	}
}	

echo '<p>Les mois de 30 jours sont :</p><ul>';
foreach($tabMois30 as $mois) {
	echo '<li>'.$mois.'</li>';
}

echo '</ul><p>Les mois de 31 jours sont :</p><ul>';
for($m=0;$m<sizeof($tabMois31)-1;$m++) {
	echo '<li>'.$tabMois31[$m].'</li>';
}
echo '</ul><p>Cette année, il y a '.$jourFev.' jours en février.</p>';

echo '<p>ex 6 ................................................................</p>';
$fin = mktime(0, 0, 0, 12, 31);
echo 'Cette année on a '.(date('z',$fin)+1).' jours.';
$anneeProch = mktime(0, 0, 0, 12, 31,date('Y')+1);
echo '<p>L\'année prochaine on va avoir '.(date('z',$fin)+1).' jours.</p>';

echo '<p>ex 7 ................................................................</p>';
$dateLimite = mktime(0, 0, 0, 4, 24, 2011);
$today = mktime(0, 0, 0, 3, 20, 2011);

$reste = $dateLimite - $today;

echo '<p>Il me reste '.(date('z',$reste)+1).' jours pour m\'inscrire.</p>'; // ???

echo '<p>ex 8 ................................................................</p>';
$dat1 = mktime(0, 0, 0, 2, 21, 2011);
$dat2 = mktime(0, 0, 0, 2, 26, 2011);
//$ecart = $dat2 - $dat1;
$ecart = ($dat2 - $dat1)/(24*3600);

echo 'Il y a '.$ecart.' jours entre le '.date('d/M/Y',$dat1).' et le '.date('d/M/Y',$dat2).'.';

echo '<p>ex 9 ................................................................</p>';
// Quelle heure est-il à New-York aux Etats-Unis? ... différence de -6 heures
echo '<p>L\'heure actuelle : '.date('H:i',$azi).'.</p>';
$heureNY = mktime(date('H')-6);
echo '<p>L\'heure à New York : '.date('H:i',$heureNY).'</p>';

// var 2
date_default_timezone_set('Europe/Brussels');
$dateBruxelles = time();
echo '............... var 2 ..................<p>L\'heure à Bruxelles : '.date('H:i',$dateBruxelles).'.</p>';

date_default_timezone_set('America/New_York');
$dateNewYork = time();
echo '<p>L\'heure à New York : '.date('H:i',$dateNewYork).'</p>';

//$diff = date('H',$dateNewYork) - date('H',$dateBruxelles);
$diff = date('g',$dateNewYork) - date('g',$dateBruxelles);
echo '<p>Il ya une différence de <strong>'.$diff.' heures</strong> entre Bruxelles et New York.</p>';
?>