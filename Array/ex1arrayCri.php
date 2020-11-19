<meta charset="utf-8" />
<?php
/* Cristina Dinca
03 dec 2015
1. Déclarez et affichez de façon brute les tableaux suivantes */

$tabPoids = array(76,62.5,45);
$tabPrenoms = array('Cyril','Malaika','Abdel','Fritz');
$saisons = array(
	'1' => 'hiver',
	'2' => 'printemps',
	'5' => 'été',
	'6' => 'automne'
);
$infosDate = array(
	'joursem' => 'lundi',
	'jour' => 4,
	'mois' => 'novembre',
	'année' => 2013
);
$tabJours = array('dimanche','lundi','mardi','mercredi','jeudi','vendredi','dimanche');
$tabMois = array('janvier','février','mars','avril','mai','juin','juillet',
				 'août','septembre','octobre','novembre','décembre');
$dateComplet = array(
	'weekday' => 'Monday',
	'wday' => 1,
	'mday' => 4,
	'month' => 'November',
	'mon' => 11,
	'year' => 2013,
	'hours' => 15,
	'minutes' => 23,
	'seconds' => 58
);
$infosPays = array(
	'Belgique' => array(
			'capitale' => 'Bruxelles',
			'monnaie' => 'euro',
			'superficie' => 30528,
			'langues' => array('français','néerlandais','allemand')
			),
	'France' => array(
			'capitale' => 'Paris',
			'monnaie' => 'euro',
			'superficie' => 675417,
			'langues' => 'français'
			),
	'Japon' => array(
			'capitale' => 'Tokyo',
			'monnaie' => 'yen',
			'superficie' => 377915,
			'langues' => 'japonais'
			),
	'Suisse' => array(
			'capitale' => 'Berne',
			'monnaie' => 'franc suisse',
			'superficie' => 41285,
			'langues' => array('allemand','français','italien','romanche')
			)
);


/*echo '<pre>'; print_r($tabPoids); echo '</pre>';
echo '<pre>'; print_r($tabPrenoms); echo '</pre>';
echo '<pre>'; print_r($saisons); echo '</pre>';
echo '<pre>'; print_r($infosDate); echo '</pre>';
echo '<pre>'; print_r($tabJours); echo '</pre>';
echo '<pre>'; print_r($tabMois); echo '</pre>';
echo '<pre>'; print_r($dateComplet); echo '</pre>';
echo '<pre>'; print_r($infosPays); echo '</pre>';

echo '<pre>'; var_dump($tabPoids); echo '</pre>';
echo '<pre>'; var_dump($tabPrenoms); echo '</pre>';
echo '<pre>'; var_dump($saisons); echo '</pre>';
echo '<pre>'; var_dump($infosDate); echo '</pre>';
echo '<pre>'; var_dump($tabJours); echo '</pre>';
echo '<pre>'; var_dump($tabMois); echo '</pre>';
echo '<pre>'; var_dump($dateComplet); echo '</pre>';
echo '<pre>'; var_dump($infosPays); echo '</pre>';*/

// 2. Affichez chaque poids du tableau $tabPoids sur un paragraphe différent.
echo '.......................................................<p>Ex. 2 : </p>';

for($i=0;$i<sizeof($tabPoids);$i++){
	echo '<p>'.$tabPoids[$i].'</p>';
}

// 3. Affichez les prénoms du tableau $tabPrenoms sous forme de liste non ordonnée (ul).
echo '........................................................<p>Ex. 3 : </p><ul>';

	foreach($tabPrenoms as $value) {
		echo '<li>'.$value.'</li>';
	}
echo '</ul>';

// 4. Affichez les prénoms du tableau $tabPrenoms sous forme de liste, mais en ordre inverse.
echo '.........................................................<p>Ex. 4 : </p><ul>';

	for($i=sizeof($tabPrenoms)-1;$i>=0;$i--){
		echo '<li>'.$tabPrenoms[$i].'</li>';
	}
echo '</ul>';

/* Var 2 : 
$rev = array_reverse($tabPrenoms);
echo '<ul>';
	for($i=0;$i<sizeof($rev);$i++){
		echo '<li>'.$rev[$i].'</li>';
	}
echo '</ul>';*/

// 5. Affichez les poids supérieurs à 50.
echo '..........................................................<p>Ex. 5 : </p>';

for($i=0;$i<sizeof($tabPoids);$i++){
	if($tabPoids[$i]>50) {
		echo '<p>'.$tabPoids[$i].'</p>';
	}
}

