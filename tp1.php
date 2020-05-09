<!Doctype HTML>
<html>
<head>
<meta charset="UTF-8" />
<title>Ma page php</title>
</head>
<body>
<?php
echo"hello aicha ;) ";
$prenom="Aisha" ; 
echo " bonsoir $prenom ";
//mettre le code PHP ici

$tab_indice1=array("Alger","Tunis","Rabat"); print_r($tab_indice1) ;

$tab_indice2[]= "Alger" ; $tab_indice2[]= "Tunis" ; $tab_indice2[]= "Rabat" ;
print_r($tab_indice2) ;
$tab_indice3[0]= "Alger" ;$tab_indice3[1]= "Tunis" ;$tab_indice3[2]= "Rabat" ;
print_r($tab_indice3);

?>
</body>
</html>
