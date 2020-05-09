<!Doctype HTML>
<html>
<head>
<meta charset="UTF-8" />
<title>Ma page php</title>
</head>
<body>
<?php
$tab_indice1[0] ="aicha" ; 
$tab_indice1[1] ="ouadah" ; 
$tab_indice1[2] ="menelle" ; 
$tab_indice1[3] ="amine" ; 
reset($tab_indice1);
//tableau indicé ou associatif
foreach ($tab_indice1 as $key => $value) {
    echo "{$key} => {$value} ";
    
}
?>
</body>
</html>
