<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Exercices tableau</title>
</head>
<body>
<?php
//1. Déclarez et affichez de façon brute les tableaux suivants:
$tabPoids = array(76, 62.5, 45);

$tabPrenoms = array('Cyril', 'Malaïka','Abdel','Fritz');

$saisons = array(1=>'hiver','printemps',5=>'été','automne');

$infosDate = array(
	'joursem' => 'lundi',
	'jour'	=> 4,
	'mois'	=> 'novembre',
	'année' => 2013
);

$tabJours = array('dimanche','lundi','mardi','mercredi',
				'jeudi','vendredi','samedi');
$tabMois = array('janvier','février','mars',
				'avril','mai','juin','juillet',
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
		'langues' => array('fr','nl','en','de')
	),
	'France' => array(
		'capitale' => 'Paris',
		'monnaie' => 'euro',
		'superficie' => 675417,
		'langues' => 'fr'
	),
	'Japon' => array(
		'capitale' => 'Tokyo',
		'monnaie' => 'yen',
		'superficie' => 377915,
		'langues' => 'jp'
	),
	'Suisse' => array(
		'capitale' => 'Berne',
		'monnaie' => 'francs suisses',
		'superficie' => 41285,
		'langues' => array('de','fr','it','rm')
	)
);

//1. Affichage brute
//Solution 1: clé/indice et valeur des données
echo '<pre>'; print_r($tabPoids); echo '</pre>';
//Solution 2: plus d'informations (taille du tableau et type des données)
echo '<pre>'; var_dump($tabPoids); echo '</pre>';

echo '<pre>'; print_r($tabPrenoms); echo '</pre>';
echo '<pre>'; print_r($saisons); echo '</pre>';
echo '<pre>'; print_r($infosDate); echo '</pre>';
echo '<pre>'; print_r($tabJours); echo '</pre>';
echo '<pre>'; print_r($tabMois); echo '</pre>';
echo '<pre>'; print_r($dateComplet); echo '</pre>';

//2. Affichez chaque poids du tableau $tabPoids 
//    sur un paragraphe différent.
for($i=0;$i<count($tabPoids);$i++) {
	echo "<p>$tabPoids[$i]</p>";
}

foreach($tabPoids as $poids) {
	echo "<p>$poids</p>";
}

//3. Affichez les prénoms du tableau $tabPrenoms 
//   sous forme de liste non ordonnée (ul).
echo '<ul>';
foreach($tabPrenoms as $prenom) {
	echo '<li>'.htmlentities($prenom).'</li>';		//Convertir les caractères spéciaux en entités HTML
}
echo '</ul>';

//4. Ordre inverse
//Solution 1
echo '<ul>';
for($i=count($tabPrenoms)-1;$i>=0;$i--) {
	echo '<li>'.htmlentities($tabPrenoms[$i]).'</li>';
}
echo '</ul>';

//Solution 2: coûteux en opérations et en mémoire
$tabInverse = array_reverse($tabPrenoms);

echo '<ul>';
foreach($tabInverse as $prenom) {
	echo '<li>'.htmlentities($prenom).'</li>';
}
echo '</ul>';

//Solution 3: coûteux en opérations et en mémoire
echo '<ul>';
foreach(array_reverse($tabPrenoms) as $prenom) {
	echo '<li>'.htmlentities($prenom).'</li>';
}
echo '</ul>';

//5. Affichez les poids  supérieur à 50.($tabPoids)
foreach($tabPoids as $poids) {
	if($poids>50) {
		echo "<p>$poids</p>";
	}
}

//6. Affichez un prénom sur deux sous forme de tableau à une colonne.	($tabPrenoms)
//Solution 1: afficher seulement si l'indice est pair
echo '<table style="border:1px solid black">';
for($i=0;$i<sizeof($tabPrenoms);$i++) {
	if($i%2==0) {
		echo '<tr><td style="border:1px solid black">'.htmlentities($tabPrenoms[$i]).'</td></tr>';
	}
}
echo '</table>';

//Solution 2: sauter un tour si l'indice est impair
echo '<table>';
for($i=0;$i<sizeof($tabPrenoms);$i++) {
	if($i%2==1) {
		continue;
	}
	echo "<tr><td>".htmlentities($tabPrenoms[$i])."</td></tr>";
}
echo '</table>';

//Solution 3: avancer 2 par 2 => mieux
echo '<table>';
for($i=0;$i<sizeof($tabPrenoms);$i+=2) {
	echo "<tr><td>".htmlentities($tabPrenoms[$i])."</td></tr>";
}
echo '</table>';

foreach($tabPrenoms as $indice => $prenom) {
	if($indice%2==1) {
		echo "<p>$prenom</p>";
	}
}
//7. Affichez chaque saison du tableau $tabSaisons séparés par une virgule et un espace
//Solution 1: ajouter une virgule-espace seulement si ce n'est pas la dernière valeur
$dernier = end($saisons);
echo "<p>Solution 1: ";
for(reset($saisons);current($saisons);next($saisons)) {
	if(current($saisons) != $dernier) {
		echo current($saisons).", ";
	}
}
echo end($saisons)."</p>";	//Afficher le dernier

