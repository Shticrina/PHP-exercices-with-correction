<?php 
echo "Version de PHP : ",PHP_VERSION, "<br />";
echo "Système d'exploitation du serveur : ",PHP_OS, "<br />";
echo "Langue du navigateur client : ",$_SERVER["HTTP_ACCEPT_LANGUAGE"], "<br />","<br />";

$x = 'PHP5';
$str = 'hello';

echo "\$x vaut : $x et est de type ", gettype($x),"<br />"; 

$a[]=&$x; 
echo "\$a[0] vaut : $a[0] et est de type ", gettype($a),"<br />"; 

$y=" 5 eme version de PHP";
echo "\$y vaut : $y et est de type ", gettype($y),"<br />"; 

$z=$y*10;
echo "\$z vaut : $z et est de type ", gettype($z),"<br />"; 

$x.=$y;
echo "\$x vaut : $x et est de type ", gettype($x),"<br />"; 

$y*=$z;
echo "\$y vaut : $y et est de type ", gettype($y),"<br />"; 

$a[0]="MySQL"; 
echo "\$a[0] vaut : {a[0]} et est de type ", gettype($a),"<br /><br />"; 

echo '<p>Le chaine "'.$str.'" inversee donne "'.strrev($str).'"</p>';
?> 