<?php
// ex 3 et 4 - (les variables)
// Déclaration des variables et constantes

$sal = array(1230,3400,2300,1750,3000);
$salaireTotal = 0;
$prixHTVA = 1600;
define('TVA',0.21);
define('SEUIL',1500);
define('REMISE',0.05);

for ($i=0;$i<count($sal);$i++) {
	$salaireTotal += $sal[$i];
}

$salaireMoyen = $salaireTotal/count($sal);

if ($prixHTVA>=SEUIL) {
	$prixTTC = $prixHTVA*(1+TVA);
	$prixTTC *= (1-REMISE);
} else {
	$prixTTC = $prixHTVA*(1+TVA);
}

$prixTTC = round($prixTTC);

// Affichage
echo '<p>Le salaire total est: '.$salaireTotal.' euros</p>';
echo '<p>Le salaire moyen est: '.$salaireMoyen.' euros</p>';
echo '<p>[ '.$prixHTVA.' euros au taux de '.(TVA*100).'% donne '.$prixTTC.' euros à payer ]</p>';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Variables ex 3 et 4</title>
</head>
<body>
</body>
</html>