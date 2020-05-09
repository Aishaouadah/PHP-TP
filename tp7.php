<!Doctype HTML>
<html>
<head>
<meta charset="UTF-8" />
<title>Ma page php</title>
</head>
<body>
<?php
$tableau["Algerie"]="Alger";
$tableau["Tunisie"]="Tunis";
$tableau["Maroc"]="Rabat";
$tableau["France"]="Paris";
$tableau["Turquie"]="Ankara";
$tableau["Bulgarie"]="Sofia";
$tableau["Egypte"]="Caire";

foreach( $tableau  as $key => $value)
    {
       echo"La Capitale de $key est $value " ; 
       echo'<br>';
    }
    ?>
</body>
</html>
