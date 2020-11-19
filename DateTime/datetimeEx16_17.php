<meta charset="utf-8" />
<?php
// Cristina Dinca - Date and Time
date_default_timezone_set('Europe/Brussels');
$tabJour = array('dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi');
$tabMois = array('janvier','f&eacute;vrier','mars','avril','mai','juin','juillet',
				 'août','septembre','octobre','novembre','d&eacute;cembre');

// 16.	Paul est né le 22 février 1976 à midi et Keiko le 12 mai 1979 à 9h38. Quel est leur différence d'âge?
echo '<p>............................................... ex 16 ...............................................</p>';

$paul = strtotime("Feb 22,1976, 12:00");// mktime(12,0,0,2,22,1976);
$keiko = strtotime("May 12,1979, 9:38");// mktime(9,38,0,5,12,1979);
echo '<p>Paul : '.date('d M Y à G:i',$paul).'</p>';
echo '<p>Keiko : '.date('d M Y à G:i',$keiko).'</p>';

$diff=$keiko-$paul;

$years = floor($diff/(365*60*60*24)); 
$months = floor(($diff-$years*365*60*60*24)/(30*60*60*24)); 
$days = floor(($diff-$years*365*60*60*24-$months*30*60*60*24)/(60*60*24));
$hours = floor(($diff-$years*365*60*60*24-$months*30*60*60*24-$days*60*60*24)/(60*60));
$minutes = floor(($diff-$years*365*60*60*24-$months*30*60*60*24-$days*60*60*24-$hours*60*60)/60);

echo '<p>La différence d\'âge entre Paul et Keiko : '.$years.' ans, '.$months.' mois, '.
	$days.' jours, '.$hours.' heures et '.$minutes.' minutes.</p>';

// 17.	Le vol Bruxelles-Tokyo de 9h05 fait une escale de 10h50 à Moscou après 3h36 de vol, et prend encore 8h10
// 		avant d'arriver à l'aéroport de Narita(Tokyo). A quelle heure atterrirons-npus au Japon?
echo '<p>............................................... ex 17 ................................................</p>';
$heureBru = mktime(9,5,0);
echo '<p>Bruxelles : '.date('d M Y à G:i',$heureBru).'</p>';

$arriveMos = mktime(date('G',$heureBru)+3,date('i',$heureBru)+36);
echo '<p>arriveMoscou, après 3h36 : '.date('d M Y à G:i',$arriveMos).'</p>';
date_default_timezone_set('Europe/Moscow');
echo '<p>Moscou, date locale d\'atterrissage : '.date('d M Y à G:i',$arriveMos).'</p>';

$departMos = mktime(date('G',$arriveMos)+10,date('i',$arriveMos)+50);
echo '<p>departMoscou, après 10h50 : '.date('d M Y à G:i',$departMos).'</p>';

$arriveTokyo = mktime(date('G',$departMos)+8,date('i',$departMos)+10);
echo '<p>arriveTokyo, après 8h10 : '.date('d M Y à G:i',$arriveTokyo).'</p>';
date_default_timezone_set('Asia/Tokyo');
echo '<p>Tokyo, date locale d\'attérissage : '.date('d M Y à G:i',$arriveTokyo).'</p>';
?>