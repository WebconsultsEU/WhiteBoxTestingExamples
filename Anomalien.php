<?php

/*
aten werden in Variablen gespeichert. Diese Variablen haben einen definierten Lebenszyklus:
undefiniert/undeklariert (u): Variable hat weder einen Wert noch einen Speicherplatz
deklariert (d): Variable hat keinen definierten Wert, ihr wurde aber schon Speicher zugewiesen.
initialisiert (i): Zuweisung eines Wertes an eine Variable,
referenziert (r): Lesen/Verwenden des Variablen-Wertes,
Dann kann es es viele Datenfluss-Anomalien geben: z.B. dr, id, ii.
*
 * 
 */        
   
// 
function getContentAdd($givenAge, $givenGender) {
    if($givenAge === false) {
        $age = 16;
    }
    if($givenGender === false) {
        $gender = 'male';
    }
    
    echo "display advert for ".$age." gender ".$gender;    
}

function getContentAddA($givenAge, $givenGender) {
    if($givenAge === false) {
        $age = 16;
    }
    if($givenGender === false) {
        $gender = 'male';
    }    
    $age = $givenAge;
    echo "display advert for ".$age." gender ".$gender;    
}

const DEFAULT_AGE =16;
//du
function getContentAddB($givenAge, $givenGender) {
    $age = $givenAge;
    $gender = $givenGender;
    $age = $age - 1; 
    $age = DEFAULT_AGE;
    
    echo "display advert for ".$age." gender ".$gender;    
    
    
}

//du
function getContentAddC($givenAge, $givenGender) {
    $age = $givenAge;
    $nextYearAge = $age+1;
    
    echo "display advert for ".$age." gender ".$gender;      
    
}

//ur
function getContentAddC($givenAge, $givenGender) {
    $age = $givenAge;
    unset($givenAge);
    $nextYearAge = $givenAge + 1;
    
    echo "display advert for ".$age." gender ".$gender;      
    
}
       
