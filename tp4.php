<!Doctype HTML>
<html>
<head>
<meta charset="UTF-8" />
<title>Ma page php</title>
</head>
<body>
<?php
$tab_indice1=array("Alger","Tunis","Rabat"); print_r($tab_indice1); echo"<br/>";
//tableau indicé
foreach($tab_indice1 as $ville)
      {echo "$ville<br>";}
       echo"<hr>";
//Lecture de tableau indicé ou associatif avec récupération des indices
foreach($tab_indice1 as $indice=>$ville)
        {echo "L'élément d'indice $indice a la valeur $ville <br/>";} 
?>
</body>
</html>
