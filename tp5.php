<!Doctype HTML>
<html>
<head>
<meta charset="UTF-8" />
<title>Ma page php</title>
</head>
<body>
<?php
//Passage chaîne –> tableau
$ch1="ceci est une phrase";
$tab1=explode(" ",$ch1);
echo $ch1."<br>";
print_r($tab1);
//Passage tableau –> chaîne
$ch2=implode(" ",$tab1);
echo $ch2,"<br>"; 
?>
</body>
</html>
