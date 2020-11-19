<meta charset="utf-8" />
<?php
$dir = "./images";
$tabExt = array('jpg','jpeg','gif','png');

$scan = scandir($dir);
// var_dump($scan);

echo 'Voilà mes images:<br /><br />';

if (is_dir($dir)) {
    if ($dh=opendir($dir)) {
        while(($file = readdir($dh))!==false) {
			$ext = substr($file,-3);
			if(in_array($ext, $tabExt)) {
				//echo substr($file,0,-4);
				echo " <img src='$dir/".$file."' alt='texte alternatif' width='150' /> ";
			}
        }

        closedir($dh);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<body>
<p>
	<a href="imagesCri.php?affichez=poze" >Affichez les images du dossier <strong>images</strong></a>
</p>
</body>
</head>
</html>