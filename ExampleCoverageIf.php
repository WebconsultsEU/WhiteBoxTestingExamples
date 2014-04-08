<?php

$userAge = 18;
$fsk18 = true;
$userGender = 'female';


/**
 * One Decisssion
 */
if ($userAge < 18) {
    //a
    echo "nicht für jugendliche";
} elseif ($userAge >= 18 && $userGender === 'male' || $fsk18 === true) {
    //b
    echo "für erwachsene männer";
    if ($userAge >= 50) {
        //c
        echo "auch für alte";
    } else {
        //d
    }
} elseif ($userGender == 'female') {
    //e
    echo "für die damen";
}  


/*
  f
  a-f
  b-c-f
  b-d-f
  e-f
 */






$value =
        $value = 'hello';

echo $value;
