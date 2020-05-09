<!Doctype HTML>
<html>
<head>
<meta charset="UTF-8" />
<title>Ma page php</title>
</head>
<body>
    <table border="1">
    <?php 
    $nbr_ligne = 10;
    $nbr_colonne =10;
    for ( $i=1;$i<=$nbr_ligne;$i++)
    
    { ////duplication des lignes 
        ?> <tr> 
        <?php
         for ( $j=1;$j<=$nbr_ligne;$j++)
        
        {  ////construction des cellules de la meme ligne 
            
            ?>  <td> <?php echo"$j*$i = "; echo $j*$i; ?></td>
       <?php  } ?> 
       </tr>   <?php
    }
    ?>
        
    </table>

</body>
</html>
