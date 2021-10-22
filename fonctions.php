<?php

function calculMoyenne($note,$coeff){
    $nbNotes=count($note);
    $nbCoef=count($coeff);
    $moyenne=0;
    $TotalNote = 0;
    
    for($i=0;$i<$nbNotes;$i++)
    {
        $TotalNote = $TotalNote + ( $note[$i]* $coeff[$i] ) ;

    }
    $moyenne = $TotalNote / calculTotalCoefficient($coeff);
    return number_format($moyenne,2); 
}


function calculTotalCoefficient($coeff){
    $nbCoeff=count($coeff);
    $TotalCoeff = 0;
    
    for($i=0;$i<$nbCoeff;$i++)
    {
        $TotalCoeff = $TotalCoeff +  $coeff[$i] ;

    }
    return $TotalCoeff;

}

function mention($moyenne){
    $mention="";
    if($moyenne<10){
        $mention="Recalé";
    }else if($moyenne <12 && $moyenne >=10){
        $mention="Passable";
    }else if($moyenne <14 && $moyenne >=12){
        $mention="Assez-bien";
    }else if($moyenne <16 && $moyenne >=14){
        $mention="Bien";
    }else if($moyenne >16){
        $mention="Très bien";
    }
    return $mention;
}

function calculAge($annee_naissance){
    date_default_timezone_set('Africa/Nairobi'); //pour enlever le wrning sur les dates.
    $annee_encours = date('Y'); //fonction php
    $age = $annee_encours - $annee_naissance;
    return $age; 
}


?>