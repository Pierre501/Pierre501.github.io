<?php
    include("data.php");
    include("fonctions.php");

    $num=$_GET['numero'];
    $nbmatiere =count($matiere);

    $moyenne=calculMoyenne($note[$num],$coeff);
    $mention=mention($moyenne);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Fiche</title>
        <meta charset="UTF-8"> 
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
        <h1>Fiche Eleve </h1>
        <p>Numéro :<?php echo $eleve[$num]['numero']; ?> </p>
        <p>Nom :<?php echo $eleve[$num]['nom'];  ?> </p>
        <p>Age :<?php echo calculAge($eleve[$num]['annee_naissance']); ?> </p>
        <img width="100" src="images/<?php echo $num; ?>.png">
        <table border="1" cellspacing="0" cellpadding="0">
            <tr>
                <th>Matière</th>
                <th>Notes</th>
            </tr>
            <?php for($i=0;$i<$nbmatiere;$i++) {  ?>
            <tr>
                <td align="right"><?php echo $matiere[$i]?></td>
                <td align="right"><?php echo $note[$num][$i] ?></td>
            </tr>  
            <?php  }  ?>  
        </table>

        <p>Moyenne :<?php echo $moyenne; ?> </p>
        <p>Mention :<?php echo $mention; ?> </p>
        <p><a href="index.php"><< Retour</a></p>
	</body>
</html>