//Solution 2: ajouter une virgule-espace après chaque valeur, puis retirer la dernière
$str = '<p>Solution 2: ';
for(reset($saisons);current($saisons);next($saisons)) {
	$str .= current($saisons).', ';
}
$str = substr($str,0,-2);				//Retrait des 2 derniers caractères
$str .= '</p>';
echo $str;

//Solution 3: utiliser une fonction prédéfinie => mieux
$str = implode(', ',$saisons);
echo "<p>Solution 3: $str</p>";

//8. Affichez les données du tableau $infosDate sous la forme:
//	 Nous sommes en 2013, le lundi 4 novembre.
echo "<p>Nous sommes en ".$infosDate['année'].", le {$infosDate['joursem']} "
		.$infosDate['jour']." ".$infosDate['mois'].".</p>";


//9. Sachant que vous disposez des tableaux $tabJours et $tabMois.
//   Affichez les données du tableau $dateComplet sous la forme:
//	 Nous sommes un lundi de novembre et il est 15:23.
echo "<p>Nous sommes un ". $tabJours[$dateComplet['wday']] ." de ".
		$tabMois[$dateComplet['mon']-1] ." et il est ".
		$dateComplet['hours'].":".$dateComplet['minutes']."</p>";
		
// 10.	En utilisant le tableau $infosPays,
	// a.	Affichez uniquement toutes les capitales.
	
foreach($infosPays as $pays => $tabData) {
	foreach($tabData as $info => $value) {
		if($info=='capitale') {
			echo "<p>$value</p>";
		}
	}
}

foreach($infosPays as $pays => $tabData) {
	echo "<p>{$tabData['capitale']}</p>";
}

	// b.	Affichez en détails toutes les données de tous les pays (en indiquant le pays).
foreach($infosPays as $pays => $tabData) {
	echo "<h1>$pays</h1>";
	foreach($tabData as $info => $value) {
		if(!is_array($value)) {
			echo "<p>$info: $value</p>";
		} else {
			echo "<h2>$info:</h2>";
			echo "<ul>";
			foreach($value as $langue) {
				echo "<li>$langue</li>";
			}
			echo "</ul>";
		}
	}
}
	
	// c.	Affichez la superficie du pays dont la capitale est Paris.
	foreach($infosPays as $pays => $tabData) {
		if($tabData['capitale']=='Paris') {
			echo "<p>".$tabData['superficie']."</p>";
		}
	}
	
	// d.	Affichez tous les pays dont la superficie est supérieure à celle de la Suisse.
	$superficieSuisse = $infosPays['Suisse']['superficie'];
	
	foreach($infosPays as $pays => $tabData) {
		if($tabData['superficie'] > $superficieSuisse) {
			echo "<p>$pays</p>";
		}
	}
	
	// e.	Affichez toutes les langues officielles de Belgique.
	foreach($infosPays['Belgique']['langues'] as $langue) {
		echo "<p>$langue</p>";
	}
	
	// f.	Affichez (en indiquant le pays) les langues officielles de tous les pays.
	
	
	// g.	Affichez la monnaie des deux derniers pays.

//Modifier---------------------------------------------------------
//1.	En utilisant le tableau $tabPrenoms,
	// a.	Ajoutez à la fin les prénoms suivants: Mike, Tanaka, Ramón.
	// b.	Ajoutez au début les prénoms suivants: César, Pénélope.
	// c.	Supprimez le dernier prénom.
	// d.	Supprimez le premier prénom.
	// e.	Insérez le prénom Julie en deuxième position.
	// f.	Supprimez les prénoms du troisième au cinquième prénom.
// 2.	En utilisant le tableau $tabPoids,
	// a.	Augmentez tous les poids de 5kg avec une boucle for.
	// b.	Augmentez tous les poids de 5kg avec une boucle foreach.
// 3.	En utilisant le tableau $infosPays,
	// a.	Ajoutez l'anglais comme langue supplémentaire pour tous les pays.

var_dump($infosPays);
	
foreach($infosPays as $pays => &$tabData) {
	if(is_array($tabData['langues'])) {
		$tabData['langues'][] = 'anglais';
	} else {
		$tabData['langues'] = array( $tabData['langues'] , 'anglais');
	}
}

var_dump($infosPays);
	
	// b.	Ajoutez comme information supplémentaire l'extension de domaine correspondante à chaque pays (be, fr, jp, ch).
foreach($infosPays as $pays => $tabData) {
	if($pays=='Belgique') { 
		$tabData['extension'] = 'be';
	} elseif($pays=='France') {
		$tabData['extension'] = 'fr';
	}
	
	// //OU un switch
	// switch($pays) {
		// case 'Belgique': 
			// $tabData['extension'] = 'be'; 
			// break;
		// case 'France': 
			// $tabData['extension'] = 'fr'; 
			// break;
		
	// }
}
$infosPays['Belgique']['extension'] = 'be';
$infosPays['France']['extension'] = 'fr';
$infosPays['Japon']['extension'] = 'jp';
$infosPays['Suisse']['extension'] = 'ch';

?>
</body>
</html>