// 6. Affichez un prénom sur deux sous forme de tableau à une colonne.
echo '...........................................................';

echo '<p>Ex. 6 : </p><table style="border:1px solid purple">';
for($i=0;$i<sizeof($tabPrenoms);$i++){
	if($i%2==0) {
		echo '<tr style="border:1px solid blue"><td style="border:1px solid black">'.$tabPrenoms[$i].'</tr></td>';
	}
}
echo '</table>';

// 7. Affichez chaque saison séparés par une virgule et un espace.
echo '...........................................................<p>Ex. 7 :</p>';

$varSaisons = implode(', ',$saisons);
echo $varSaisons;

// Var 2 :
/*foreach($saisons as $valueSaison) {
	echo '<li>'.$valueSaison.'</li>';
}*/

// Var 3 :
//$tabs = array();
$s = '';
echo '<br/>Var 3 : ';
foreach($saisons as $valueSaison) {
	$s .= $valueSaison.', ';
}

echo $s.'<br/>sans virgule : ';
$s = substr($s,0,strlen($s)-2);
echo $s;


// 8. Affichez les données du tableau $infosDate sous la forme: Nous sommes en 2013, le lundi 4 novembre.
echo '<br/>...........................................................';

echo '<p>Ex. 8 : Nous sommes en '.$infosDate['année'].', le '.$infosDate['joursem'].' '.$infosDate['jour'].' '.$infosDate['mois'].'</p>';

// 9. Sachant que vous disposez des tableaux $tabJours et $tabMois. Affichez les données du tableau $dateComplet sous la forme:
// "Nous sommes un lundi de novembre et il est 15:23"
echo '...........................................................';

echo '<p>Ex. 9 : Nous sommes un '.$tabJours[$dateComplet['wday']].' de '.$tabMois[$dateComplet['mon']-1].
		' et il est '.$dateComplet['hours'].':'.$dateComplet['minutes'].'</p>';

// §§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§

// 10. En utilisant le tableau $infosPays :

	// a) Affichez uniquement toutes les capitales.
echo '...........................................................<p>Ex. 10 a) : </p>';

foreach($infosPays as $pays) {
	echo '<p>'.$pays['capitale'].'</p>'; // $value
}

	// b) Affichez en détails toutes les données de tous les pays (en indiquant le pays).
echo '...........................................................<p>Ex. 10 b) : </p>';

foreach($infosPays as $pays => $dataP) {
	echo '<ul><li><h2>'.$pays.'</h2>';
	echo '<ul><li>Capitale : '.$dataP['capitale'].'</li>';
	echo '<li>Monnaie : '.$dataP['monnaie'].'</li>';
	echo '<li>Superficie : '.$dataP['superficie'].'</li>';
	
	if(is_string($dataP['langues'])) {
		echo '<li>Langues : '.$dataP['langues'].'</li></ul>';
	} elseif(is_array($dataP['langues'])) {
		echo '<li>Langues : '.implode(', ',$dataP['langues']).'</li></ul>';
	}
	echo '</ul>';	
}

	// c) Affichez la superficie du pays dont la capitale est Paris.
echo '...........................................................<p>Ex. 10 c) : </p>';

foreach($infosPays as $pays) {
	if($pays['capitale']=='Paris')
		echo '<p>Superficie : '.$pays['superficie'].'</p>';
}
	
	// d) Affichez tous les pays dont la superficie est supérieure à celle de la Suisse.
echo '...........................................................<p>Ex. 10 d) : </p>';

$superficieSuisse = $infosPays['Suisse']['superficie'];

echo '<p>Pays avec la superficie supérieure à celle de la Suisse : <ul><em>';
foreach($infosPays as $pays => $data) {
	if($data['superficie']>$superficieSuisse)
		echo '<li>'.$pays.'</li>';
}
echo '</em></ul></p>';
	
	// e) Affichez toutes les langues officielles de Belgique.
echo '...........................................................<p>Ex. 10 e) : </p>';

echo '<p>Les langues officielles de Belgique : ';
echo implode(', ',$infosPays['Belgique']['langues']);
echo '</p>';	
	
	
	// f) Affichez (en indiquant le pays) les langues officielles de tous les pays.
echo '...........................................................<p>Ex. 10 f) : </p>';

