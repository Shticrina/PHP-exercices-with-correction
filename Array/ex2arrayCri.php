<meta charset="utf-8" />
<?php
/* Cristina Dinca, ex 2 Array, 08 dec 2015 */

/* 1. Stockez dans un tableau associatif la liste des pays et de leur capitale respective.
	  Le pays servira de clé et les capitales seront les valeurs. */

$tabCapitales = array(
	'Belgique' => 'Bruxelles',
	'France' => 'Paris',
	'Espagne' => 'Madrid',
	'Portugal' => 'Lisbonne',
	'Suisse' => 'Berne',
	'Japon' => 'Tokyo'
);	  

	// a.	Affichez la liste des capitales triées par ordre croissant, puis décroissant.
echo '<p>Ex. 1 a) : </p>';	

asort($tabCapitales);

echo '<p><em>Les capitales en ordre croissant: </em></p><ul>';
foreach($tabCapitales as $capitale) {
	echo '<li>'.$capitale.'</li>';
}
echo '</ul>';

echo '<p><em>Les capitales en ordre décroissant: </em></p><ul>';
/*$tabCapitales = array_reverse($tabCapitales);
foreach($tabCapitales as $capitale) {
	echo '<li>'.$capitale.'</li>';
}
echo '</ul>';*/

// ou :
/*for($i=count($tabCapitales)-1;$i>=0;$i--) {
	echo '<li>'.$tabCapitales[$i].'</li>';
}
echo '</ul>';*/

// ou :
arsort($tabCapitales);
foreach($tabCapitales as $capitale) {
	echo '<li>'.$capitale.'</li>';
}
echo '</ul>';

	// b.	Affichez la liste des pays triés par ordre croissant.
echo '.......................................................<p>Ex. 1 b) : </p>';	

$tabPays = array_keys($tabCapitales);

asort($tabPays);

echo '<p><em>Les pays en ordre croissant: </em></p><ul>';
foreach($tabPays as $pays) {
	echo '<li>'.$pays.'</li>';
}
echo '</ul>';

	/* c.	Affichez la liste des pays et leur capitale sous le format suivant : PAYS : Capitale
			Ne pas utiliser les styles CSS mais des fonctions de manipulation de chaînes de caractères.*/
echo '.......................................................<p>Ex. 1 c) : </p>';	

foreach($tabCapitales as $pays => $capitale) {
	echo '<p>'.strtoupper($pays).' : '.$capitale.'</p>';
}


/* 2. Stockez dans un tableau associatif la liste des pays et de leur capitale respective.
	  Le pays servira de clé et les capitales seront les valeurs.*/
	  
	// a.	Copiez tous les pays (les clés) dans un tableau nommé $tabPays.
echo '.......................................................<p>Ex. 2 a) : </p>';	

	// b.	Triez le tableau $tabPays par ordre décroissant (/!\ Choisir la bonne fonction de tri)
echo '.......................................................<p>Ex. 2 b) : </p>';	

	// c.	Afficher le tableau $tabPays
			// i.	De façon brute
			// ii.	Chaque pays sur une ligne
echo '.......................................................<p>Ex. 2 c) : </p>';	

	// d.	Triez le tableau $tabCapitale par ordre décroissant
echo '.......................................................<p>Ex. 2 d) : </p>';	

	// e.	Affichez les pays en MAJUSCULES et en bleu
echo '.......................................................<p>Ex. 2 e) : </p>';	

echo '<p><em>Les pays en majuscules et en bleu: </em></p><ul>';
foreach($tabCapitales as $pp => $capit) {
	echo '<li style="color:blue">'.strtoupper($pp).'</li>';
}
echo '</ul>';

	// f.	Copiez les 3 derniers pays et leur capitale dans un tableau $tab3last
echo '.......................................................<p>Ex. 2 f) : </p>';	

$tab3last = array_slice($tabCapitales,-3,3);
var_dump($tab3last);

	// g.	Affichez les pays (et les capitales) dont la capitale
			// i.	contient la lettre 'e'
			// ii.	se termine par 's'
			// iii.	commence par 'b'
echo '.......................................................<p>Ex. 2 g) : </p>';	

$tabEx = $tabCapitales;
echo '<p><em>Les pays et les capitales dont la capitale contient la lettre \'e\'</em></p>';		
foreach($tabEx as $pays => $capitale) {
	if(strpos($capitale,'e')) {
		echo '<p>'.$pays.' : '.$capitale.'</p>';
	}
}

echo '<p><em>Les pays et les capitales dont la capitale se termine par \'s\'</em></p>';		
foreach($tabEx as $pays => $capitale) {
	if(strrpos($capitale,'s')===strlen($capitale)-1) {
		echo '<p>'.$pays.' : '.$capitale.'</p>';
	}
}

echo '<p><em>Les pays et les capitales dont la capitale commence par \'b\'</em></p>';		
foreach($tabEx as $pays => $capitale) {
	if(strpos($capitale,'B')===0) {
		echo '<p>'.$pays.' : '.$capitale.'</p>';
	}
}
		
// 3. Affichez un pays et sa capitale au hazard. Format : << Belgique a pour capitale Bruxelles. >>
echo '.......................................................<p>Ex. 3 : </p>';	

echo '<p><em>Un pays et sa capitale au hazard:</em></p>';		
$tabRandPos = array_keys($tabCapitales);
$randpos = array_rand($tabRandPos);
echo $randpos;
echo $tabCapitales[$randpos];
//echo '<p>'.$randpos.' : '.$tabCapitales[$randpos].'</p>';
?>