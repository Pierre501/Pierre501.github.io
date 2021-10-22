<?php
    include("data.php");
    include("fonctions.php");
    $nbeleve=count($eleve);

?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8"> 
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
        <h1>Liste des étudiants</h1>
        <table border="1" cellspacing="0" cellpadding="0">
            <tr>
                <th>Numero</th>
                <th>Nom</th>
                <th>Age</th>
                <th>Moyenne</th>
                <th>Mention</th>
            </tr>
            <?php 
            for($i=0;$i<$nbeleve;$i++) {
                $moyenne=calculMoyenne($note[$i],$coeff);
                $mention=mention($moyenne);
            ?>
            <tr>
                <td>
                <?php echo $eleve[$i]['numero']; ?></td>
                <td align="right"><a href="fiche.php?numero=<?php echo $i; ?>&moyenne=<?php echo $moyenne;?>&mention=<?php echo $mention;?>"><?php echo $eleve[$i]['nom']; ?></a></td>
                <td align="right"><?php echo calculAge($eleve[$i]['annee_naissance']); ?></td>
                <td align="right"><?php echo $moyenne; ?></td>
                <td align="right"><?php echo $mention; ?></td>
            </tr>  
            <?php } ?>  
        </table>
	</body>
</html>