foreach($infosPays as $pays => $dataP) {
	echo '<p>Les langues officielles de <strong>'.$pays.'</strong> : ';
		if(is_string($dataP['langues'])) {
			echo $dataP['langues'];
		} elseif(is_array($dataP['langues'])) {
			echo implode(', ',$dataP['langues']);
		}
	echo '</p>';	
}	

	// g) Affichez la monnaie des deux derniers pays.
echo '...........................................................<p>Ex. 10 g) : </p>';

$str = array_slice($infosPays,-2,2); // on extrait les 2 derniers éléments du tableau $infosPays

foreach($str as $nomPays) {
	echo '<p>Monnaie : '.$nomPays['monnaie'].'</p>';
}

//  >>>>>>>>>>>>>>>>>>>>>>>> MODIFIER LES ELEMENTS D'UN TABLEAU <<<<<<<<<<<<<<<<<<<<<<<<<<<

// 1. En utilisant le tableau $tabPrenoms,

	// a.	Ajoutez à la fin les prénoms suivants: Mike, Tanaka, Ramón.
echo '...........................................................<p>Ex. 1 a) : </p>';

array_push($tabPrenoms,'Mike','Tanaka','Ramón');
var_dump($tabPrenoms);

	// b.	Ajoutez au début les prénoms suivants: César, Pénélope.
echo '...........................................................<p>Ex. 1 b) : </p>';

array_unshift($tabPrenoms,'César','Pénélope');
var_dump($tabPrenoms);

	// c.	Supprimez le dernier prénom.
echo '...........................................................<p>Ex. 1 c) : </p>';

array_pop($tabPrenoms);
var_dump($tabPrenoms);


	// d.	Supprimez le premier prénom.
echo '...........................................................<p>Ex. 1 d) : </p>';

array_shift($tabPrenoms);
var_dump($tabPrenoms);


	// e.	Insérez le prénom Julie en deuxième position.
echo '...........................................................<p>Ex. 1 e) : </p>';

array_splice($tabPrenoms,1,0,'Julie'); // à partir de la position 1, on efface 0 éléments et on insère 'Julie'
var_dump($tabPrenoms);

	// f.	Supprimez les prénoms du troisième au cinquième prénom.
echo '...........................................................<p>Ex. 1 f) : </p>';

array_splice($tabPrenoms,2,3);
var_dump($tabPrenoms);

// 2. En utilisant le tableau $tabPoids,

	// a.	Augmentez tous les poids de 5kg avec une boucle for.
echo '...........................................................<p>Ex. 2 a) : </p>';

echo '$tabPoids avant : ';
var_dump($tabPoids);

$tabPoidsMod = $tabPoids;
echo '<p>$tabPoids après, var 1 : </p>';

for($i=0;$i<count($tabPoidsMod);$i++) {
	$tabPoidsMod[$i] += 5;
	echo '<p>'.$tabPoidsMod[$i].'</p>';
}

	// b.	Augmentez tous les poids de 5kg avec une boucle foreach.
echo '...........................................................<p>Ex. 2 b) : </p>';

echo '<p>$tabPoids après, var 1 : </p>';

foreach($tabPoids as $value) {
	$value += 5;
	echo '<p>'.$value.'</p>';
}

// 3. En utilisant le tableau $infosPays,

	// a.	Ajoutez l'anglais comme langue supplémentaire pour tous les pays.
echo '...........................................................<p>Ex. 3 a) : </p>';

var_dump($infosPays);

foreach($infosPays as $pays => $dataP) {
	echo '<p>Les nouvelles langues officielles de <strong>'.$pays.'</strong> : ';
		if(is_string($dataP['langues'])) {
			$languesTab = explode(',',$dataP['langues']);
			array_push($languesTab,'anglais');
			echo implode(', ',$languesTab);
		} elseif(is_array($dataP['langues'])) {
			array_push($dataP['langues'],'anglais');
			echo implode(', ',$dataP['langues']);
		}
	echo '</p>';	
}	

echo '<p>Var prof : </p>';

foreach($infosPays as $pays => &$tabData) {
	if(is_array($tabData['langues'])) {
		$tabData['langues'][] = 'arabe';
	} else {
		$tabData['langues'] = array( $tabData['langues'] , 'arabe');
	}
}
var_dump($infosPays);

	// b.	Ajoutez comme information supplémentaire l'extension de domaine correspondante à chaque pays (be, fr, jp, ch).
echo '...........................................................<p>Ex. 3 b) : </p>';

//echo '<p>V : </p>';
$infosPays['Belgique']['jk'] = 'extension';
var_dump($infosPays);
?>